@extends('admin.layouts.table')

@section('title', 'Gerenciamento de Product Types')


@section('breadcrump')

    <div class="g-hidden-sm-down g-bg-gray-light-v8 g-pa-20">
        <ul class="u-list-inline g-color-gray-dark-v6">

            <li class="list-inline-item g-mr-10">
                <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle" href="{{ route('admin.dashboard') }}">Admin</a>
                <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
            </li>

            <li class="list-inline-item g-mr-10">
                <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle" href="#!">Gerenciamento</a>
                <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
            </li>

            <li class="list-inline-item">
                <span class="g-valign-middle">Tipos de Produtos</span>
            </li>
        </ul>
    </div>

@endsection

@section('content')

    <div class="g-pa-20">
        <div class="media">
            <div class="d-flex align-self-center">
                <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">Tipos de Produtos</h1>
            </div>

            <div class="media-body align-self-center text-right">
                <a class="btn btn-xl u-btn-secondary g-width-160--md g-font-size-default g-ml-10" href="{{ route('admin.product-type.create')}}">Adicionar novo
                </a>
            </div>
        </div>

        <hr class="d-flex g-brd-gray-light-v7 g-my-30">

        <div class="table-responsive g-mb-40">
            @error('name')

            @enderror
            <table class="table u-table--v3 g-color-black">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Nome URL</th>
                    <th>Criado em</th>
                    <th>Alterado em</th>
                    <th>Actions</th>
                </tr>
                </thead>
                @if (count($productTypes))
                <tbody>
                    @foreach($productTypes as $productType)
                    <tr>
                        <td>{{ $productType->id }}</td>
                        <td>{{ $productType->name }}</td>
                        <td>{{ $productType->slug }}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($productType->created_at))}}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($productType->updated_at)) }}</td>
                        <td>
                            <div class="g-pos-rel g-top-3 d-inline-block">
                                <a class="u-link-v5 g-color-gray-light-v6 g-color-secondary--hover g-mr-15" href="{{ route('admin.product-type.edit', $productType->slug) }}">
                                    <i class="hs-admin-pencil g-font-size-18"></i>
                                </a>

                                <a class="u-link-v5 g-color-gray-light-v6 g-color-secondary--hover" href="{{ route('admin.product-type.destroy', $productType->slug) }}">
                                    <i class="hs-admin-trash g-font-size-18"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                @else
                <tbody>
                    <tr>
                        <td colspan="6">Nenhum registro</td>
                    </tr>
                </tbody>
                @endif
            </table>

{{--            <nav aria-label="Page Navigation">--}}
{{--                <ul class="list-inline d-flex align-items-center justify-product-center g-my-60">--}}
{{--                    <li class="list-inline-item g-mr-10">--}}
{{--                        <a class="u-pagination-v1__item u-pagination-v1-2 g-bg-lightblue-v3--active g-color-gray-dark-v6 g-color-black--hover g-color-white--active g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-brd-lightblue-v3--active g-px-18 g-py-12 g-rounded-4" href="#" aria-label="Previous">--}}
{{--                    <span aria-hidden="true">--}}
{{--                    <i class="hs-admin-angle-left"></i>--}}
{{--                  </span>--}}
{{--                            <span class="sr-only">Previous</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item g-hidden-sm-down g-mr-10">--}}
{{--                        <a class="u-pagination-v1__item u-pagination-v1-2 g-bg-lightblue-v3--active g-color-gray-dark-v6 g-color-black--hover g-color-white--active g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-brd-lightblue-v3--active g-px-18 g-py-12 g-rounded-4" href="#">1</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item g-hidden-sm-down g-mr-10">--}}
{{--                        <span class="u-pagination-v1__item u-pagination-v1-2 g-bg-lightblue-v3--active g-color-gray-dark-v6 g-color-black--hover g-color-white--active g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-brd-lightblue-v3--active g-px-18 g-py-12 g-rounded-4 active">2</span>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item g-hidden-sm-down g-mr-10">--}}
{{--                        <a class="u-pagination-v1__item u-pagination-v1-2 g-bg-lightblue-v3--active g-color-gray-dark-v6 g-color-black--hover g-color-white--active g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-brd-lightblue-v3--active g-px-18 g-py-12 g-rounded-4" href="#">3</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item g-hidden-sm-down g-mr-10">--}}
{{--                        <a class="u-pagination-v1__item u-pagination-v1-2 g-bg-lightblue-v3--active g-color-gray-dark-v6 g-color-black--hover g-color-white--active g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-brd-lightblue-v3--active g-px-18 g-py-12 g-rounded-4" href="#">4</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item g-hidden-sm-down g-mr-10">--}}
{{--                        <a class="u-pagination-v1__item u-pagination-v1-2 g-bg-lightblue-v3--active g-color-gray-dark-v6 g-color-black--hover g-color-white--active g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-brd-lightblue-v3--active g-px-18 g-py-12 g-rounded-4" href="#">5</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item">--}}
{{--                        <a class="u-pagination-v1__item u-pagination-v1-2 g-bg-lightblue-v3--active g-color-gray-dark-v6 g-color-black--hover g-color-white--active g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-brd-lightblue-v3--active g-px-18 g-py-12 g-rounded-4" href="#" aria-label="Next">--}}
{{--                    <span aria-hidden="true">--}}
{{--                    <i class="hs-admin-angle-right"></i>--}}
{{--                  </span>--}}
{{--                            <span class="sr-only">Next</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
        </div>

    </div>


@endsection
