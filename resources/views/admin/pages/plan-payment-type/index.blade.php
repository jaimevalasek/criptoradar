@extends('admin.layouts.table')

@section('title', 'Gerenciamento de tipos de pagamento')


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
                <span class="g-valign-middle">Tipos de Pagamentos</span>
            </li>
        </ul>
    </div>

@endsection

@section('content')

    <div class="g-pa-20">
        <div class="media">
            <div class="d-flex align-self-center">
                <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">Tipos de Pagamentos</h1>
            </div>

            <div class="media-body align-self-center text-right">
                <a class="btn btn-xl u-btn-secondary g-width-160--md g-font-size-default g-ml-10" href="{{ route('admin.plan-payment-type.create')}}">Adicionar novo
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
                    <th>Descrição</th>
                    <th>Código</th>
                    <th>Memo</th>
                    <th>Cadastrado em</th>
                    <th>Alterado em</th>
                    <th>Actions</th>
                </tr>
                </thead>
                @if (count($planPaymentTypes))
                <tbody>
                    @foreach($planPaymentTypes as $planPaymentType)
                    <tr>
                        <td>{{ $planPaymentType->id }}</td>
                        <td>{{ $planPaymentType->name }}</td>
                        <td>{{ $planPaymentType->description }}</td>
                        <td>{{ $planPaymentType->code }}</td>
                        <td>{{ $planPaymentType->memo }}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($planPaymentType->created_at))}}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($planPaymentType->updated_at)) }}</td>
                        <td>
                            <div class="g-pos-rel g-top-3 d-inline-block">
                                <a class="u-link-v5 g-color-gray-light-v6 g-color-secondary--hover g-mr-15" href="{{ route('admin.plan-payment-type.edit', $planPaymentType->id) }}">
                                    <i class="hs-admin-pencil g-font-size-18"></i>
                                </a>

                                <a class="u-link-v5 g-color-gray-light-v6 g-color-secondary--hover" href="{{ route('admin.plan-payment-type.destroy', $planPaymentType->id) }}">
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
                        <td colspan="8">Nenhum registro</td>
                    </tr>
                </tbody>
                @endif
            </table>
        </div>

    </div>


@endsection
