<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="col-xl-12 col-md-12">
        <div class="common-card property-overview">
            <div class="common-header d-flex justify-content-between">
                <h5>Towns overview</h5>
                <div class="fw-bolder p-2">Total towns count :
                    {{ DB::table("towns")->where('lga_id', $lga_id)->count() }}
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordernone">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Towns</th>
                            <th>Update</th>
                            <th class="pe-3">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($towns as $town)
                        <tr wire:key="{{ $town->id }}">
                            <td>
                                <div class="d-flex">
                                    <h6>{{ $town->id }}</h6>
                                </div>
                            </td>
                            <td>
                                {{ $town->town }}
                            </td>
                            <td class="lead text-black">
                                <button data-bs-toggle="modal" wire:click="edit({{ $town->id }})"
                                    data-bs-target="#update-town" class="update-town-modal btn btn-primary btn-lg">
                                    Update
                                    Towns</button>
                            </td>
                            <td>
                                <button type="button" wire:click="destroy({{ $town->id }})" class="btn btn-dark">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>
                                empty town
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <nav class="theme-pagination">
        <div class="float-end d-flex">{{ $towns->links() }}
        </div>
    </nav>

    {{-- create Towns modal start --}}
    <div class="modal fade create-town-modal" id="create-town" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Towns</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row gx-3">
                            <div class="form-group col-12 d-none">
                                <label for="state_id">state id </label>
                                <input wire:model.defer="state_id" type="text" class="form-control" id="state_id">
                                @error('state_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-12 d-none">
                                <label for="state_id">lga id </label>
                                <input wire:model.defer="lga_id" type="text" class="form-control" id="state_id">
                                @error('lga_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <label for="town">Towns</label>
                                <input wire:model.defer="town" type="text" class="form-control" id="town">
                                @error('town')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" wire:click.prevent.defer="cancel()"
                                class="btn btn-dashed color-2 btn-pill" data-bs-dismiss="modal">Cancel</button>
                            <button wire:click.prevent="store()" class="btn btn-gradient color-2 btn-pill">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- create Towns modal ends --}}

    {{-- Update Towns modal start --}}
    <div class="modal fade update-town-modal" id="update-town" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Towns</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row gx-3">
                            <div class="form-group col-12 d-none">
                                <label for="town_id">town id </label>
                                <input wire:model.defer="town_id" type="text" class="form-control" id="town_id">
                                @error('town_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <label for="town">Towns</label>
                                <input wire:model.defer="town" type="text" class="form-control" id="town">
                                @error('town')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" wire:click.prevent.defer="cancel()"
                                class="btn btn-dashed color-2 btn-pill" data-bs-dismiss="modal">Cancel</button>
                            <button wire:click.prevent="update({{$town_id}})"
                                class="btn btn-gradient color-2 btn-pill">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Update Towns modal ends --}}
</div>