@extends('layouts.app')

@section('content')
<!-- breadcrumb start -->
<section class="breadcrumb-section p-0">
    <img loading="lazy" src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
    <div class="container">
        <div class="breadcrumb-content">
            <div>
                <h2>Dashboard</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
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
                                <div class="filter-panel d-flex justify-content-between">
                                    <div class="top-panel">
                                        <div>
                                            <h2>Payments</h2>
                                        </div>
                                    </div>
                                    <div class="">
                                        <a href="{{ route('payments.create') }}"
                                            class="btn btn-dashed btn-pill color-2 btn-success float-left text-dark">Subscribe</a>
                                    </div>

                                </div>
                                <div
                                    class="property-2 row column-sm zoom-gallery property-label property-grid list-view">
                                    <div class="table-responsive">
                                        <table class="table table-bordernone">
                                            <thead>
                                                <tr>
                                                    <th class="fw-bolder">Title</th>
                                                    <th class="fw-bolder">Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Type
                                                    </td>
                                                    <td>
                                                        {{ $payment->type }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Amount
                                                    </td>
                                                    <td>
                                                        #{{ $payment->amount }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Status
                                                    </td>
                                                    <td>
                                                        {{ $payment->status }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Created
                                                    </td>
                                                    <td>
                                                        {{ $payment->created_at }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Duration
                                                    </td>
                                                    <td>
                                                        {{ ($payment->duration)/(60*60*24) }} days
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Expiring date
                                                    </td>
                                                    <td>
                                                        @php
                                                        $timestamp = $payment->expired; // UNIX timestamp
                                                        $dateTime = Carbon\Carbon::createFromTimestamp($timestamp);
                                                        $formattedDate = $dateTime->format('Y-m-d H:i:s');
                                                        @endphp

                                                        {{ $formattedDate }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
<!-- pricing dashboard section end -->
@endsection