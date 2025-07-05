<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;
use App\Notifications\VaccinationReminder as NotificationsVaccinationReminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class vaccinationReminder extends Controller
{
    public function getNotification()
    {
           $vaccinations = Vaccination::with('birdRegister')->get();

        foreach ($vaccinations as $vaccine) {
            foreach (['required_vaccines', 'optional_vaccines'] as $type) {
                foreach ($vaccine->vaccination_details[$type] ?? [] as $entry) {
                    $status = Vaccination::formatScheduleStatus($entry['scheduled_date']);

                    if (in_array($status, ['Today', 'Tomorrow'])) {
                        Notification::route('mail', 'test@example.com')
                            ->notify(new NotificationsVaccinationReminder([
                                'batch_number' => $vaccine->birdRegister->bird_details['batch_number'],
                                'name' => $entry['name'],
                                'scheduled_date' => $entry['scheduled_date'],
                            ]));
                    }
                }
            }
        }
    return response()->json(['message' => 'Reminders sent']);
    }
}
