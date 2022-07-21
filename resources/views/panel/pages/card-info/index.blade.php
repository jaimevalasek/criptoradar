@extends('layouts.main')

@section('title', 'Ideias sobre investimentos')


@section('breadcrumb')

    <section class="g-my-30">
        <div class="container">
            <ul class="u-list-inline">
                <li class="list-inline-item g-mr-7">
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
                <li class="list-inline-item g-mr-7">
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="{{ route('painel') }}">Painel</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
                <li class="list-inline-item g-color-primary">
                    <span>Informações de investimentos</span>
                </li>
                <h3 class="h6 text-uppercase g-mb-10 g-mb--lg">About <span class="g-color-gray-dark-v1">384,907</span> results</h3>
            </ul>
        </div>
    </section>

@endsection

@section('content')

    <div class="row">
        @if (count($cardInfos))
            @foreach($cardInfos as $cardInfo)
            <div class="col-lg-4 g-mb-30">
                <!-- Search Result -->
                <article class="g-pa-25 u-shadow-v11 rounded">

                    <p class="g-mb-15">{{ $cardInfo->description }}</p>

                    <!-- Search Rating -->
                    <div class="g-mb-15">
                        <span class="js-rating g-color-primary mr-2" data-rating="5"><div class="g-rating" style="display: inline-block; position: relative; z-index: 1; white-space: nowrap; margin-left: -2px; margin-right: -2px;"><div class="g-rating-forward" style="position: absolute; left: 0px; top: 0px; height: 100%; overflow: hidden; width: 100%;"><i class="fa fa-star" style="margin-left: 2px; margin-right: 2px;"></i><i class="fa fa-star" style="margin-left: 2px; margin-right: 2px;"></i><i class="fa fa-star" style="margin-left: 2px; margin-right: 2px;"></i><i class="fa fa-star" style="margin-left: 2px; margin-right: 2px;"></i><i class="fa fa-star" style="margin-left: 2px; margin-right: 2px;"></i></div><div class="g-rating-backward" style="position: relative; z-index: 1;"><i class="fa fa-star-o" style="margin-left: 2px; margin-right: 2px;"></i><i class="fa fa-star-o" style="margin-left: 2px; margin-right: 2px;"></i><i class="fa fa-star-o" style="margin-left: 2px; margin-right: 2px;"></i><i class="fa fa-star-o" style="margin-left: 2px; margin-right: 2px;"></i><i class="fa fa-star-o" style="margin-left: 2px; margin-right: 2px;"></i></div></div></span>
                        <span class="g-color-gray-dark-v5">Relevance 5.0 out of 4902 votes</span>
                    </div>
                    <!-- End Search Rating -->

                </article>
                <!-- End Search Result -->
            </div>
            @endforeach
        @endif
    </div>

@endsection
