@extends('layout.main')

@section('content')
    <h3>Cadastro de Usuário</h3>
    <form action="{{ url('user') }}" method="POST">
        @include('user.partials._form')
    </form>
@stop

