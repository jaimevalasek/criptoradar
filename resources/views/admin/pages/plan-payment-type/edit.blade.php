@extends('admin.layouts.table')

@section('title', 'Gerenciamento de Tipos de Produtos')


@section('breadcrump')

    <div class="g-hidden-sm-down g-bg-gray-light-v8 g-pa-20">
        <ul class="u-list-inline g-color-gray-dark-v6">

            <li class="list-inline-item g-mr-10">
                <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle" href="{{ route('admin.dashboard') }}">Admin</a>
                <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
            </li>

            <li class="list-inline-item g-mr-10">
                <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle" href="{{ route('admin.plan-payment-type.index') }}">Tipos de Pagamento</a>
                <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
            </li>

            <li class="list-inline-item">
                <span class="g-valign-middle">Cadastrar</span>
            </li>
        </ul>
    </div>

@endsection

@section('content')
    <div class="col-md-6">
        @include('admin.includes.alerts')

        <form action="{{ route('admin.plan-payment-type.update', $planPaymentType->id) }}" method="post">
            @method('PUT')

            @include('admin.pages.plan-payment-type._partials.form')

        </form>

    </div>


@endsection
