<div class="col-lg-3">
    <div class="sidebar-user sticky-cls">
        <div class="user-profile">
            <div class="media">
                <form method="POST" action="">
                    <div class="change-pic">
                        @if (Auth::user()->image_path != '')
                        <img loading="lazy" src="{{ URL::asset('images/' . Auth::user()->image_path) }}" alt="">
                        @else
                        <img loading="lazy" src="../../../assets/images/avatar/3.jpg" class="img-fluid update_img" alt="">
                        @endif
                        {{-- <div class="change-hover">
                            <button type="submit" class="btn"><i data-feather="camera"></i></button>
                            <input class="updateimg" type="file" wire:model="image" onchange="readURL(this,0)">
                        </div> --}}
                    </div>
                </form>

                <div class="media-body">
                    <h5>{{ Auth::user()->name }}</h5>
                    <h6 class="font-roboto">{{ Auth::user()->email }}</h6>
                    <h6 class="font-roboto mb-0">{{ Auth::user()->phone_number }}</h6>
                </div>
            </div>
            @if (\Route::current()->getName() == 'user_profile')
            <span class="label label-flat color-4"> <a class="btn btn-primary" href="user_image/{{ $user->id }}/edit">
                    Edit Image </a></span>
            @endif
        </div>
        <div class="dashboard-list">
            <ul class="nav nav-tabs right-line-tab gap-1 gap-md-0 p-lg-3">
                <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="{{ route('home') }}">Dashboard</a></li>
                <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="{{ route('user-properties.index') }}">My
                        Listing</a></li>
                <li class="nav-item"><a class="btn btn-dashed m-1 w-100"
                        href="{{ route('user-properties.create') }}">Upload
                        property</a></li>
                <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="{{ route('user_profile') }}">My
                        profile</a>
                </li>
                <li class="nav-item"><a class="btn btn-dashed m-1 w-100" href="{{ route('tin-pictures.index') }}">Edit
                        Property
                        Images</a></li>
                <li class="nav-item"><a class="btn btn-dashed m-1 w-100"
                        href="{{ route('payments.pricing') }}">Upgrade</a></li>
                <li class="nav-item"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#logout"
                        class="btn btn-dashed m-1 w-100">Log out</a></li>
            </ul>
        </div>
    </div>
</div>