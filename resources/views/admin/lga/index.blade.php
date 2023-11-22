@extends('layouts.app')

@section('content')
@livewireStyles
<!-- breadcrumb start -->
<section class="breadcrumb-section p-0">
    <img src="../../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
    <div class="container">
        <div class="breadcrumb-content">
            <div>
                <h2>Dashboard</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Local Government areas</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- user dashboard section start -->
<section class="user-dashboard small-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('layouts.admin-nav')
            </div>
            <div class="col-lg-9">
                <div class="dashboard-content">
                    <div class="tab-listing" id="listing">
                        <div class="property-section">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <div>
                                        <h2>LGA Listing</h2>
                                    </div>
                                </div>
                                <div class="">
                                    <button data-bs-toggle="modal"
                                        wire:click="create({{ request()->route('location') }})"
                                        data-bs-target="#create-lga" class="create-lga-modal btn btn-primary btn-lg">
                                        Create
                                        LGA</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    @livewire('manage-l-g-a', ["state_id" => request()->route('location')])
                </div>
            </div>
        </div>
    </div>
</section>
<!-- user dashboard section end -->
@livewireScripts
@endsection