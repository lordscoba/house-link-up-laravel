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
                        <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- pricing plan section start -->
<section class="pricing-section slick-between slick-shadow pricing-inner">
    <div class="">
        @if ($errors->any())
        <div class="alert alert-danger w-50 mx-auto p-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li><br>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- @if (session('errors'))
        <div class="alert alert-danger">
            {{ session('errors')->first('message') }}
        </div>
        @endif -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title-2">
                    <h2>pricing Plan</h2>
                    <p>Houselink up provides upgraded users with better experience</p>
                </div>
                <div class="pricing-slider">
                    <div>
                        <div class="pricing-box">
                            <div class="pricing-details">
                                <div class="pricing-icon color-2">
                                    <svg class="pricing-svg">
                                        <use xlink:href="../assets/svg/icons.svg#home-heart"></use>
                                    </svg>
                                </div>
                                <h3>Business Plan</h3>
                                <p class="font-roboto">Business plan enables the user to transact on the website
                                    effortlessly</p>
                            </div>
                            <ul class="text-left">
                                <li>You will have unlimited access for a month.</li>
                                <li>You will be able to enjoy the website in full.</li>
                                <li>The payment lasts only for one month.</li>
                            </ul>
                            <div class="price">
                                <span class="label label-light label-flat color-2">Month</span>
                                <h4>#1000.00</h4>
                                <span class="light-text">Per</span>
                            </div>
                            <div class="d-flex justify-content-center my-3 gap-3">
                                <a href="{{ route('payments.index') }}"
                                    class="btn btn-dashed btn-pill color-2 float-left">List Subs</a>
                                <a href="{{ route('payments.create') }}"
                                    class="btn btn-dashed btn-pill color-2 float-left">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing plan section end -->
@endsection