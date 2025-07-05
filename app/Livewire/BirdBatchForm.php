<?php

namespace App\Livewire;

use App\Models\BirdRegister;
use App\Models\Vaccination;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Str;


class BirdBatchForm extends Component
{
    use WithFileUploads;

    public $batch_name;
    public $batch_number;
    public $arrival_date;
    public $image;
    public $birds = [['type' => '', 'quantity' => '']];
    public $step = 1;
    public $include_newcastle = true;
    public array $requiredVaccines = [
        [
            'name' => 'Lasota (Eye/Nasal Drop)',
            'days_after' => 7,
            'status' => 'pending'
        ],
        [
            'name' => 'Gumboro (Intermediate)',
            'days_after' => 14,
            'status' => 'pending'
        ],
        [
            'name' => 'Lasota (Drinking Water)',
            'days_after' => 21,
            'status' => 'pending'
        ],
        [
            'name' => 'NDV Komarov (Injection)',
            'days_after' => 28,
            'status' => 'pending'
        ],
        [
            'name' => 'Gumboro Booster',
            'days_after' => 35,
            'status' => 'pending'
        ],
        [
            'name' => 'Lasota Booster',
            'days_after' => 42,
            'status' => 'pending'
        ],
    ];


    public array $optionalVaccinesList =
    [
        'vit_ade' => ['name' => 'Vitamin A, D & E', 'days_after' => 3, 'status' => 'pending'],
        'multivitamins' => ['name' => 'Multivitamins', 'days_after' => 6, 'status' => 'pending'],
        'electrolytes' => ['name' => 'Electrolytes', 'days_after' => 7, 'status' => 'pending'],
        'immune_booster' => ['name' => 'Immune Booster', 'days_after' => 10, 'status' => 'pending'],
        'calcium' => ['name' => 'Calcium Supplement', 'days_after' => 14, 'status' => 'pending'],
        'vit_c' => ['name' => 'Vitamin C', 'days_after' => 15, 'status' => 'pending'],
        'probiotics' => ['name' => 'Probiotics', 'days_after' => 16, 'status' => 'pending'],
    ];

    public array $optional_vaccines = []; // for the input form

    public function mount()
    {
        $this->include_newcastle = true;
    }


    public function addBird()
    {
        $this->birds[] = ['type' => '', 'quantity' => ''];
    }

    public function removeBird($index)
    {
        unset($this->birds[$index]);
        $this->birds = array_values($this->birds); //re-index the array
    }

    private function generateBatchNumber()
    {
        $lastBatch = BirdRegister::latest('id')->first();

        if (!$lastBatch) {
            return 'BATCH_001';
        }

        $lastNumber = (int) filter_var(
            data_get($lastBatch->bird_details, 'batch_number', '0'),
            FILTER_SANITIZE_NUMBER_INT
        );

        $nextNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);

        return 'BATCH_' . $nextNumber;
    }

    public function nextStep()
    {
        $this->step++;
    }
    public function prevStep()
    {
        $this->step--;
    }

    public function submit()
    {
        try {
            // dd('Step 1: Starting validation');

            $this->validate([
                'batch_name' => 'required|string|max:255',
                'arrival_date' => 'required|date',
                'birds.*.type' => 'required|string',
                'birds.*.quantity' => 'required|integer|min:1',
                'image' => 'nullable|image|max:2048',
            ]);

            // dd('Step 2: Validation passed');

            if ($this->image) {
                $this->image = $this->image->storeAs('birds', time() . '_' . $this->image->getClientOriginalName(), 'public');
            }


            // dd('Step 3: Image processed');

            // Restructure the array key:value
            $birdData = [];
            foreach ($this->birds as $bird) {
                $birdData[$bird['type']] = $bird['quantity'];
            }

            // dd('Step 4: Bird data processed', $birdData);

            $this->batch_number = $this->generateBatchNumber();

            // dd('Step 5: Batch number generated', $this->batch_number);

            DB::beginTransaction();

            // dd('Step 6: Transaction started');

            $batch = BirdRegister::create([
                'batch_name' => $this->batch_name,
                'bird_details' => [
                    'batch_number' => $this->batch_number,
                    'arrival_date' => $this->arrival_date,
                    'birds' => $birdData,
                    'image' => $this->image
                ]
            ]);

            // dd('Step 7: Batch created', $batch);

            $optionalVaccineData = [];
            $arrivalDate = Carbon::parse($this->arrival_date);

            foreach ($this->optional_vaccines as $key) {
                if (isset($this->optionalVaccinesList[$key])) {
                    $v = $this->optionalVaccinesList[$key];
                    $optionalVaccineData[] = [
                        'name' => $v['name'],
                        'scheduled_date' => $arrivalDate->copy()->addDays($v['days_after'])->toDateString()
                    ];
                }
            }

            // dd('Step 8: Optional vaccines processed', $optionalVaccineData);

            Vaccination::create([
                'bird_register_id' => $batch->id,
                'vaccination_details' => [
                    'required_vaccines' => [
                        [
                            'name' => 'Lasota (Eye/Nasal Drop)',
                            'scheduled_date' => $arrivalDate->copy()->addDays(7)->toDateString(),
                            'status' => 'pending'
                        ],
                        [
                            'name' => 'Gumboro (Intermediate)',
                            'scheduled_date' => $arrivalDate->copy()->addDays(14)->toDateString(),
                            'status' => 'pending'
                        ],
                        [
                            'name' => 'Lasota (Drinking Water)',
                            'scheduled_date' => $arrivalDate->copy()->addDays(21)->toDateString(),
                            'status' => 'pending'
                        ],
                        [
                            'name' => 'NDV Komarov (Injection)',
                            'scheduled_date' => $arrivalDate->copy()->addDays(28)->toDateString(),
                            'status' => 'pending'
                        ],
                        [
                            'name' => 'Gumboro Booster',
                            'scheduled_date' => $arrivalDate->copy()->addDays(35)->toDateString(),
                            'status' => 'pending'
                        ],
                        [
                            'name' => 'Lasota Booster',
                            'scheduled_date' => $arrivalDate->copy()->addDays(42)->toDateString(),
                            'status' => 'pending'
                        ],
                    ],
                    'optional_vaccines' => $optionalVaccineData
                ]
            ]);

            // dd('Step 9: Vaccination created');

            DB::commit();

            // dd('Step 10: Transaction committed');

            session()->flash('success', 'Batch and vaccination saved successfully.');
            $this->reset(['batch_name', 'batch_number', 'arrival_date', 'image', 'birds']);
            $this->birds = [['type' => '', 'quantity' => '']];
            $this->optional_vaccines = [];

            // dd('Step 11: Form reset completed');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $firstError = array_key_first($e->validator->errors()->toArray());
            if (Str::startsWith($firstError, ['batch_name', 'bird_details'])) {
                $this->step = 1;
                throw $e;
            }
            session()->flash('error', 'Something went wrong: ' . $e->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.bird-batch-form');
    }
}
