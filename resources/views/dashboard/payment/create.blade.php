@extends('layouts.app')

@section('content')
<!-- breadcrumb start -->
<section class="breadcrumb-section p-0">
    <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
    <div class="container">
        <div class="breadcrumb-content">
            <div>
                <h2>Dashboard</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Make payment</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
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
                                            <h2>Make payment</h2>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="property-2 row column-sm zoom-gallery property-label property-grid list-view">
                                    <form action="/payments/pay" class="row gx-2 gx-sm-3" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li><br>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        @if (session('errors'))
                                        <div class="alert alert-danger">
                                            {{ session('errors')->first('message') }}
                                        </div>
                                        @endif
                                        <div class="form-group col-sm-12">
                                            <label>Amount</label>
                                            <input name="amount" type="text" class="form-control"
                                                placeholder="Enter amount" value="1000" readOnly>
                                        </div>

                                        <div class="text-end">
                                            <button type="submit" class="btn btn-gradient color-2 btn-pill">Pay</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing dashboard section end -->
@endsection