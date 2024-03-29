@extends('layouts.app')

@section('content')
    <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        {{-- <img loading="lazy" src="../../../assets/images/inner-background.jpg" class="bg-img img-fluid" alt=""> --}}
        <img loading="lazy" src="{{ URL('assets/images/inner-background.jpg') }}" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Dashboard</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pictures</li>
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
                @include('layouts.dashboard-nav')
                <div class="col-lg-9">
                    <div class="dashboard-content">
                        <div class="tab-listing" id="listing">
                            <div class="property-section">
                                <div class="property-grid-2 ratio_63">
                                    <div class="filter-panel">
                                        <div class="top-panel">
                                            <div>
                                                <h2>Pictures</h2>
                                            </div>

                                        </div>
                                    </div>
                                    <div
                                        class="property-2 row column-sm zoom-gallery property-label property-grid list-view">
                                        @forelse ($properties as $property)
                                            <div class="col-md-12">
                                                <div class="property-box">
                                                    <div class="property-image">
                                                        <div class="property-slider">

                                                            @forelse (DB::table('pictures')->where('properties_id',
                                                                        $property->id)->get() as $picture)
                                                                <a href="javascript:void(0)">
                                                                    <img loading="lazy" src="{{ URL::asset('images/' . $picture->image_path) }}"
                                                                        class="bg-img" alt="">

                                                                </a>
                                                            @empty
                                                                <a href="javascript:void(0)">
                                                                    <img loading="lazy" src="../assets/images/property/4.jpg"
                                                                        class="bg-img" alt="">

                                                                </a>
                                                            @endforelse
                                                        </div>
                                                        <div class="labels-left">
                                                            <div>
                                                                <span
                                                                    class="label label-shadow">{{ $property->property_status }}</span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="property-details">
                                                        <span class="font-roboto">{{ $property->country }}</span>
                                                        <div class="my-listing font-roboto">{{ $property->created_at }}
                                                        </div>
                                                        <a href="single-property-8.html">
                                                            <h3>{{ $property->property_type }}</h3>
                                                        </a>
                                                        <h6>#{{ number_format($property->property_price, 2, '.', ',') }}
                                                            @if ($property->divisions !== 'none')
                                                                <span>/
                                                                    {{ $property->divisions }}</span>
                                                            @endif
                                                        </h6>
                                                        <ul>
                                                            <li><i class="fas fa-map-marker-alt"></i> State :
                                                                {{ $property->state }}</li>
                                                            <li><i class="fas fa-map-marker-alt"></i> LGA :
                                                                {{ $property->lga }}
                                                            </li>
                                                            <li><i class="fas fa-map-marker-alt"></i> Town :
                                                                {{ $property->town }}</li>
                                                        </ul>
                                                        <div class="property-btn d-flex">
                                                            {{-- <a href="/dashboard/tin-pictures/{{ $property->id }}"
                                                    class="btn btn-dashed btn-pill color-2 float-right">Edit
                                                    Pictures</a> --}}
                                                            <a href="/dashboard/tin-pictures/{{ $property->id }}/edit"
                                                                class="btn btn-dashed btn-pill color-2 float-right">Edit
                                                                Pictures</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <strong>No pictures Available</strong>
                                        @endforelse
                                        <div class="float-end d-flex">{{ $properties->links() }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->
@endsection
