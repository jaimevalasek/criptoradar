@extends('admin.layouts.table')

@section('title', 'Gerenciamento de Content Types')

@section('breadcrump')

    <div class="g-hidden-sm-down g-bg-gray-light-v8 g-pa-20">
        <ul class="u-list-inline g-color-gray-dark-v6">

            <li class="list-inline-item">
                <span class="g-valign-middle">Dashboard</span>
            </li>
        </ul>
    </div>

@endsection

@section('content')

<h1>Painel de administração</h1>

<a href="{{ route('admin.logout') }}">Logout</a>

@endsection
