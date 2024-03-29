@extends('layouts.main')

@section('title', 'Página inicial')

@section('content')
    <div class="row">
        <!-- Profile Sidebar -->
        <div class="col-lg-3 g-mb-50 g-mb-0--lg">
            <!-- User Image -->
            <div class="u-block-hover g-pos-rel">
                <figure>
                    <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="{{asset('img-temp/400x450/img5.jpg')}}" alt="Image Description">
                </figure>

                <!-- Figure Caption -->
                <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
                    <div class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
                        <!-- Figure Social Icons -->
                        <ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">
                            <li class="list-inline-item align-middle g-mx-7">
                                <a class="u-icon-v1 u-icon-size--md g-color-white" href="#">
                                    <i class="icon-note u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item align-middle g-mx-7">
                                <a class="u-icon-v1 u-icon-size--md g-color-white" href="#">
                                    <i class="icon-notebook u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item align-middle g-mx-7">
                                <a class="u-icon-v1 u-icon-size--md g-color-white" href="#">
                                    <i class="icon-settings u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Figure Social Icons -->
                    </div>
                </figcaption>
                <!-- End Figure Caption -->

                <!-- User Info -->
                <span class="g-pos-abs g-top-20 g-left-0">
                  <a class="btn btn-sm u-btn-primary rounded-0" href="#">Johne Doe</a>
                  <small class="d-block g-bg-black g-color-white g-pa-5">Project Manager</small>
                </span>
                <!-- End User Info -->
            </div>
            <!-- User Image -->

            <!-- Sidebar Navigation -->
            <div class="list-group list-group-border-0 g-mb-40">
                <!-- Overall -->
                <a href="page-profile-main-1.html" class="list-group-item justify-content-between active">
                    <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i> Overall</span>
                    <span class="u-label g-font-size-11 g-bg-white g-color-main g-rounded-20 g-px-10">2</span>
                </a>
                <!-- End Overall -->

                <!-- Profile -->
                <a href="page-profile-profile-1.html" class="list-group-item list-group-item-action justify-content-between">
                    <span><i class="icon-cursor g-pos-rel g-top-1 g-mr-8"></i> Profile</span>
                </a>
                <!-- End Profile -->

                <!-- Users Contacts -->
                <a href="page-profile-users-1.html" class="list-group-item list-group-item-action justify-content-between">
                    <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Users Contacts</span>
                </a>
                <!-- End Users Contacts -->

                <!-- My Projects -->
                <a href="page-profile-projects-1.html" class="list-group-item list-group-item-action justify-content-between">
                    <span><i class="icon-layers g-pos-rel g-top-1 g-mr-8"></i> My Projects</span>
                    <span class="u-label g-font-size-11 g-bg-primary g-rounded-20 g-px-10">9</span>
                </a>
                <!-- End My Projects -->

                <!-- Comments -->
                <a href="page-profile-comments-1.html" class="list-group-item list-group-item-action justify-content-between">
                    <span><i class="icon-bubbles g-pos-rel g-top-1 g-mr-8"></i> Comments</span>
                    <span class="u-label g-font-size-11 g-bg-pink g-rounded-20 g-px-8">24</span>
                </a>
                <!-- End Comments -->

                <!-- Reviews -->
                <a href="page-profile-reviews-1.html" class="list-group-item list-group-item-action justify-content-between">
                    <span><i class="icon-heart g-pos-rel g-top-1 g-mr-8"></i> Reviews</span>
                </a>
                <!-- End Reviews -->

                <!-- History -->
                <a href="page-profile-history-1.html" class="list-group-item list-group-item-action justify-content-between">
                    <span><i class="icon-fire g-pos-rel g-top-1 g-mr-8"></i> History</span>
                </a>
                <!-- End History -->

                <!-- Settings -->
                <a href="page-profile-settings-1.html" class="list-group-item list-group-item-action justify-content-between">
                    <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i> Settings</span>
                    <span class="u-label g-font-size-11 g-bg-cyan g-rounded-20 g-px-8">3</span>
                </a>
                <!-- End Settings -->
            </div>
            <!-- End Sidebar Navigation -->

            <!-- Project Progress -->
            <div class="card border-0 rounded-0 g-mb-50">
                <!-- Panel Header -->
                <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                    <h3 class="h6 mb-0">
                        <i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Project Progress
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
                <!-- End Panel Header -->

                <!-- Panel Body -->
                <div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-0">
                    <!-- Web Design -->
                    <div class="g-mb-20">
                        <h6 class="g-mb-10">Web Design <span class="float-right g-ml-10">68%</span></h6>
                        <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                            <div class="js-hr-progress-bar-indicator progress-bar g-bg-cyan u-progress-bar--xs" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="g-font-size-12">11% more than last week</small>
                    </div>
                    <!-- End Web Design -->

                    <!-- Unify Project -->
                    <div class="g-mb-20">
                        <h6 class="g-mb-10">Dribbble Shots <span class="float-right g-ml-10">62%</span></h6>
                        <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                            <div class="js-hr-progress-bar-indicator progress-bar g-bg-pink u-progress-bar--xs" role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="g-font-size-12">20% less than last week</small>
                    </div>
                    <!-- End Unify Project -->

                    <!-- Unify Project -->
                    <div class="g-mb-20">
                        <h6 class="g-mb-10">Unify Project <span class="float-right g-ml-10">93%</span></h6>
                        <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                            <div class="js-hr-progress-bar-indicator progress-bar g-bg-primary u-progress-bar--xs" role="progressbar" style="width: 93%;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="g-font-size-12">17% more than last week</small>
                    </div>
                    <!-- End Unify Project -->

                    <!-- WordPress Coding -->
                    <div class="g-mb-20">
                        <h6 class="g-mb-10">WordPress Coding <span class="float-right g-ml-10">74%</span></h6>
                        <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                            <div class="js-hr-progress-bar-indicator progress-bar g-bg-black u-progress-bar--xs" role="progressbar" style="width: 74%;" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="g-font-size-12">35% more than last week</small>
                    </div>
                    <!-- End WordPress Coding -->

                    <!-- Pixeel Ltd -->
                    <div class="g-mb-20">
                        <h6 class="g-mb-10">Pixeel Ltd <span class="float-right g-ml-10">86%</span></h6>
                        <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                            <div class="js-hr-progress-bar-indicator progress-bar g-bg-darkpurple u-progress-bar--xs" role="progressbar" style="width: 86%;" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="g-font-size-12">42% more than last week</small>
                    </div>
                    <!-- End Pixeel Ltd -->
                </div>
                <!-- End Panel Body -->
            </div>
            <!-- End Project Progress -->
        </div>
        <!-- End Profile Sidebar -->

        <!-- Profile Content -->
        <div class="col-lg-9">
            <!-- Overall Statistics -->
            <div class="row g-mb-40">
                <div class="col-md-6 g-mb-30 g-mb-0--md">
                    <div class="g-bg-cyan g-color-white g-pa-25">
                        <header class="d-flex text-uppercase g-mb-40">
                            <i class="icon-people align-self-center display-4 g-mr-20"></i>

                            <div class="g-line-height-1">
                                <h4 class="h5">Overal Visits</h4>
                                <div class="js-counter g-font-size-30" data-comma-separated="true">52147</div>
                            </div>
                        </header>

                        <div class="d-flex justify-content-between text-uppercase g-mb-25">
                            <div class="g-line-height-1">
                                <h5 class="h6 g-font-weight-600">Last Week</h5>
                                <div class="js-counter g-font-size-16" data-comma-separated="true">1385</div>
                            </div>

                            <div class="text-right g-line-height-1">
                                <h5 class="h6 g-font-weight-600">Last Month</h5>
                                <div class="js-counter g-font-size-16" data-comma-separated="true">6048</div>
                            </div>
                        </div>

                        <h6 class="g-mb-10">Project Completeness <span class="float-right g-ml-10">72%</span></h6>
                        <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-10">
                            <div class="js-hr-progress-bar-indicator progress-bar g-bg-white u-progress-bar--xs" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="g-font-size-12">11% less than last month</small>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="g-bg-purple g-color-white g-pa-25">
                        <header class="d-flex text-uppercase g-mb-40">
                            <i class="icon-layers align-self-center display-4 g-mr-20"></i>

                            <div class="g-line-height-1">
                                <h4 class="h5">Overal Views</h4>
                                <div class="js-counter g-font-size-30" data-comma-separated="true">324056</div>
                            </div>
                        </header>

                        <div class="d-flex justify-content-between text-uppercase g-mb-25">
                            <div class="g-line-height-1">
                                <h5 class="h6 g-font-weight-600">Last Week</h5>
                                <div class="js-counter g-font-size-16" data-comma-separated="true">26904</div>
                            </div>

                            <div class="text-right g-line-height-1">
                                <h5 class="h6 g-font-weight-600">Last Month</h5>
                                <div class="js-counter g-font-size-16" data-comma-separated="true">124766</div>
                            </div>
                        </div>

                        <h6 class="g-mb-10">Project Completeness <span class="float-right g-ml-10">89%</span></h6>
                        <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-10">
                            <div class="js-hr-progress-bar-indicator progress-bar g-bg-white u-progress-bar--xs" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="g-font-size-12">16% higher than last month</small>
                    </div>
                </div>
            </div>
            <!-- End Overall Statistics -->

            <!-- Projects & Activities Panels -->
            <div class="row g-mb-40">
                <div class="col-lg-6 g-mb-40 g-mb-0--lg">
                    <!-- Latest Projects Panel -->
                    <div class="card border-0">
                        <!-- Panel Header -->
                        <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                            <h3 class="h6 mb-0">
                                <i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Latest Projects
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
                        <!-- End Panel Header -->

                        <!-- Panel Body -->
                        <div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-400 g-pa-0">
                            <ul class="list-unstyled">
                                <li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-blue-left rounded g-pa-20 g-mb-10">
                                    <div class="d-flex g-mt-2 g-mr-15">
                                        <img class="g-width-40 g-height-40 rounded-circle" src="{{asset('img-temp/100x100/img1.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="h6 g-font-weight-600 g-color-black">Unify Template</h5>
                                            <span class="small text-nowrap g-color-blue">2 min ago</span>
                                        </div>
                                        <p>Curabitur hendrerit dolor sit amet consectetur. Adipiscing elitut leosit amet, consectetur eleifend.</p>
                                        <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">HTML</span>
                                        <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">AnhularJS</span>
                                        <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">PHP</span>
                                    </div>
                                </li>

                                <li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-pink-left rounded g-pa-20 g-mb-10">
                                    <div class="d-flex g-mt-2 g-mr-15">
                                        <img class="g-width-40 g-height-40 rounded-circle" src="{{asset('img-temp/100x100/img5.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="h6 g-font-weight-600 g-color-black">UX/UI Design and Backend</h5>
                                            <span class="small text-nowrap g-color-pink">16 min ago</span>
                                        </div>
                                        <p>Hac consectetur habitasse platea dictumst, adipiscing elitut leosit amet, consectetur eleifend.</p>
                                        <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">CSS</span>
                                        <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-color-black g-rounded-20 g-px-10">JavaScript</span>
                                        <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">Ruby</span>
                                        <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">ASP.NET</span>
                                    </div>
                                </li>

                                <li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-black-left rounded g-pa-20 g-mb-10">
                                    <div class="d-flex g-mt-2 g-mr-15">
                                        <img class="g-width-40 g-height-40 rounded-circle" src="{{asset('img-temp/100x100/img4.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="h6 g-font-weight-600 g-color-black">React Native App</h5>
                                            <span class="small text-nowrap g-color-blue">2 min ago</span>
                                        </div>
                                        <p>Curabitur hendrerit dolor sit amet consectetur. Adipiscing elitut leosit amet, consectetur eleifend.</p>
                                        <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">ReactJS</span>
                                        <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">CSS</span>
                                        <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">HTML</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Panel Body -->
                    </div>
                    <!-- End Latest Projects Panel -->
                </div>

                <div class="col-lg-6">
                    <!-- Activities Panel -->
                    <div class="card border-0">
                        <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                            <h3 class="h6 mb-0">
                                <i class="icon-directions g-pos-rel g-top-1 g-mr-5"></i> Activities
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

                        <div class="js-scrollbar card-block  u-info-v1-1 g-bg-white-gradient-v1--after g-height-400 g-pa-0">
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
                                    <div class="g-mt-2">
                                        <img class="g-width-50 g-height-50 rounded-circle" src="{{asset('img-temp/100x100/img7.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="align-self-center g-px-10">
                                        <h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
                                            <span class="g-mr-5">James Coolman</span>
                                            <small class="g-font-size-12 g-color-blue">8k+ earned</small>
                                        </h5>
                                        <p class="m-0">Nulla ipsum dolor sit amet adipiscing</p>
                                    </div>
                                    <div class="align-self-center ml-auto">
                                        <span class="u-label u-label--sm g-bg-blue g-rounded-20 g-px-10">$25 / hr</span>
                                    </div>
                                </li>

                                <li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
                                    <div class="g-mt-2">
                                        <img class="g-width-50 g-height-50 rounded-circle" src="{{asset('img-temp/100x100/img5.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="align-self-center g-px-10">
                                        <h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
                                            <span class="g-mr-5">Alberta Watson</span>
                                            <small class="g-font-size-12 g-color-pink">5k+ earned</small>
                                        </h5>
                                        <p class="m-0">Hac consectetur habitasse platea dictumst</p>
                                    </div>
                                    <div class="align-self-center ml-auto">
                                        <span class="u-label u-label--sm g-bg-pink g-rounded-20 g-px-10">$32 / hr</span>
                                    </div>
                                </li>

                                <li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
                                    <div class="g-mt-2">
                                        <img class="g-width-50 g-height-50 rounded-circle" src="{{asset('img-temp/100x100/img14.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="align-self-center g-px-10">
                                        <h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
                                            <span class="g-mr-5">David Lee</span>
                                            <small class="g-font-size-12 g-color-teal">3k+ earned</small>
                                        </h5>
                                        <p class="m-0">Curabitur hendrerit dolor sit amet consectetur</p>
                                    </div>
                                    <div class="align-self-center ml-auto">
                                        <span class="u-label u-label--sm g-bg-teal g-rounded-20 g-px-10">$28 / hr</span>
                                    </div>
                                </li>

                                <li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
                                    <div class="g-mt-2">
                                        <img class="g-width-50 g-height-50 rounded-circle" src="{{asset('img-temp/100x100/img4.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="align-self-center g-px-10">
                                        <h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
                                            <span class="g-mr-5">Alberta Heller</span>
                                            <small class="g-font-size-12 g-color-darkpurple">4k+ earned</small>
                                        </h5>
                                        <p class="m-0">Adipiscing elitut leosit amet, consectetur eleifend</p>
                                    </div>
                                    <div class="align-self-center ml-auto">
                                        <span class="u-label u-label--sm g-bg-darkpurple g-rounded-20 g-px-10">$35 / hr</span>
                                    </div>
                                </li>

                                <li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
                                    <div class="g-mt-2">
                                        <img class="g-width-50 g-height-50 rounded-circle" src="{{asset('img-temp/100x100/img17.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="align-self-center g-px-10">
                                        <h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
                                            <span class="g-mr-5">James Coolman</span>
                                            <small class="g-font-size-12 g-color-blue">8k+ earned</small>
                                        </h5>
                                        <p class="m-0">Nulla ipsum dolor sit amet adipiscing</p>
                                    </div>
                                    <div class="align-self-center ml-auto">
                                        <span class="u-label u-label--sm g-bg-blue g-rounded-20 g-px-10">$25 / hr</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Activities Panel -->
                </div>
            </div>
            <!-- End Projects & Activities Panels -->

            <!-- Projects & News Feeds Panels -->
            <div class="row g-mb-40">
                <div class="col-lg-6 g-mb-40 g-mb-0--lg">
                    <!-- Notifications Panel -->
                    <div class="card border-0">
                        <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                            <h3 class="h6 mb-0">
                                <i class="icon-list g-pos-rel g-top-1 g-mr-5"></i> Notifications
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

                        <div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-0">
                            <!-- Alert Success -->
                            <div class="alert fade show g-bg-primary-opacity-0_1 g-color-primary rounded-0 g-mb-5" role="alert">
                                <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <div class="media">
                                    <div class="d-flex g-mr-10">
                                        <img class="g-width-40 g-height-40 g-rounded-50x" src="{{asset('img-temp/100x100/img5.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="media-body">
                                        <p class="m-0"><strong>Jasica Coolman</strong> saved your pin.</p>
                                        <span class="g-font-size-12 g-color-gray">2 hours ago</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Alert Success -->

                            <!-- Alert Cyan -->
                            <div class="alert fade show g-bg-cyan-opacity-0_1 g-color-cyan rounded-0 g-mb-5" role="alert">
                                <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <div class="media">
                                    <div class="d-flex g-mr-10">
                                        <img class="g-width-40 g-height-40 g-rounded-50x" src="{{asset('img-temp/100x100/img14.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="media-body">
                                        <p class="m-0"><strong>Jack Watson</strong> sent you a message.</p>
                                        <span class="g-font-size-12">5 minutes ago</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Alert Cyan -->

                            <!-- Alert Orange -->
                            <div class="alert fade show g-bg-orange-opacity-0_1 g-color-orange rounded-0 g-mb-5" role="alert">
                                <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <div class="media">
                                    <div class="d-flex g-mr-10">
                                        <img class="g-width-40 g-height-40 g-rounded-50x" src="{{asset('img-temp/100x100/img4.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="media-body">
                                        <p class="m-0"><strong>Nelly</strong> is offering free cofee..</p>
                                        <span class="g-font-size-12 g-color-gray">5 days ago</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Alert Orange -->

                            <!-- Alert Purple -->
                            <div class="alert fade show g-bg-purple-opacity-0_1 g-color-purple rounded-0 g-mb-5" role="alert">
                                <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <div class="media">
                                    <div class="d-flex g-mr-10">
                          <span class="u-icon-v3 u-icon-size--sm g-bg-purple g-color-white g-rounded-50x">
                            <i class="icon-wallet"></i>
                          </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="m-0"><strong>Pixeel Ltd</strong> received $270 for logo.</p>
                                        <span class="g-font-size-12 g-color-gray">2 hours ago</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Alert Purple -->

                            <!-- Alert Red -->
                            <div class="alert fade show g-bg-red-opacity-0_1 g-color-lightred rounded-0 g-mb-5" role="alert">
                                <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <div class="media">
                                    <div class="d-flex g-mr-10">
                                        <img class="g-width-40 g-height-40 g-rounded-50x" src="{{asset('img-temp/100x100/img17.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="media-body">
                                        <p class="m-0"><strong>Edmon Low</strong> saved your pin.</p>
                                        <span class="g-font-size-12 g-color-gray">5 minutes ago</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Alert Red -->

                            <!-- Alert Gray Lighter 5 -->
                            <div class="alert fade show g-bg-gray-light-v5 rounded-0 g-mb-5" role="alert">
                                <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <div class="media">
                                    <div class="d-flex g-mr-10">
                                        <img class="g-width-40 g-height-40 g-rounded-50x" src="{{asset('img-temp/100x100/img1.jpg')}}" alt="Image Description">
                                    </div>
                                    <div class="media-body">
                                        <p class="m-0"><strong>Htmlstream</strong> released a new update.</p>
                                        <span class="g-font-size-12 g-color-gray">2 hours ago</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Alert Gray Lighter 5 -->
                        </div>
                    </div>
                    <!-- End Notifications Panel -->
                </div>

                <div class="col-lg-6">
                    <!-- News Feeds -->
                    <div class="card border-0">
                        <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                            <h3 class="h6 mb-0">
                                <i class="icon-directions g-pos-rel g-top-1 g-mr-5"></i> Activities
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

                        <div class="js-scrollbar card-block  u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-0">
                            <!-- Article -->
                            <article class="media g-mb-20">
                                <a class="d-flex mr-3" href="#">
                                    <img class="rounded-circle g-width-40 g-height-40" src="{{asset('img-temp/100x100/img1.jpg')}}" alt="Image Description">
                                </a>

                                <div class="media-body">
                                    <h3 class="h6">
                                        <span class="g-color-black g-font-weight-600">Htmlstream</span>
                                        <a class="g-color-gray-dark-v4 g-mr-5" href="#">@Htmlstream</a>
                                        <span class="g-color-gray-dark-v4">26m</span>
                                    </h3>
                                    <p class="g-color-gray-dark-v4 g-mb-5">Sed ultrices velit vitae tortor posuere ultrices. Aliquam laoreet lorem et vulputate porta.</p>
                                    <a href="#">https://goo.gl/Zjd6Bj</a>
                                </div>
                            </article>
                            <!-- End Article -->

                            <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-20">

                            <!-- Article -->
                            <article class="media g-mb-20">
                                <a class="d-flex mr-3" href="#">
                                    <img class="rounded-circle g-width-40 g-height-40" src="{{asset('img-temp/100x100/img3.jpg')}}" alt="Image Description">
                                </a>

                                <div class="media-body">
                                    <h3 class="h6">
                                        <span class="g-color-black g-font-weight-600">Pixeel</span>
                                        <a class="g-color-gray-dark-v4 g-mr-5" href="#">@PixeelStudio</a>
                                        <span class="g-color-gray-dark-v4">3h</span>
                                    </h3>
                                    <p class="g-color-gray-dark-v4 g-mb-5">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                    <a href="#">https://goo.gl/Zjd6Bj</a>
                                </div>
                            </article>
                            <!-- End Article -->

                            <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-20">

                            <!-- Article -->
                            <article class="media g-mb-20">
                                <a class="d-flex mr-3" href="#">
                                    <img class="rounded-circle g-width-40 g-height-40" src="{{asset('img-temp/100x100/img2.jpg')}}" alt="Image Description">
                                </a>

                                <div class="media-body">
                                    <h3 class="h6">
                                        <span class="g-color-black g-font-weight-600">Wrapbootstrap</span>
                                        <a class="g-color-gray-dark-v4 g-mr-5" href="#">@Wrapbootstrap</a>
                                        <span class="g-color-gray-dark-v4">54m</span>
                                    </h3>
                                    <p class="g-color-gray-dark-v4 g-mb-5">Sed ultrices velit vitae tortor posuere ultrices. Aliquam laoreet lorem et vulputate porta.</p>
                                    <a href="#">https://goo.gl/Zjd6Bj</a>
                                </div>
                            </article>
                            <!-- End Article -->

                            <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-20">

                            <!-- Article -->
                            <article class="media g-mb-20">
                                <a class="d-flex mr-3" href="#">
                                    <img class="rounded-circle g-width-40 g-height-40" src="{{asset('img-temp/100x100/img4.jpg')}}" alt="Image Description">
                                </a>

                                <div class="media-body">
                                    <h3 class="h6">
                                        <span class="g-color-black g-font-weight-600">Karina</span>
                                        <a class="g-color-gray-dark-v4 g-mr-5" href="#">@Karina</a>
                                        <span class="g-color-gray-dark-v4">7h</span>
                                    </h3>
                                    <p class="g-color-gray-dark-v4 g-mb-5">Sed ultrices velit vitae tortor posuere ultrices. Aliquam laoreet lorem et vulputate porta.</p>
                                    <a href="#">https://goo.gl/Zjd6Bj</a>
                                </div>
                            </article>
                            <!-- End Article -->
                        </div>
                    </div>
                    <!-- End News Feeds -->
                </div>
            </div>
            <!-- End Projects & News Feeds Panels -->

            <!-- User Contacts Panel -->
            <div class="card border-0 rounded-0 g-mb-50">
                <!-- Panel Header -->
                <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                    <h3 class="h6 mb-0">
                        <i class="icon-notebook g-pos-rel g-top-1 g-mr-5"></i> User Contacts
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
                <!-- End Panel Header -->

                <!-- Panel Body -->
                <div class="card-block g-pa-0">
                    <!-- User Contacts -->
                    <div class="row">
                        <div class="col-md-4 g-mb-30 g-mb-0--md">
                            <!-- Figure -->
                            <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                                <div class="g-py-40 g-px-20">
                                    <!-- Figure Image -->
                                    <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="{{asset('img-temp/100x100/img1.jpg')}}" alt="Image Description">
                                    <!-- Figure Image -->

                                    <!-- Figure Info -->
                                    <h4 class="h5 g-mb-5">Mikel Andrews</h4>
                                    <div class="d-block">
                          <span class="g-color-cyan g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                                        <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                                    </div>
                                    <!-- End Figure Info -->
                                </div>

                                <hr class="g-brd-gray-light-v4 g-my-0">

                                <!-- Figure List -->
                                <ul class="row list-inline g-py-20 g-ma-0">
                                    <li class="col g-brd-right g-brd-gray-light-v4">
                                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#">
                                            <i class="icon-speech"></i>
                                        </a>
                                    </li>
                                    <li class="col g-brd-right g-brd-gray-light-v4">
                                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#">
                                            <i class="icon-envelope-letter"></i>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#">
                                            <i class="icon-screen-smartphone"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Figure List -->
                            </figure>
                            <!-- End Figure -->
                        </div>

                        <div class="col-md-4 g-mb-30 g-mb-0--md">
                            <!-- Figure -->
                            <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                                <div class="g-py-40 g-px-20">
                                    <!-- Figure Image -->
                                    <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="{{asset('img-temp/100x100/img2.jpg')}}" alt="Image Description">
                                    <!-- Figure Image -->

                                    <!-- Figure Info -->
                                    <h4 class="h5 g-mb-5">Natasha Kolnikova</h4>
                                    <div class="d-block">
                          <span class="g-color-pink g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                                        <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                                    </div>
                                    <!-- End Figure Info -->
                                </div>

                                <hr class="g-brd-gray-light-v4 g-my-0">

                                <!-- Figure List -->
                                <ul class="row list-inline g-py-20 g-ma-0">
                                    <li class="col g-brd-right g-brd-gray-light-v4">
                                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#">
                                            <i class="icon-speech"></i>
                                        </a>
                                    </li>
                                    <li class="col g-brd-right g-brd-gray-light-v4">
                                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#">
                                            <i class="icon-envelope-letter"></i>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#">
                                            <i class="icon-screen-smartphone"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Figure List -->
                            </figure>
                            <!-- End Figure -->
                        </div>

                        <div class="col-md-4">
                            <!-- Figure -->
                            <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                                <div class="g-py-40 g-px-20">
                                    <!-- Figure Image -->
                                    <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="{{asset('img-temp/100x100/img3.jpg')}}" alt="Image Description">
                                    <!-- Figure Image -->

                                    <!-- Figure Info -->
                                    <h4 class="h5 g-mb-5">Frank Heller</h4>
                                    <div class="d-block">
                          <span class="g-color-purple g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                                        <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                                    </div>
                                    <!-- End Figure Info -->
                                </div>

                                <hr class="g-brd-gray-light-v4 g-my-0">

                                <!-- Figure List -->
                                <ul class="row list-inline g-py-20 g-ma-0">
                                    <li class="col g-brd-right g-brd-gray-light-v4">
                                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#">
                                            <i class="icon-speech"></i>
                                        </a>
                                    </li>
                                    <li class="col g-brd-right g-brd-gray-light-v4">
                                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#">
                                            <i class="icon-envelope-letter"></i>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#">
                                            <i class="icon-screen-smartphone"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Figure List -->
                            </figure>
                            <!-- End Figure -->
                        </div>
                    </div>
                    <!-- End User Contacts -->
                </div>
                <!-- End Panel Body -->
            </div>
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
