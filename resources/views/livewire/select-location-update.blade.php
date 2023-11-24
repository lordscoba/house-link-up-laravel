<div class="row px-0">
    {{-- Do your work, then step back. --}}
    <div class="form-group col-sm-4">
        <label>State</label>
        <select wire:model="state_value" name="state" id="rooms" class="form-control">
            <option selected value=""><span>Choose</span> <i class="fas fa-angle-down"></i></span></option>
            @forelse ($location as $state)
            <option value="{{ $state->state }}">{{ $state->state }}
            </option>
            @empty
            <option value="">None</option>
            @endforelse
        </select>
    </div>
    <!-- <div class="">{{$property_id}}</div> -->
    <div class="form-group col-sm-4">
        <label>Local Government</label>
        <select wire:model="lga_value" name="lga" id="beds" class="form-control">
            <option selected value=""><span>Choose</span> <i class="fas fa-angle-down"></i></span></option>
            @forelse ($lgas as $lga)
            <option value="{{ $lga->lga }}">{{ $lga->lga }}
            </option>
            @empty
            <option value="">None</option>
            @endforelse
        </select>
    </div>
    <div class="form-group col-sm-4">
        <label>Towns/City</label>
        <select wire:model="town_value" name="town" id="baths" class="form-control">
            <option selected value=""><span>Choose</span> <i class="fas fa-angle-down"></i></span></option>
            @forelse ($towns as $town)
            <option value="{{ $town->town }}">{{ $town->town }}
            </option>
            @empty
            <option value="">None</option>
            @endforelse
        </select>
    </div>
</div>