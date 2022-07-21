@extends('admin.layouts.table')

@section('title', 'Gerenciamento de tipos de produtos')


@section('breadcrump')

    <div class="g-hidden-sm-down g-bg-gray-light-v8 g-pa-20">
        <ul class="u-list-inline g-color-gray-dark-v6">

            <li class="list-inline-item g-mr-10">
                <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle" href="{{ route('admin.dashboard') }}">Admin</a>
                <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
            </li>

            <li class="list-inline-item g-mr-10">
                <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle" href="{{ route('admin.product-type.index') }}">Tipos de Produtos</a>
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
        <form action="{{ route('admin.product-type.store') }}" method="post">
            @csrf
            <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
                <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">Formulário de Cadastro</h3>
                <div class="form-group g-mb-30">
                    <label class="g-mb-10" for="inputGroup-1_1">Nome</label>

                    <div class="g-pos-rel">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                            <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                            </span>
                        <input name="name" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Nome do tipo de produto">
                    </div>
                </div>
            </div>

            <div class="media">
                <div class="media-body align-self-center text-right">
                    <button class="btn btn-xl u-btn-secondary g-width-160--md g-font-size-default g-ml-10" type="submit">Cadastrar</button>
                </div>
            </div>

        </form>
    </div>


@endsection
