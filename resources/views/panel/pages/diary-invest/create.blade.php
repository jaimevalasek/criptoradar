@extends('layouts.main')

@section('title', 'Ideias sobre investimentos')

@section('breadcrumb')
<link rel="stylesheet" href="{{ url('vendor/bootstrap-select/css/bootstrap-select.min.css') }}">
<link rel="stylesheet" href="{{ url('vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ url('vendor/hs-admin-icons/hs-admin-icons.css') }}">
@endsection

@section('breadcrumb')

    <section class="g-mt-10">
        <div class="container">
            <ul class="u-list-inline">
                <li class="list-inline-item g-mr-7">
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
                <li class="list-inline-item g-mr-7">
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="{{ route('panel') }}">Pages</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
                <li class="list-inline-item g-mr-7">
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="{{ route('diary-invest.index') }}">Diário do Investimento</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
                <li class="list-inline-item g-color-primary">
                    <span>Criar novo</span>
                </li>
            </ul>
        </div>
    </section>

@endsection

@section('content')

    <section class="container g-py-80">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
                    <header class="text-center mb-4">
                        <h2 class="h2 g-color-black g-font-weight-600">Criar novo diário de meu investimento.</h2>
                    </header>

                    <!-- Form -->
                    <form class="g-py-15" action="{{ route('diary-invest.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Descrição:</label>
                            <textarea name="description" class="form-control form-control-md g-resize-none g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4" rows="10" placeholder="Text area"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 mb-4">
                                <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Valor do investimento:</label>
                                <input name="invest_value" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" placeholder="Digite o valor investido neste caso">
                            </div>

                            <div class="col-xs-12 col-sm-6 mb-4">
                                <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Moeda:</label>
                                <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                                    <div class="dropdown bootstrap-select js-select u-select--v3-select u-sibling w-100">
                                        <select class="js-select u-select--v3-select u-sibling w-100" name="coin" required="required" title="Selecione a moeda do investimento" style="display: none;" tabindex="-98">
                                            <option value="1" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-angle-right g-font-size-18 g-mr-15&quot;></i><span>BTC</span></span>">BTC</option>
                                            <option value="2" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-angle-right g-font-size-18 g-mr-15&quot;></i><span>ETH</span></span>">ETH</option>
                                            <option value="3" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-angle-right g-font-size-18 g-mr-15&quot;></i><span>USDT</span></span>">USDT</option>
                                        </select>
                                    </div>

                                    <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
                                        <i class="hs-admin-angle-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Opção para publicação para todos os usuários do site:</label>

                            <div class="btn-group justified-content">
                                <label class="u-check">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="public" value="0" checked="" type="radio">
                                    <span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">Privado</span>
                                </label>
                                <label class="u-check">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="public" value="1" type="radio">
                                    <span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">Público</span>
                                </label>
                            </div>
                        </div>


                        <div class="row justify-content-between mb-5">
                            <div class="col-8 align-self-center">

                            </div>
                            <div class="col-4 align-self-center text-right">
                                <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25" type="submit">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->

                </div>
            </div>
        </div>
    </section>

@endsection


@section('jsfooter')
    <script src="{{ asset('vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>

    <script>
        $(document).on('ready', function () {
            // initialization of custom select
            $('.js-select').selectpicker();

            // initialization of sidebar navigation component
            //$.HSCore.components.HSSideNav.init('.js-side-nav');

            // initialization of hamburger
           // $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSDropdown component
            // $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
            //     dropdownHideOnScroll: false
            // });

            // initialization of custom scrollbar
            //$.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

            // initialization of forms
            //$.HSCore.components.HSCountQty.init('.js-quantity');
        });
    </script>
    <style type="text/css">
        .btn {
            padding: 15px!important;
        }
        .dropdown-menu>li>a {
            padding: 15px!important;
        }
    </style>
@endsection
