@extends('admin.layouts.table')

@section('title', 'Gerenciamento de Conteúdos')


@section('breadcrump')

    <div class="g-hidden-sm-down g-bg-gray-light-v8 g-pa-20">
        <ul class="u-list-inline g-color-gray-dark-v6">

            <li class="list-inline-item g-mr-10">
                <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle" href="{{ route('admin.dashboard') }}">Admin</a>
                <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
            </li>

            <li class="list-inline-item">
                <span class="g-valign-middle">Conteúdos</span>
            </li>
        </ul>
    </div>

@endsection

@section('content')

    <div class="g-pa-20">
        <div class="media">
            <div class="d-flex align-self-center">
                <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">Lista de Conteúdos</h1>
            </div>

            <div class="media-body align-self-center text-right">
                <a class="btn btn-xl u-btn-secondary g-width-160--md g-font-size-default g-ml-10" href="{{ route('admin.plan-payment-type.create')}}">Adicionar novo
                </a>
            </div>
        </div>

        <hr class="d-flex g-brd-gray-light-v7 g-my-30">

        <div class="table-responsive g-mb-40">
            @include('admin.includes.alerts')
            <table class="table u-table--v3 g-color-black">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Status</th>
                    <th>Visualizações</th>
                    <th>Criado em</th>
                    <th>Alterado em</th>
                    <th>Actions</th>
                </tr>
                </thead>
                @if (count($contents))
                <tbody>
                    @foreach($contents as $content)
                    <tr>
                        <td>{{ $content->id }}</td>
                        <td>{{ $content->title }}</td>
                        <td>
                            @if($content->status == 1)
                                <span class="u-tags-v1 text-center g-width-110 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-weight-400 g-color-white g-rounded-50 g-py-4 g-px-15">Online</span>
                            @else
                                <span class="u-tags-v1 text-center g-width-110 g-brd-around g-brd-primary g-bg-primary g-font-weight-400 g-color-white g-rounded-50 g-py-4 g-px-15">Offline</span>
                            @endif
                        </td>
                        <td>{{ $content->views }}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($content->created_at))}}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($content->updated_at)) }}</td>
                        <td>
                            <div class="g-pos-rel g-top-3 d-inline-block">
                                <a class="u-link-v5 g-color-gray-light-v6 g-color-secondary--hover g-mr-15" href="{{ route('admin.content.edit', $content->slug) }}">
                                    <i class="hs-admin-pencil g-font-size-18"></i>
                                </a>

                                <a class="u-link-v5 g-color-gray-light-v6 g-color-secondary--hover" href="{{ route('admin.content.destroy', $content->slug) }}">
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
                        <td colspan="7">Nenhum registro</td>
                    </tr>
                </tbody>
                @endif
            </table>
        </div>

    </div>


@endsection
