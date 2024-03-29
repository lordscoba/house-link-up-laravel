<div>
    <!-- home section start -->
    <section class="home-section layout-1 layout-6 lazy-background" data-src="{{ asset('assets/images/inner-pages/coming-soon.jpg') }}">
        <div class="home-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="container">
                            <div class="home-left">
                                <div>
                                    <div class="home-slider-1 arrow-light slick-shadow">
                                        <div>
                                            <div class="home-content">
                                                <div>
                                                    <img loading="lazy"
                                                        src="{{ asset('assets/img/house_link_up_side.png') }}"
                                                        class="img-fluid m-0" alt="">
                                                    <h6>Want to buy or rent Home ?</h6>
                                                    <h1>Realty Properties solve your problems</h1>
                                                    {{-- <a href="{{ route('user-properties.create') }}"
                                                        class="btn btn-gradient color-6">submit
                                                        property</a> --}}
                                                    <a href="#search" class="btn btn-gradient color-6">Go to Search
                                                        Result</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- <div class="looking-icons">
                            <h5>What are you looking for?</h5>
                            <ul>
                                <li>
                                    <a href="{{ route('login') }}" class="looking-icon">
                                    <svg class="property-svg">
                                        <use xlink:href="../assets/svg/icons.svg#home-lock"></use>
                                    </svg>
                                    <h6>House</h6>
                                    </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}" class="looking-icon">
                                            <svg class="property-svg">
                                                <use xlink:href="../assets/svg/icons.svg#home-heart"></use>
                                            </svg>
                                            <h6>Booking</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}" class="looking-icon">
                                            <svg class="property-svg">
                                                <use xlink:href="../assets/svg/icons.svg#key"></use>
                                            </svg>
                                            <h6>Garage</h6>
                                        </a>
                                    </li>
                                    </ul>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="home-search-6">
                            <div class="vertical-search">
                                <div class="left-sidebar">
                                    <div class="row gx-3">
                                        <div class="col-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Property Status</label>
                                                <div>
                                                    <select wire:model="search_status" class="form-control font-rubik">
                                                        <option selected value=""><span>Choose</span> <i
                                                                class="fas fa-angle-down"></i></span></option>
                                                        <option value="Rent">For Rent</option>
                                                        <option value="Sale">For Sale</option>
                                                        <option value="Short Let">Short Let</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Property Type</label>
                                                <div>
                                                    <select wire:model="search_type" class="form-control font-rubik">
                                                        <option selected value=""><span>Choose</span> <i
                                                                class="fas fa-angle-down"></i></span></option>
                                                        <option value="One Room">One Room</option>
                                                        <option value="Apartment">Apartment</option>
                                                        <option value="Self Contain">Self Contain</option>
                                                        <option value="Bedroom Flats">Bedroom Flats</option>
                                                        <option value="Bungalow">Bungalow</option>
                                                        <option value="Company">Company</option>
                                                        {{-- <option value="Cottage">Cottage</option> --}}
                                                        <option value="Duplex">Duplex</option>
                                                        <option value="Family house">Family house</option>
                                                        {{-- <option value="Villa">Villa</option> --}}
                                                        <option value="Mall">Mall</option>
                                                        <option value="Office">Office</option>
                                                        <option value="Shops">Shops</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Rooms</label>
                                                <select wire:model="search_room" class="form-control font-rubik">
                                                    <option selected value=""><span>Choose</span> <i
                                                            class="fas fa-angle-down"></i></span>
                                                    </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="col-6">
                                            <div class="form-group">
                                                <label>Bed</label>
                                                <select wire:model="search_bed" class="form-control font-rubik">
                                                    <option selected value=""><span>Choose</span> <i
                                                            class="fas fa-angle-down"></i></span>
                                                    </option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Bath</label>
                                                <select wire:model="search_bath" class="form-control font-rubik">
                                                    <option selected value=""><span>Choose</span> <i
                                                            class="fas fa-angle-down"></i></option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Agencies</label>
                                                <select wire:model="search_agency" class="form-control font-rubik">
                                                    <option selected value=""><span>Choose</span><i
                                                            class="fas fa-angle-down"></i></option>
                                                    @forelse (DB::table('agencies')->get() as $agency)
                                                    <option value="{{ $agency->name }}</">{{ $agency->name }}</option>
                                    @empty
                                    <option value="">None</option>
                                    @endforelse
                                    </select>
                                </div>
                            </div> --}}
                                        <div class="col-6 col-lg-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="amount">Price : </label>
                                                    <input class="form-control" type="number"
                                                        wire:model="search_price">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>State</label>
                                                <div>
                                                    <select wire:model="state_value" class="form-control font-rubik">
                                                        <option selected value=""><span>Choose</span> <i
                                                                class="fas fa-angle-down"></i></span></option>
                                                        @forelse ($location as $state)
                                                            <option value="{{ $state->state }}">{{ $state->state }}
                                                            </option>
                                                        @empty
                                                            <option value="">None</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="form-group">
                                                <label>LGA</label>
                                                <div>
                                                    <select wire:model="lga_value" class="form-control font-rubik">
                                                        <option selected value=""><span>Choose</span> <i
                                                                class="fas fa-angle-down"></i></span></option>
                                                        @forelse ($lgas as $lga)
                                                            <option value="{{ $lga->lga }}">{{ $lga->lga }}
                                                            </option>
                                                        @empty
                                                            <option value="">None</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Town/City</label>
                                                <div>
                                                    <select wire:model="town_value" class="form-control font-rubik">
                                                        <option selected value=""><span>Choose</span> <i
                                                                class="fas fa-angle-down"></i></span></option>
                                                        @forelse ($towns as $town)
                                                            <option value="{{ $town->town }}">{{ $town->town }}
                                                            </option>
                                                        @empty
                                                            <option value="">None</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="amount">Address : </label>
                                                    <input class="form-control" type="text"
                                                        wire:model="search_address" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home section end -->

    <!-- property section start -->
    <section class="property-section slick-between slick-shadow property-color-6">
        <div class="container">
            <div class="row ratio_landscape">
                <div class="col" id="search">
                    <div class="title-1 color-6">
                        <span class="label label-gradient color-6">Properties</span>
                        <h2>Search Results</h2>
                        <hr>
                    </div>


                    <div class="listing-hover-property row">
                        {{-- @forelse (DB::table('properties')->limit(6)->orderBy('created_at','desc')->get() as $property)
                    --}}
                        @forelse ($properties as $property)
                            <div class="col-xl-4 col-md-6 wow fadeInUp" wire:key="property-{{ $property->id }}">
                                <div class="property-box">
                                    <div class="property-image">
                                        @forelse (DB::table('pictures')->limit(1)->where('properties_id', $property->id)->get()
                                as $picture)
                                            <a href="javascript:void(0)">
                                                <img loading="lazy"
                                                    src="{{ URL::asset('images/' . $picture->image_path) }}"
                                                    class="bg-img" alt="" width="600px">
                                                <div class="labels-left">
                                                    <span
                                                        class="label label-shadow">{{ $property->property_status }}</span>
                                                </div>
                                            </a>

                                        @empty
                                            <a href="javascript:void(0)">
                                                <img loading="lazy" src="../assets/images/others/1.jpg"
                                                    class="bg-img" alt="" width="600px">
                                                <div class="labels-left">
                                                    <span
                                                        class="label label-shadow">{{ $property->property_status }}</span>
                                                </div>
                                            </a>
                                        @endforelse
                                        <div class="bottom-property">
                                            <div class="d-flex">
                                                <div>
                                                    <h5><a
                                                            href="single-property-6.html">{{ $property->property_type }}</a>
                                                    </h5>
                                                    <h6>#{{ number_format($property->property_price, 2, '.', ',') }}
                                                        @if ($property->divisions !== 'none')
                                                            <small>/
                                                                {{ $property->divisions }}</small>
                                                        @endif
                                                    </h6>
                                                </div>
                                                <button type="button" class="btn btn-gradient color-6 mt-3"
                                                    onclick="document.location='{{ route('description', ['id' => $property->id]) }}'">Details</button>
                                            </div>
                                            <div class="overlay-option">
                                                <ul>
                                                    <li>
                                                        <span>State</span>
                                                        <h6>{{ $property->state }}</h6>
                                                    </li>
                                                    <li>
                                                        <span>LGA</span>
                                                        <h6>{{ $property->lga }}</h6>
                                                    </li>
                                                    <li>
                                                        <span>Town</span>
                                                        <h6>{{ $property->town }}</h6>
                                                    </li>
                                                    <li>
                                                        <span>Rooms</span>
                                                        <h6 class="text-break">{{ $property->rooms }}</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-xl-4 col-md-6 wow fadeInUp mx-auto text-center" data-wow-delay="200ms">
                                <div class="mx-auto">

                                    <div><strong>Sorry, No available house/property yet that matches your criteria,
                                            Thank
                                            you</strong></div>

                                </div>
                            </div>
                        @endforelse
                        {{ $properties->links() }}
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- property section end -->
</div>
