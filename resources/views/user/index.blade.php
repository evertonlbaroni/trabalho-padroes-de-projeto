@extends('layout.main')

@section('content')
    <h2>Usuários</h2>
   <table style="width: 100%" border="1">
       <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Opções</th>
            </tr>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                @endforeach
            </tbody>
       </thead>
   </table>
    <br>
    <hr>
    <br>
    <a href="/user/create">Cadastrar Usuário</a>
@stop
