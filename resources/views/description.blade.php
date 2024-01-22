@extends('layouts.app') @section('content')
    <!-- breadcrumb start -->
    <section class="ratio_40 breadcrumb-section p-0 single-property-images">
        <div class="main-property-slider arrow-image">
            @forelse (DB::table('pictures')->where('properties_id', $properties->id)->get() as $picture)
                <div>
                    <div>
                        <img loading="lazy" src="{{ URL::asset('images/' . $picture->image_path) }}" class="bg-img"
                            alt="" />
                    </div>
                </div>
            @empty
                <div>
                    <div>
                        <img loading="lazy" src="../../../assets/images/property/2.jpg" class="bg-img" alt="" />
                    </div>
                </div>
                <div>
                    <div>
                        <img loading="lazy" src="../../../assets/images/property/4.jpg" class="bg-img" alt="" />
                    </div>
                </div>
            @endforelse
        </div>
        <div class="single-property-section">
            <div class="container">
                <div class="single-title">
                    <div class="left-single">
                        <div class="d-flex">
                            <h2 class="mb-0">{{ $properties->property_type }}</h2>
                            <span><span class="label label-shadow ms-2">For {{ $properties->property_status }}</span></span>
                            &nbsp;
                            <h2 class="mb-0">{{ $properties->country }}</h2>
                        </div>
                        <p class="mt-2">{{ $properties->address }}</p>
                        <ul>
                            <li>
                                <div>
                                    <div class="p-2">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <span>State: {{ $properties->state }}</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="p-2">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <span>Local Govermnent:
                                        {{ $properties->lga }}</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="p-2">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <span>Town: {{ $properties->town }}</span>
                                </div>
                            </li>

                        </ul>
                        <div class="share-buttons">

                        </div>
                    </div>
                    <div class="right-single">
                        <div class="rating">
                            @php
                                $ratings = DB::table('reviews')
                                    ->where('properties_id', $properties->id)
                                    ->avg('rating');
                                $ratings_count = DB::table('reviews')
                                    ->where('properties_id', $properties->id)
                                    ->count();
                                // echo $ratings_count;
                                $rating = intval($ratings);
                                // echo $rating;
                                $rating_end = 5 - $rating;
                            @endphp
                            @if ($ratings_count == 0)
                                <strong>No Ratings</strong>
                            @else
                                @for ($i = 1; $i <= $rating; $i++)
                                    <i class="fas fa-star"></i>
                                    @endfor @for ($i = 1; $i <= $rating_end; $i++)
                                        <i class="far fa-star"></i>
                                    @endfor
                                @endif
                        </div>
                        <h2 class="price">
                            #{{ number_format($properties->property_price, 2, '.', ',') }}
                            @if ($properties->divisions !== 'none')
                                <span>/
                                    {{ $properties->divisions }}</span>
                            @endif
                        </h2>
                        <div class="feature-label gap-2">
                            @if ($properties->free_wi_fi == 'yes')
                                <span class="btn btn-dashed color-2 btn-pill">Wi-fi</span>
                                @endif @if ($properties->emergency_exit == 'yes')
                                    <span class="btn btn-dashed color-2 btn-pill">Emergency Exit</span>
                                    @endif @if ($properties->cctv == 'yes')
                                        <span class="btn btn-dashed color-2 btn-pill">CCTV</span>
                                        @endif @if ($properties->air_conditioning == 'yes')
                                            <span class="btn btn-dashed color-2 btn-pill">Air Conditioning</span>
                                            @endif @if ($properties->free_parking_in_the_area == 'yes')
                                                <span class="btn btn-dashed color-2 btn-pill">Car Park</span>
                                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <div class="d-block d-md-none"> <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    </div>
    <!-- single property start -->
    <section class="single-property">
        <div class="container">
            <div class="row ratio_65">
                <div class="col-xl-9 col-lg-8">
                    <div class="description-section">
                        <div class="description-details">
                            <div class="desc-box">
                                <div class="menu-top" id="searchBar">
                                    <div class="container">
                                        <ul class="nav">
                                            <li class="active">
                                                <a class="" href="#agent">Agent</a>
                                            </li>
                                            <li>
                                                <a class="" href="#about">about</a>
                                            </li>
                                            <li>
                                                <a class="" href="#feature">feature</a>
                                            </li>
                                            <li>
                                                <a class="" href="#gallery">gallery</a>
                                            </li>
                                            <li>
                                                <a class="" href="#video">video</a>
                                            </li>
                                            <li>
                                                <a class="" href="#details">details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="desc-box">
                                <div class="page-section ratio3_2" id="agent">
                                    <h4 class="content-title">Agent Details</h4>
                                    <div>
                                        <div class="category-property gap-3">
                                            <div class="agent-info">
                                                <div class="media">
                                                    @forelse(DB::table('users')->where('id',$properties->user_id)->get() as $image)
                                                        @if ($image->image_path == null)
                                                            <img loading="lazy"
                                                                src="{{ asset('assets/img/default-user.png') }}"
                                                                class="img-50" alt="" />
                                                        @else
                                                            <img loading="lazy"
                                                                src="{{ URL::asset('images/' . $image->image_path) }}"
                                                                class="img-50" alt="" />
                                                        @endif
                                                    @empty
                                                        <img loading="lazy"
                                                            src="{{ asset('assets/img/default-user.png') }}" class="img-50"
                                                            alt="" />
                                                    @endforelse
                                                    <div class="media-body ms-2">
                                                        <h6>
                                                            {{ $properties->contact_name }}
                                                        </h6>
                                                        <p>
                                                            {{ $properties->contact_email }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="d-flex flex-column gap-3 py-3">
                                                <li>
                                                    <i data-feather="map-pin"
                                                        class="me-2"></i>{{ $properties->contact_address }}
                                                </li>
                                                <li>
                                                    <i data-feather="phone-call"
                                                        class="me-2"></i>{{ $properties->contact_phone_number }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="alert alert-secondary">
                                            <div class=""><i class="fas fa-exclamation-triangle fa-2x mb-3"
                                                    aria-hidden="true"></i> <span class="fw-bolder">Disclaimer</span></div>
                                            <p> The information displayed about properties comprises a property
                                                advertisement. HouselinkUp makes no warranty as to the accuracy or
                                                completeness of the advertisement or any linked or associated information
                                                and houselinkUp has no control over the property .
                                                HouselinkUp shall not be held liable for the actions of any agent or
                                                property owner/Landlord on or off this website. Thank you.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about page-section" id="about">
                                <h4>Property Brief</h4>
                                <div class="row">
                                    <div class="col-sm-11">
                                        <p>{{ $properties->description }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="desc-box">
                            <div class="page-section feature-dec" id="feature">
                                <h4 class="content-title">features</h4>
                                <div class="single-feature row">
                                    <div class="col-xxl-3 col-xl-4 col-6">
                                        <ul>
                                            @if ($properties->free_wi_fi == 'yes')
                                                <li>
                                                    <i class="fas fa-wifi"></i> Free
                                                    Wi-Fi
                                                </li>
                                                @endif @if ($properties->free_wi_fi == 'yes')
                                                    @endif @if ($properties->cctv == 'yes')
                                                        <li>
                                                            <i class="fas fa-video"></i>
                                                            CCTV
                                                        </li>
                                                        @endif @if ($properties->emergency_exit == 'yes')
                                                            <li>
                                                                <i class="fas fa-door-open"></i>
                                                                Emergency Exit
                                                            </li>
                                                        @endif
                                        </ul>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-6">
                                        <ul>
                                            @if ($properties->free_parking_in_the_area == 'yes')
                                                <li>
                                                    <i class="fas fa-car"></i> free
                                                    Parking in the area
                                                </li>
                                                @endif @if ($properties->air_conditioning == 'yes')
                                                    <li>
                                                        <i class="fas fa-fan"></i> Air
                                                        Conditioning
                                                    </li>
                                                @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desc-box">
                            <div class="page-section ratio3_2" id="gallery">
                                <h4 class="content-title">gallery</h4>
                                <div class="single-gallery">
                                    <div class="gallery-for">
                                        @forelse(DB::table('pictures')->where('properties_id', $properties->id)->get() as $picture)
                                            <div>
                                                <div class="bg-size">
                                                    <img loading="lazy"
                                                        src="{{ URL::asset('images/' . $picture->image_path) }}"
                                                        class="bg-img" alt="" />
                                                </div>
                                            </div>
                                        @empty
                                            <div>
                                                <div class="bg-size">
                                                    <img loading="lazy" src="../../../assets/images/property/4.jpg"
                                                        class="bg-img" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="bg-size">
                                                    <img loading="lazy" src="../../../assets/images/property/3.jpg"
                                                        class="bg-img" alt="" />
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>
                                    <div class="gallery-nav">
                                        @forelse(DB::table('pictures')->where('properties_id', $properties->id)->get() as $picture)
                                            <div>
                                                <img loading="lazy"
                                                    src="{{ URL::asset('images/' . $picture->image_path) }}"
                                                    class="img-fluid" alt="" />
                                            </div>
                                        @empty
                                            <div>
                                                <img loading="lazy" src="../../../assets/images/property/4.jpg"
                                                    class="img-fluid" alt="" />
                                            </div>
                                            <div>
                                                <img loading="lazy" src="../../../assets/images/property/3.jpg"
                                                    class="img-fluid" alt="" />
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desc-box">
                            <div class="page-section ratio_40" id="video">
                                <h4 class="content-title">video</h4>
                                <div>
                                    <div>
                                        @if ($properties->video_link != '')
                                            <iframe width="560" height="315" src="{{ $properties->video_link }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        @else
                                            <img loading="lazy" src="../../../assets/images/property/11.jpg"
                                                class="bg-img" alt="" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desc-box">
                            <div class="page-section" id="details">
                                <h4 class="content-title">Property Details</h4>
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <ul class="property-list-details">
                                            <li>
                                                <span>Property Type :</span>
                                                {{ $properties->property_type }}
                                            </li>
                                            <li>
                                                <span>Property status :</span>
                                                For
                                                {{ $properties->property_status }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <ul class="property-list-details">
                                            <li>
                                                <span>State :</span>
                                                {{ $properties->state }}
                                            </li>
                                            <li>
                                                <span>LGA :</span>
                                                {{ $properties->lga }}
                                            </li>
                                            <li>
                                                <span>Town/City :</span>
                                                {{ $properties->town }} @if ($properties->city != '')
                                                    ({{ $properties->city }})
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <ul class="property-list-details">
                                            <li>
                                                <span>Price :</span> #
                                                {{ $properties->property_price }}
                                            </li>
                                            <li>
                                                <span>Rooms :</span>{{ $properties->rooms }} rooms
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desc-box">
                            <div class="page-section">
                                <h4 class="content-title">Reviews</h4>
                                <div class="review">
                                    @forelse(DB::table('reviews')->where('properties_id',$properties->id)->get() as $review)
                                        <div
                                            class="review-box @php $side = $review->id%2 ; @endphp @if ($side == 0) review-child @endif">
                                            <div class="media d-flex gap-3">
                                                <img loading="lazy" src="../../../assets/images/avatar/3.jpg"
                                                    class="img-70" alt="" />
                                                <div class="media-body">
                                                    <h6>
                                                        {{ $review->review_name }}
                                                    </h6>
                                                    <p>{{ $review->created_at }}</p>
                                                    <p class="mb-0">
                                                        {{ $review->review }}
                                                    </p>
                                                </div>
                                                <div class="rating mt-2 p-2">
                                                    @php
                                                        $ratings = DB::table('reviews')->count();
                                                        $rating_end = 5 - $rating;
                                                    @endphp
                                                    @if ($ratings == 0)
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <strong>No Ratings</strong>
                                                    @else
                                                        @for ($i = 1; $i <= $rating; $i++)
                                                            <i class="fas fa-star"></i>
                                                            @endfor @for ($i = 1; $i <= $rating_end; $i++)
                                                                <i class="far fa-star"></i>
                                                            @endfor
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <strong>No Ratings for this property. You can
                                            drop your Ratings</strong>
                                    @endforelse
                                </div>
                                <hr />
                                <h4 class="content-title">Write a Review</h4>
                                <form action="/reviewfeed" class="review-form" method="POST">
                                    @csrf @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    <br />
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group d-none">
                                        <input type="number" name="properties_id" class="form-control" placeholder="iD"
                                            required readonly value="{{ $properties->id }}" />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="rating" class="form-control"
                                            placeholder="Rate btwn 1-5" required min="0" max="5" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="review_name" class="form-control" placeholder="Name"
                                            required />
                                    </div>
                                    <div class="form-group">
                                        <textarea name="review" class="form-control" placeholder="Comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-gradient color-2 btn-pill">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="left-sidebar sticky-cls single-sidebar">
                        <div class="filter-cards">
                            <div class="advance-card">
                                <h6>Contact Info</h6>
                                <div class="category-property">
                                    <div class="agent-info">
                                        <div class="media">
                                            @forelse(DB::table('users')->where('id',$properties->user_id)->get() as $image)
                                                @if ($image->image_path == null)
                                                    <img loading="lazy" src="{{ asset('assets/img/default-user.png') }}"
                                                        class="img-50" alt="" />
                                                @else
                                                    <img loading="lazy"
                                                        src="{{ URL::asset('images/' . $image->image_path) }}"
                                                        class="img-50" alt="" />
                                                @endif
                                            @empty
                                                <img loading="lazy" src="{{ asset('assets/img/default-user.png') }}"
                                                    class="img-50" alt="" />
                                            @endforelse
                                            <div class="media-body ms-2">
                                                <h6>
                                                    {{ $properties->contact_name }}
                                                </h6>
                                                <p>
                                                    {{ $properties->contact_email }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <i data-feather="map-pin"
                                                class="me-2"></i>{{ $properties->contact_address }}
                                        </li>
                                        <li>
                                            <i data-feather="phone-call"
                                                class="me-2"></i>{{ $properties->contact_phone_number }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- single property end -->
@endsection
