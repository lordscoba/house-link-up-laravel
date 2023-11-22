@extends('layouts.app')

@section('content')
@livewireStyles
<!-- breadcrumb start -->
<section class="breadcrumb-section p-0">
    <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
    <div class="container">
        <div class="breadcrumb-content">
            <div>
                <h2>Dashboard</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Location</li>
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
                                        <h2>State Listing</h2>
                                    </div>
                                </div>
                                <div class="">
                                    <a class="btn btn-primary btn-lg" href="{{ route('location.create') }}"> Create
                                        State</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <div class="common-card property-overview">
                            <div class="common-header d-flex justify-content-between">
                                <h5>State overview</h5>
                                <div class="fw-bolder p-2">Total state count : {{ DB::table("locations")->count()}}
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordernone">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>State</th>
                                            <th>Update</th>
                                            <th>View LGA</th>
                                            <th class="pe-3">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($locations as $location)
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <h6>{{ $location["id"] }}</h6>
                                                </div>
                                            </td>
                                            <td class="lead text-black">{{ $location["state"] }}</td>
                                            <td><a href="location/{{ $location->id }}/edit" class="btn btn-primary"
                                                    type="submit">Update</a>
                                            </td>
                                            <td><a href="/admin/location/{{ $location->id }}" class="btn btn-info"
                                                    type="submit">View LGA</a>
                                            </td>
                                            <td>
                                                <form action="/admin/location/{{ $location->id }}" class="pt-0"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-dark">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <nav class="theme-pagination">
                        <div class="float-end d-flex">{{ $locations->links() }}</div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- user dashboard section end -->
@livewireScripts
@endsection