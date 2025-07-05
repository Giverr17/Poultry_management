<?php

use App\Models\Vaccination;
use App\Notifications\VaccinationReminder;
use Carbon\Carbon;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('vaccinations:update-missed', function () {

    $gracePeriod = 3;
    $vaccination = Vaccination::all();

    if ($vaccination) {
        foreach ($vaccination as $v) {
            $details = $v->vaccination_details;
            $changed = false;

            foreach (['required_vaccines', 'optional_vaccines'] as $type) {
                foreach ($details[$type] as &$vac) {
                    if (!isset($vac['status']) || $vac['status'] === 'pending') {
                        $scheduledDate = Carbon::parse($vac['scheduled_date']);
                        if ($scheduledDate->diffInDays(now(), false) > $gracePeriod) {
                            $vac['status'] = 'missed';
                            $changed = true;
                        }
                    }
                }
            }


            if ($changed) {
                $v->update(['vaccination_details' => $details]);
            }
        }
    }
})->purpose('missed vaccination statuses');

Schedule::command('vaccinations:update-missed')->daily();

Schedule::call(function () {
    $vaccinations = Vaccination::with('birdRegister')->get();

    foreach ($vaccinations as $vaccine) {
        foreach (['required_vaccines', 'optional_vaccines'] as $type) {
            foreach ($vaccine->vaccination_details[$type] ?? [] as $entry) {
                $date=Carbon::parse($entry['scheduled_date']);
                $status = Vaccination::formatScheduleStatus($date);

                if (preg_match('/^(Today|Tomorrow|In)/',$status)) {
                    Notification::route('mail', 'test@example.com')
                        ->notify(new VaccinationReminder([
                            'batch_number' => $vaccine->birdRegister->bird_details['batch_number'],
                            'name' => $entry['name'],
                            'scheduled_date' => $entry['scheduled_date'],
                        ]));
                }
            }
        }
    }
    Log::info('Vaccination reminder triggered');
})->daily();
