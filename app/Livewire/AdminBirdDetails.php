<?php

namespace App\Livewire;

use App\Models\BirdRegister;
use App\Models\Vaccination;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;

class AdminBirdDetails extends Component
{
    public $displayBirds = null;
    public $vaccineRows = [];
    public $showAlert = false;
    public $alertMessage = '';



    public function updatedDisplayBirds()
    {
        $this->displayVaccines();
        $this->alertMessage = '';
    }

    public function displayVaccines()
    {
        $vaccinations = Vaccination::where('bird_register_id', $this->displayBirds)->first(); //get()
        $this->vaccineRows = [];
        if ($vaccinations && isset($vaccinations->vaccination_details)) {
            $combined_vaccines = array_merge(
                $vaccinations->vaccination_details['required_vaccines'] ?? [],
                $vaccinations->vaccination_details['optional_vaccines'] ?? []
            );


            foreach ($combined_vaccines as $vaccine) {
                $this->vaccineRows[] = [
                    'batch_id' => $vaccinations->bird_register_id,
                    'batch_number' => $vaccinations->birdRegister->bird_details['batch_number'],
                    'name' => $vaccine['name'],
                    'scheduled_date' => $vaccine['scheduled_date'],
                    'status' => $vaccine['status'] ?? 'pending'
                ];
            }
        }
    }

    public function markAsDone($batchId, $vaccineName)
    {
        // Log::info('markAsDone called', ['batchId' => $batchId, 'vaccineName' => $vaccineName]);
        $vaccination = Vaccination::where('bird_register_id', $batchId)->first();
        $details = $vaccination->vaccination_details;
        $vaccineUpdated = false;

        // First, find the vaccine and check if it's due today
        foreach (['required_vaccines', 'optional_vaccines'] as $type) {
            if (!isset($details[$type])) continue;

            foreach ($details[$type] as &$vaccine) {
                if ($vaccine['name'] === $vaccineName) {
                    $scheduledDate = Carbon::parse($vaccine['scheduled_date']);
                    $period=now()->diffInDays($scheduledDate,false);
                    if ($scheduledDate->isSameDay(now()) ||  $scheduledDate->isPast() && $scheduledDate->diffInDays(now()) <= 3) {
                        // Vaccine is due today - mark as done
                        $vaccine['status'] = 'done';
                        $vaccineUpdated = true;
                        break 2; // Break out of both loops
                    } else {

                        $this->alertMessage = 'This vaccine is not due until ' . $scheduledDate->toFormattedDateString();
                        $this->displayVaccines();
                        return; // Stop execution here
                    }
                }
            }
        }



        if ($vaccineUpdated) {
            $vaccination->update(['vaccination_details' => $details]);
            $this->alertMessage = 'Vaccine marked as done.';
        }
        $this->displayVaccines(); // Refresh
    }




    public function render()
    {
        $vaccines = Vaccination::whereHas('birdRegister')->with('birdRegister')->get();
        return view('livewire.admin-bird-details', compact('vaccines'));
    }
}
