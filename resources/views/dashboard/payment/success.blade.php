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
                        <li class="breadcrumb-item active" aria-current="page">Status</li>
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
                                            <h2>Payment status</h2>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="property-2 row column-sm zoom-gallery property-label property-grid list-view">
                                    @if ($status === 'success')
                                    {{-- starts --}}
                                    <div class="container mt-5">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <h1 class="text-success"><i class="fas fa-check-circle"></i>
                                                        </h1>
                                                        <h2 class="card-title">Payment Successful</h2>
                                                        <p class="card-text">Thank you for your payment. Your
                                                            transaction was successful.</p>
                                                        <a href="{{ route('payments.index') }}"
                                                            class="btn btn-primary">Back to Payments</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- ends --}}
                                    @elseif ($status === 'failed')
                                    {{-- starts --}}
                                    <div class="container mt-5">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <h1 class="text-danger"><i class="fas fa-times-circle"></i></h1>
                                                        <h2 class="card-title">Payment Failed</h2>
                                                        <p class="card-text">Sorry, there was an issue processing your
                                                            payment.</p>
                                                        <a href="{{ route('payments.index') }}"
                                                            class="btn btn-primary">Back to Payments</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- ends --}}
                                    @else
                                    {{-- starts --}}
                                    <div class="container mt-5">
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <h1 class="text-success"><i class="fas fa-check-circle"></i>
                                                        </h1>
                                                        <h2 class="card-title">Payment Processing</h2>
                                                        <p class="card-text">Thank you for your payment. Your
                                                            transaction is been processed.</p>
                                                        <!-- Additional information about the successful payment process if needed -->
                                                        <a href="{{ route('payments.index') }}"
                                                            class="btn btn-primary">Back to Payments</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- ends --}}

                                    @endif
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