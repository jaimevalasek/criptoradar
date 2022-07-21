@extends('layouts.main')

@section('title', 'Página inicial')

@section('css-header')

    <!-- CSS Unify -->
    <link href="{{ asset('css/unify-core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/unify-components.css') }}" rel="stylesheet">
    <link href="{{ asset('css/unify-globals.css') }}" rel="stylesheet">

    <!-- CSS Customization -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <style>
        .g-mb-100 {
            margin-bottom: 1.14286rem !important;
        }
        .g-mr-40--lg {
            margin-right: -1.14286rem !important;
        }
    </style>

@endsection

@section('content')
    <div class="row">
        <!-- Profile Sidebar -->
        @include('layouts.sidebar')
        <!-- End Profile Sidebar -->

        <!-- Profile Content -->
        <div class="col-lg-9">
            <!-- Overall Statistics -->
            <!-- End Overall Statistics -->

            <!-- Projects & Activities Panels -->
            <!-- End Projects & Activities Panels -->

            <!-- Projects & News Feeds Panels -->
            <!-- End Projects & News Feeds Panels -->

            <!-- User Contacts Panel -->
            <!-- End User Contacts Panel -->

            <!-- Product Table Panel -->
            <div class="card border-0">
                <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                    <h3 class="h6 mb-0">
                        <i class="icon-directions g-pos-rel g-top-1 g-mr-5"></i> Product Table
                    </h3>
                    <div class="dropdown g-mb-10 g-mb-0--md">
                  <span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-options-vertical g-pos-rel g-top-1"></i>
                    </span>
                        <div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
                            <a class="dropdown-item g-px-10" href="#">
                                <i class="icon-layers g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Projects
                            </a>
                            <a class="dropdown-item g-px-10" href="#">
                                <i class="icon-wallet g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Wallets
                            </a>
                            <a class="dropdown-item g-px-10" href="#">
                                <i class="icon-fire g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Reports
                            </a>
                            <a class="dropdown-item g-px-10" href="#">
                                <i class="icon-settings g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Users Setting
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item g-px-10" href="#">
                                <i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> View More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-block g-pa-0">
                    <!-- Product Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered u-table--v2">
                            <thead class="text-uppercase g-letter-spacing-1">
                            <tr>
                                <th class="g-font-weight-300 g-color-black">Product Name</th>
                                <th class="g-font-weight-300 g-color-black g-min-width-200">Locations</th>
                                <th class="g-font-weight-300 g-color-black">Status</th>
                                <th class="g-font-weight-300 g-color-black">Contacts</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td class="align-middle text-nowrap">
                                    <h4 class="h6 g-mb-2">Lenovo Group</h4>
                                    <div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                                        <span>389ZA2 DeClaudine, CA, USA</span>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="#">
                                        <i class="fa fa-arrows-v g-mr-5"></i> Middle
                                    </a>
                                </td>
                                <td class="align-middle text-nowrap">
                          <span class="d-block g-mb-5">
                            <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +1 4768 97655
                          </span>
                                    <span class="d-block">
                            <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> contact@lenovo.com
                          </span>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle text-nowrap">
                                    <h4 class="h6 g-mb-2">Samsung Electronics</h4>
                                    <div class="js-rating g-font-size-12 g-color-primary" data-rating="4.5"></div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                                        <span>738AD Lorena Spur, London, UK</span>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-block u-btn-pink g-rounded-50 g-py-5" href="#">
                                        <i class="fa fa-level-up g-mr-5"></i> High
                                    </a>
                                </td>
                                <td class="align-middle text-nowrap">
                          <span class="d-block g-mb-5">
                            <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +44 7689 7655
                          </span>
                                    <span class="d-block">
                            <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> users@samsung.com
                          </span>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle text-nowrap">
                                    <h4 class="h6 g-mb-2">Sony Corp.</h4>
                                    <div class="js-rating g-font-size-12 g-color-primary" data-rating="2"></div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                                        <span>044C1 Port Dickson, BC, Canada</span>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-block u-btn-cyan g-rounded-50 g-py-5" href="#">
                                        <i class="fa fa-sort-amount-desc g-mr-5"></i> Deep
                                    </a>
                                </td>
                                <td class="align-middle text-nowrap">
                          <span class="d-block g-mb-5">
                            <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +1 0739 3644
                          </span>
                                    <span class="d-block">
                            <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> clients@sony.com
                          </span>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle text-nowrap">
                                    <h4 class="h6 g-mb-2">Apple Inc.</h4>
                                    <div class="js-rating g-font-size-12 g-color-primary" data-rating="5"></div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                                        <span>07W2 Donell Lodge, NY, USA</span>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-block u-btn-purple g-rounded-50 g-py-5" href="#">
                                        <i class="fa fa-level-down g-mr-5"></i> Down
                                    </a>
                                </td>
                                <td class="align-middle text-nowrap">
                          <span class="d-block g-mb-5">
                            <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +1 6589-96451
                          </span>
                                    <span class="d-block">
                            <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> mail@appple.com
                          </span>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle text-nowrap">
                                    <h4 class="h6 g-mb-2">Dell Corporation</h4>
                                    <div class="js-rating g-font-size-12 g-color-primary" data-rating="4"></div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                                        <span>1A9WA4 Wanderben, Berlin, Germany</span>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-block u-btn-deeporange g-rounded-50 g-py-5" href="#">
                                        <i class="fa fa-bolt g-mr-5"></i> Stabile
                                    </a>
                                </td>
                                <td class="align-middle text-nowrap">
                          <span class="d-block g-mb-5">
                            <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +49 3868 4792
                          </span>
                                    <span class="d-block">
                            <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> clients@dell.com
                          </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Product Table -->
                </div>
            </div>
            <!-- End Product Table Panel -->
        </div>
        <!-- End Profile Content -->
    </div>
@endsection
