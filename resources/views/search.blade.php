@extends('layouts.app')

@section('content')

    @livewireStyles

    @livewire('select-house')
    <!-- feature section start -->
    <section class="feature-section banner-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-1 text-white">
                        <span class="label label-gradient color-6">Our</span>
                        <h2>Featured Property</h2>
                        <hr>
                    </div>
                    <div class="feature-1 arrow-light">
                        @forelse (DB::table('properties')->where('property_status','Sale')->limit(2)->inRandomOrder()->get() as $property)
                            <div>
                                <div class="feature-wrapper">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-3">
                                            <div class="feature-left">
                                                <div class="property-details">
                                                    <span class="font-roboto">{{ $property->city }}</span>
                                                    <a href="single-property-8.html">
                                                        <h3 class="d-flex">{{ $property->property_type }} <span><span
                                                                    class="label label-dark label-pill">{{ $property->property_status }}</span></span>
                                                        </h3>
                                                    </a>
                                                    <h6 class="color-6">#{{ $property->property_price }}<span>/
                                                            {{ $property->divisions }}</span></h6>
                                                    <p class="font-roboto">{{ $property->description }}</p>
                                                    <ul>
                                                        <li><i class="fas fa-map-marker-alt"></i>State :
                                                            {{ $property->state }}</li>
                                                        <li><i class="fas fa-map-marker-alt"></i>LGA :
                                                            {{ $property->lga }}</li>
                                                        <li><i class="fas fa-map-marker-alt"></i>Town:
                                                            {{ $property->town }}</li>
                                                    </ul>
                                                    <a href="user-favourites.html">
                                                        <span class="round-half color-6">
                                                            <i data-feather="heart"></i>
                                                        </span>
                                                    </a>

                                                    <div class="property-btn">
                                                        <a href="{{ route('description', ['id' => $property->id]) }}"
                                                            class="btn btn-dashed btn-pill color-6"
                                                            tabindex="0">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-9 order-md">
                                            <div class="feature-image">
                                                @forelse (DB::table('pictures')->limit(1)->where('properties_id', $property->id)->get() as $picture)
                                                    <img src="{{ URL::asset('images/' . $picture->image_path) }}"
                                                        alt="" class="bg-img">
                                                @empty
                                                    <img src="../assets/images/property/3.jpg" alt=""
                                                        class="bg-img">
                                                @endforelse

                                                <h4>{{ $property->property_type }}</h4>
                                                <span class="box-color"></span>
                                                <span class="signature">
                                                    <img src="../assets/images/signature/1.png" alt="">
                                                </span>
                                                <span class="label label-white label-lg color-6">Featured</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        @empty
                            <div>
                                <div class="feature-wrapper">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-3">
                                            <div class="feature-left">
                                                <div class="property-details">
                                                    <span class="font-roboto">New York</span>
                                                    <a href="single-property-8.html">
                                                        <h3 class="d-flex">Merrick in Spring Way <span><span
                                                                    class="label label-dark label-pill">Open
                                                                    house</span></span></h3>
                                                    </a>
                                                    <h6 class="color-6">$9554.00*</h6>
                                                    <p class="font-roboto">Different types of housing can be use same
                                                        physical type.connected residences might be owned by a single entity
                                                        or owned separately with an agreement covering the relationship
                                                        between units and common areas and concerns.</p>
                                                    <ul>
                                                        <li><img src="../assets/images/svg/icon/double-bed.svg"
                                                                class="img-fluid" alt="">Bed : 5
                                                        </li>
                                                        <li><img src="../assets/images/svg/icon/bathroom.svg"
                                                                class="img-fluid" alt="">Baths : 3
                                                        </li>
                                                        <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                                class="img-fluid ruler-tool" alt="">Sq Ft : 5000
                                                        </li>
                                                    </ul>
                                                    <a href="user-favourites.html">
                                                        <span class="round-half color-6">
                                                            <i data-feather="heart"></i>
                                                        </span>
                                                    </a>
                                                    <div class="property-btn">
                                                        <a href="single-property-8.html"
                                                            class="btn btn-dashed btn-pill color-6"
                                                            tabindex="0">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-9 order-md">
                                            <div class="feature-image">
                                                <img src="../assets/images/property/3.jpg" alt="" class="bg-img">
                                                <h4>FAMILY HOME</h4>
                                                <span class="box-color"></span>
                                                <span class="signature">
                                                    <img src="../assets/images/signature/1.png" alt="">
                                                </span>
                                                <span class="label label-white label-lg color-6">Featured</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="feature-wrapper">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-3">
                                            <div class="feature-left ">
                                                <div class="property-details">
                                                    <span class="font-roboto">New York</span>
                                                    <a href="single-property-8.html">
                                                        <h3 class="d-flex">Allen's Across Way <span><span
                                                                    class="label label-dark label-pill">Open
                                                                    house</span></span></h3>
                                                    </a>
                                                    <h6 class="color-6">$6844.00*</h6>
                                                    <p class="font-roboto">Connected residences might be owned by a single
                                                        entity or owned separately with an agreement covering the
                                                        relationship between units and common areas and concerns. Different
                                                        types of housing can be use same physical type.</p>
                                                    <ul>
                                                        <li><i class="fas fa-map-marker-alt"></i>State : 3
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt"></i>LGA : 2
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt"></i>Town : 1000
                                                        </li>
                                                    </ul>
                                                    <a href="user-favourites.html">
                                                        <span class="round-half color-6">
                                                            <i data-feather="heart"></i>
                                                        </span>
                                                    </a>
                                                    <div class="property-btn">
                                                        <a href="single-property-8.html"
                                                            class="btn btn-dashed btn-pill color-6"
                                                            tabindex="0">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-9 order-md">
                                            <div class="feature-image">
                                                <img src="../assets/images/property/2.jpg" alt="" class="bg-img">
                                                <h4>FAMILY HOME</h4>
                                                <span class="box-color"></span>
                                                <span class="signature">
                                                    <img src="../assets/images/signature/1.png" alt="">
                                                </span>
                                                <span class="label label-white label-lg color-6">Featured</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- feature section end -->

    <!-- property section start -->
    <section class="property-section property-color-6">
        <div class="container">
            <div class="row ratio_55">
                <div class="col">
                    <div class="title-1 color-6">
                        <span class="label label-gradient color-6">Rent</span>
                        <h2>Latest For Rent</h2>
                        <hr>
                    </div>
                    <div class="property-2 row column-space color-6">
                        @forelse(DB::table('properties')->where('property_status','Rent')->limit(6)->orderBy('created_at','desc')->get() as $property)
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider color-6">
                                            @forelse (DB::table('pictures')->where('properties_id', $property->id)->get() as $picture)
                                                <a href="javascript:void(0)">
                                                    <img src="{{ URL::asset('images/' . $picture->image_path) }}"
                                                        class="bg-img" alt="">
                                                </a>
                                            @empty
                                                <a href="javascript:void(0)">
                                                    <img src="../assets/images/property/16.jpg" class="bg-img"
                                                        alt="">

                                                </a>
                                                <a href="javascript:void(0)">
                                                    <img src="../assets/images/property/21.jpg" class="bg-img"
                                                        alt="">

                                                </a>
                                                <a href="javascript:void(0)">
                                                    <img src="../assets/images/property/23.jpg" class="bg-img"
                                                        alt="">

                                                </a>
                                            @endforelse
                                        </div>


                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">{{ $property->property_status }}</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>{{ DB::table('pictures')->where('properties_id', $property->id)->count() }}</span>
                                        </div>

                                    </div>

                                    <div class="property-details">
                                        <span class="font-roboto">{{ $property->country }}</span>
                                        <a href="single-property-8.html">
                                            <h3>{{ $property->property_type }}</h3>
                                        </a>
                                        <h6 class="color-6">
                                            #{{ number_format($property->property_price, 2, '.', ',') }}<span>/
                                                {{ $property->divisions }}</span></h6>
                                        <p class="font-roboto">{{ $property->description }}</p>
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i>State
                                                : {{ $property->state }}</li>
                                            <li><i class="fas fa-map-marker-alt"></i>LGA
                                                : {{ $property->lga }}</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Town/City
                                                :
                                                {{ $property->town }}</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>{{ $property->created_at }}</span>
                                            <button type="button"
                                                onclick="document.location='{{ route('description', ['id' => $property->id]) }}'"
                                                class="btn btn-dashed btn-pill color-6">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @empty
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider color-6">
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/23.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/21.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/16.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/22.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">sale</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>42</span>
                                        </div>
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="Compare">
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like"
                                                data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">usa</span>
                                        <a href="single-property-8.html">
                                            <h3>Home in Merrick Way</h3>
                                        </a>
                                        <h6 class="color-6">$4513.00*</h6>
                                        <p class="font-roboto">This home provides wonderful entertaining spaces with a chef
                                            kitchen opening. Elegant retreat in a quiet Coral Gables setting..</p>
                                        <ul>
                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                                    alt="">Bed
                                                : 4</li>
                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                                    alt="">Baths
                                                : 4</li>
                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                    class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>December 1, 2022</span>
                                            <button type="button" onclick="document.location='single-property-8.html'"
                                                class="btn btn-dashed btn-pill color-6">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider color-6">
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/21.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/22.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/23.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/16.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">sale</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>25</span>
                                        </div>
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="Compare">
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like"
                                                data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">France</span>
                                        <a href="single-property-8.html">
                                            <h3>Allen's Across Way</h3>
                                        </a>
                                        <h6 class="color-6">$6558.00*</h6>
                                        <p class="font-roboto">Elegant retreat in a quiet Coral Gables setting. This home
                                            provides wonderful entertaining spaces with a chef
                                            kitchen opening…</p>
                                        <ul>
                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                                    alt="">Bed
                                                : 4</li>
                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                                    alt="">Baths
                                                : 4</li>
                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                    class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>June 20, 2022</span>
                                            <button type="button" onclick="document.location='single-property-8.html'"
                                                class="btn btn-dashed btn-pill color-6">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider color-6">
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/16.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/21.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/22.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/23.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">sale</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>09</span>
                                        </div>
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="Compare">
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like"
                                                data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">usa</span>
                                        <a href="single-property-8.html">
                                            <h3>Hidden Spring Hideway</h3>
                                        </a>
                                        <h6 class="color-6">$4513.00*</h6>
                                        <p class="font-roboto">The most common and most absolute type of estate, the tenant
                                            enjoys the greatest discretion over the disposal of the property.</p>
                                        <ul>
                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                                    alt="">Bed
                                                : 4</li>
                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                                    alt="">Baths
                                                : 4</li>
                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                    class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>January 6, 2022</span>
                                            <button type="button" onclick="document.location='single-property-8.html'"
                                                class="btn btn-dashed btn-pill color-6">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider color-6">
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/24.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/22.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/16.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/23.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">sale</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>25</span>
                                        </div>
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="Compare">
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like"
                                                data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">usa</span>
                                        <a href="single-property-8.html">
                                            <h3>Merrick in Spring Way</h3>
                                        </a>
                                        <h6 class="color-6">$4513.00*</h6>
                                        <p class="font-roboto">Real estate market in most countries are not as organize or
                                            efficient as markets for other, more liquid investment instruments.</p>
                                        <ul>
                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                                    alt="">Bed
                                                : 4</li>
                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                                    alt="">Baths
                                                : 4</li>
                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                    class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>December 1, 2022</span>
                                            <button type="button" onclick="document.location='single-property-8.html'"
                                                class="btn btn-dashed btn-pill color-6">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider color-6">
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/25.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/24.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/22.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/16.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-dark">no fees</span>
                                            </div>
                                            <span class="label label-success">open house</span>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>42</span>
                                        </div>
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="Compare">
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like"
                                                data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">brazil</span>
                                        <a href="single-property-8.html">
                                            <h3>Hidden Spring Hideway</h3>
                                        </a>
                                        <h6 class="color-6">$9554.00*</h6>
                                        <p class="font-roboto">An interior designer is someone who
                                            plans,researches,coordinates,management and manages such enhancement projects.
                                        </p>
                                        <ul>
                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                                    alt="">Bed
                                                : 4</li>
                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                                    alt="">Baths
                                                : 4</li>
                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                    class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>July 18, 2022</span>
                                            <button type="button" onclick="document.location='single-property-8.html'"
                                                class="btn btn-dashed btn-pill color-6">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- property section end -->

    @livewireScripts
@endsection
