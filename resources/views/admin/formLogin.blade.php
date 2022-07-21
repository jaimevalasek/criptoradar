@extends('layouts.simple')

@section('title', 'Página de login admin')

@section('content')

    <!-- Login -->
    <section class="g-min-height-100vh g-flex-centered g-bg-lightblue-radialgradient-circle">
        <div class="container g-py-100">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-lg-5">
                    <div class="u-shadow-v24 g-bg-white rounded g-py-40 g-px-30">
                        <header class="text-center mb-4">
                            <h2 class="h2 g-color-black g-font-weight-600">Profile Login</h2>
                        </header>

                        <!-- Form -->
                        <form class="g-py-15" method="post" action="{{ route('admin.login.do') }}">
                            @csrf

                            @if($errors->all())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif

                            <div class="mb-4">
                                <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Email:</label>
                                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="email" name="email" value="" placeholder="johndoe@gmail.com">
                            </div>

                            <div class="g-mb-35">
                                <div class="row justify-content-between">
                                    <div class="col align-self-center">
                                        <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Password:</label>
                                    </div>
                                    <div class="col align-self-center text-right">
                                        <a class="d-inline-block g-font-size-12 mb-2" href="#">Forgot password?</a>
                                    </div>
                                </div>
                                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 mb-3" type="password" name="password" placeholder="Password">
                                <div class="row justify-content-between">
                                    <div class="col-8 align-self-center">
                                        <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-0">
                                            <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                            <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                                <i class="fa" data-check-icon="&#xf00c"></i>
                                            </div>
                                            Keep signed in
                                        </label>
                                    </div>
                                    <div class="col-4 align-self-center text-right">
                                        <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login -->

@endsection
