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
                                                    <th class="fw-bolder">S/N</th>
                                                    <th class="fw-bolder">Type</th>
                                                    <th class="fw-bolder">Amount</th>
                                                    <th class="fw-bolder">Status</th>
                                                    <th class="fw-bolder">View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($payments as $payment)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <h6>{{ $payment->id }}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="lead text-black">{{ $payment->type }} plan</td>
                                                    <td>#{{ $payment->amount}}</td>
                                                    <td>
                                                        @if ( $payment->status === "success")
                                                        <span
                                                            class="badge rounded-pill bg-success p-2">{{ $payment->status }}</span>
                                                        @elseif ($payment->status === "failed")
                                                        <span
                                                            class="badge rounded-pill bg-danger p-2">{{ $payment->status }}</span>
                                                        @else
                                                        <span
                                                            class="badge rounded-pill bg-warning p-2">{{ $payment->status }}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ( $payment->success === 1)
                                                        <a class="btn btn-success"
                                                            href="/payment/{{ $payment->reference }}">View</a>
                                                        @elseif ($payment->processing === 1)
                                                        <a class="btn btn-warning"
                                                            href="{{ $payment->authorization_url}}">Continue</a>
                                                        @else
                                                        <a class="btn btn-info"
                                                            href="/payment/{{ $payment->reference }}">View</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <nav class="theme-pagination">
                                    <div class="float-end d-flex">{{ $payments->links() }}</div>
                                </nav>
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