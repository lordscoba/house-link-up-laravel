<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="col-xl-12 col-md-12">
        <div class="common-card property-overview">
            <div class="common-header d-flex justify-content-between">
                <h5>LGA overview</h5>
                <div class="fw-bolder p-2">Total state count : {{ DB::table("lgas")->count() }}
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordernone">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>LGA</th>
                            <th>Update</th>
                            <th>View LGA</th>
                            <th class="pe-3">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($lgas as $lga)
                        <tr wire:key="{{ $lga->id }}">
                            <td>
                                <div class="d-flex">
                                    <h6>{{ $lga->id }}</h6>
                                </div>
                            </td>
                            <td>
                                {{ $lga->lga }}
                            </td>
                            <td class="lead text-black">
                                <button data-bs-toggle="modal" wire:click="edit({{ $lga->id }})"
                                    data-bs-target="#update-lga" class="update-lga-modal btn btn-primary btn-lg">
                                    Update
                                    LGA</button>
                            </td>
                            <td><a class="btn btn-info" type="submit">View LGA</a>
                            </td>
                            <td>
                                <button type="button" wire:click="destroy({{ $lga->id }})" class="btn btn-dark">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>
                                empty lga
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <nav class="theme-pagination">
        <div class="float-end d-flex">{{ $lgas->links() }}
        </div>
    </nav>

    {{-- create LGA modal start --}}
    <div class="modal fade create-lga-modal" id="create-lga" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create LGA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row gx-3">
                            <div class="form-group col-12 d-none">
                                <label for="lga">state id </label>
                                <input wire:model.defer="state_id" type="text" class="form-control" id="state_id">
                                @error('state_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <label for="lga">LGA</label>
                                <input wire:model.defer="lga" type="text" class="form-control" id="lga">
                                @error('lga')
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
    {{-- create LGA modal ends --}}

    {{-- Update LGA modal start --}}
    <div class="modal fade update-lga-modal" id="update-lga" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update LGA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row gx-3">
                            <div class="form-group col-12">
                                <label for="lga_id">lga id </label>
                                <input wire:model.defer="lga_id" type="text" class="form-control" id="lga_id">
                                @error('lga_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <label for="lga">LGA</label>
                                <input wire:model.defer="lga" type="text" class="form-control" id="lga">
                                @error('lga')
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
                            <button wire:click.prevent="update({{$lga_id}})"
                                class="btn btn-gradient color-2 btn-pill">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Update LGA modal ends --}}
</div>