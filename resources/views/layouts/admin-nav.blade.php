<div class="sidebar-user sticky-cls">

    <div class="user-profile">
        <div class="media">
            <div class="change-pic">
                @if (Auth::user()->image_path != "")
                <img src="{{ URL::asset('images/'.Auth::user()->image_path) }}" alt="">
                @else
                <img src="../../../assets/images/avatar/3.jpg" class="img-fluid update_img" alt="">
                @endif
            </div>
            <div class="media-body">
                <h5>{{ Auth::user()->name }}</h5>
                <h6 class="font-roboto">{{ Auth::user()->email }}</h6>
                <h6 class="font-roboto mb-0">{{ Auth::user()->phone_number }}</h6>
            </div>
        </div>
    </div>
    <div class="dashboard-list">
        <ul class="nav nav-tabs right-line-tab gap-1 gap-md-0 p-lg-3">
            <li class="nav-item"><a class="btn btn-dashed m-1 w-100"
                    href="{{ route('super.admin.home') }}">Dashboard</a></li>
            <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="{{ route('users.index') }}">Users</a></li>
            <li class="nav-item"><a class="btn btn-dashed m-1 w-100"
                    href="{{ route('properties.index') }}">Properties</a></li>
            <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="{{ route('location.index') }}">Location</a>
            </li>
            <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="{{ route('agencies.index') }}">Agency</a>
            </li>
            <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="{{ route('pictures.index') }}">Property
                    Pictures</a>
            </li>
            <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="{{ route('reviews.index') }}">Property
                    reviews</a></li>
            <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="{{ route('admin.payments') }}">Payments</a>
            </li>
            <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="{{ route('faqs.index') }}">Faqs</a></li>
            <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="{{ route('contact_us.index') }}">Contacts-Us
                    Messages</a>
            </li>
            <li class="nav-item"><a class="btn btn-dashed m-1 w-100"
                    href="{{ route('suscribers.index') }}">Suscribers</a></li>
            {{-- <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="user-privacy.html">Privacy</a></li> --}}
            <li class="nav-item"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#logout"
                    class="btn btn-dashed m-1 w-100">Log out</a></li>

        </ul>
    </div>
</div>