{{-- Admin table begins here --}}
<div class="container d-flex justify-content-center align-items-center col-md-10 mt-5">
    <div class="row col-12 col-md-8 col-lg-12 ">
        <div class="card mb-5">
            <div class="card-header text-dark align-items-center">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text">
                        <h5>Bird Details</h5>
                    </div>
                    <div class="col-md-2 mt-1">
                        <select wire:model.live="displayBirds" id="inputState" class="form-select">
                            <option value="">Choose Batch..</option>
                            @foreach ($vaccines as $vaccine)
                                <option value="{{ $vaccine->bird_register_id }}">
                                    {{ $vaccine->birdRegister->batch_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            {{-- @dump($modalMessage) --}}


            @if ($alertMessage)
                <div
                    style="color: #b85c00; background: #fffbe6; border: 1px solid #ffe58f; padding: 8px 16px; border-radius: 4px; margin-bottom: 10px;">
                    {{ $alertMessage }}
                    <button wire:click="$set('alertMessage', '')"
                        style="float:right; background:none; border:none; color:#b85c00; font-weight:bold; cursor:pointer;">&times;</button>
                </div>
            @endif

            <div class="card-body col-12 d-flex justify-center align-items-center ">
                @if (!empty($vaccineRows))
                    <div class="table-responsive w-100">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Batch No</th>
                                    <th scope="col">Vaccine Name</th>
                                    <th scope="col">Scheduled Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody wire:key="batch-{{ $displayBirds }}">
                                @foreach ($vaccineRows as $key => $vaccine)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $vaccine['batch_number'] }}</td>
                                        <td>{{ $vaccine['name'] }}</td>
                                        <td>{{ \Carbon\Carbon::parse($vaccine['scheduled_date'])->format('M d, Y') }}
                                        </td>
                                        <td>
                                            <span
                                                class="badge bg-{{ match ($vaccine['status']) {
                                                    'done' => 'success',
                                                    'missed' => 'danger',
                                                    'pending' => 'warning',
                                                    'default' => 'secondary',
                                                } }} ">
                                                {{ ucfirst($vaccine['status']) }}
                                            </span>
                                        </td>
                                        <td>
                                            @if ($vaccine['status'] === 'done' || $vaccine['status'] === 'missed')
                                                <button class="btn btn-light w-50 btn-sm"
                                                    style="position: static !important"
                                                    disabled>{{ $vaccine['status'] === 'done' ? 'Done' : 'Missed' }}</button>
                                            @else
                                                <button class="btn btn-light w-100 btn-sm"
                                                    style="position: static !important"
                                                    wire:click="markAsDone({{ $vaccine['batch_id'] }},'{{ $vaccine['name'] }}')">Mark</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

</div>
