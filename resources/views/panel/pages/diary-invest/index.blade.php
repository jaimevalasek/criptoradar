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
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="{{ route('panel') }}">Pages</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
                <li class="list-inline-item g-color-primary">
                    <span>Diário do Investimento</span>
                </li>
{{--                <h3 class="h6 text-uppercase g-mb-10 g-mb--lg">About <span class="g-color-gray-dark-v1">384,907</span> results</h3>--}}
            </ul>
        </div>
    </section>

@endsection

@section('content')
<section class="g-mb-100">
    <div class="container">
        <div class="d-md-flex justify-content-between g-mb-30">
            <h3 class="h6 text-uppercase g-mb-10 g-mb--lg">About <span class="g-color-gray-dark-v1">384,907</span> results</h3>
            <ul class="list-inline">
                <li class="list-inline-item g-mr-30">
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="{{ route('diary-invest.create') }}">
                        <i class="icon-plus g-pos-rel g-top-1 g-mr-5"></i> Adicionar novo
                    </a>
                </li>
            </ul>
        </div>
        <div class="row" id="diary-invest">
            @if (count($diaryInvests))
                @foreach($diaryInvests as $diaryInvest)
                <div class="col-lg-12 g-mb-10 ">
                    <!-- Search Result -->
                    <article class="g-pa-10 u-shadow-v11 rounded @if($diaryInvest->status == 2) operation-complete @endif">

                        <p class="g-mb-15">{{ $diaryInvest->description }}</p>

                        <ul class="list-inline mb-0">
                            <li class="list-inline-item g-mr-20">
                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">
                                    Valor inicial {{ $diaryInvest->invest_value }} {{ $diaryInvest->diaryInvestCoin()->first()->name }} @if($diaryInvest->status == 2) e valor final de {{ $diaryInvest->return_value }}  {{ $diaryInvest->diaryInvestCoin()->first()->name }} @endif
                                </a>
                                @if($diaryInvest->status == 1)
                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#" style="margin-left: 15px;">
                                    <i class="icon-equalizer g-pos-rel g-top-1 g-mr-5"></i> Configurações
                                </a>
                                @endif
                                @if($diaryInvest->status == 2)
                                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" style="color: red !important; margin-left: 15px;" href="javascript:return false;">
                                       Fechado
                                    </a>
                                @else
                                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" style="color: blue !important; margin-left: 15px;" href="javascript:return false;">
                                        Aberto
                                    </a>
                                @endif
                                @if($diaryInvest->fail == 1 and $diaryInvest->status == 2)
                                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" style="color: red !important; margin-left: 15px;" href="javascript:return false;">
                                        Deu merda
                                    </a>
                                @endif
                                @if($diaryInvest->fail == 0 and $diaryInvest->status == 2)
                                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" style="color: blue !important; margin-left: 15px;" href="javascript:return false;">
                                        Deu certo
                                    </a>
                                @endif
                            </li>
                        </ul>

                    </article>
                    <!-- End Search Result -->
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

@endsection

@section('jsfooter')
    <script type="text/javascript">
        $(document).ready(function(){
            var colors = ['aliceblue','aqua','aquamarine','azure','beige','bisque', 'cornsilk', 'cyan', 'floralwhite','aliceblue','aqua','aquamarine','azure','beige','bisque', 'cornsilk', 'cyan', 'floralwhite'];
            $('#diary-invest article').css('background-color','#EFFBF5');
            $('#diary-invest article').each(function(i, obj) {
                // $(this).css('background-color',colors[i]);
            });
            $('.operation-complete').css('background-color','white');
            $('.operation-complete').css('font-style','italic');
            $('.operation-complete').css('border-color','gray');
            $('.operation-complete').css('border-style','dashed');
            $('.operation-complete').css('font-size','small');
        });
    </script>
@endsection
