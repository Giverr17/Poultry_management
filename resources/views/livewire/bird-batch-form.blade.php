<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-light text-white text-center">
            <h5 class="mb-0">
                {{ $step === 1 ? 'Batch Registration' : 'Vaccination Setup' }}
            </h5>
        </div>
        <div class="success">
        @if(session('success'))
        <small class="text-success">{{ session('success')}}</small>
        @endif
        </div>
        <div class="card-body">
            
            {{-- Step 1: Batch Info --}}
            @if ($step === 1)
                <div class="mb-3">
                    <label class="form-label text-dark">Batch Name</label>
                    <input type="text" wire:model.defer="batch_name" class="form-control" placeholder="Enter Batch Name">
                    @error('batch_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-dark">Arrival Date</label>
                    <input type="date" wire:model.defer="arrival_date" class="form-control">
                    @error('arrival_date') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Bird Type/Quantity Input --}}
                <div class="mb-3">
                    <label class="form-label text-dark">Bird Types & Quantities</label>
                    @foreach ($birds as $index => $bird)
                        <div class="row mb-2">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Type"
                                    wire:model="birds.{{ $index }}.type">
                                @error("birds.$index.type") <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Quantity"
                                    wire:model="birds.{{ $index }}.quantity">
                                @error("birds.$index.quantity") <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-light btn-sm" style="position:static !important"
                                    wire:click="removeBird({{ $index }})" @if (count($birds) === 1) disabled @endif>
                                    &times;
                                </button>
                            </div>
                        </div>
                    @endforeach
                    <button type="button" style="position:static !important" class="btn btn-light btn-sm" wire:click="addBird">+ Add Bird</button>
                </div>

                {{-- Image --}}
                <div class="mb-3">
                    <label class="form-label text-dark">Bird Image (Optional)</label>
                    <input type="file" wire:model="image" class="form-control">
                    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            @endif

            {{-- Step 2: Vaccine Setup --}}
            @if ($step === 2)
                <div class="mb-3">
                    <div class="form-check">
                        <input type="checkbox" wire:model="include_newcastle" class="form-check-input" id="newcastle" disabled>
                        <label for="newcastle" class="form-check-label text-dark">
                            Include Newcastle Disease Vaccination Plan
                        </label>
                        <ul class="text-dark">
                            @foreach ($requiredVaccines as $key)
                            <input type="checkbox" wire:model="include_newcastle" class="form-check-input " id="newcastle" disabled>
                            <li>
                             {{ $key['name'] }}  (in {{ $key['days_after'] }} days) 
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <hr>

                <h6 class="text-dark">Optional Supplements</h6>
                @foreach ($optionalVaccinesList as $key => $v)
                    <div class="form-check">
                        <input type="checkbox" wire:model="optional_vaccines"
                            value="{{ $key }}" class="form-check-input" id="opt_{{ $key }}">
                        <label class="form-check-label text-dark" for="opt_{{ $key }}">
                            {{ $v['name'] }} (in {{ $v['days_after'] }} days)
                        </label>
                    </div>
                @endforeach
            @endif

            {{-- Pagination Buttons --}}
            <div class="d-flex justify-content-between mt-4">
                @if ($step > 1)
                    <button wire:click="prevStep" style="position:static !important" class="btn btn-light">← Back</button>
                @endif

                @if ($step < 2)
                    <button wire:click="nextStep" style="position:static !important" class="btn btn-light">Next →</button>
                @else
                    <button wire:click="submit" style="position:static !important" class="btn btn-light w-50">Finish & Save</button>
                @endif
            </div>
        </div>
    </div>
</div>
