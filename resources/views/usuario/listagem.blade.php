@extends('layout/principal')

@section('conteudo')

<h1>Listagem de usuarios</h1>
<table class="table table-striped table-bordered table-hover">
  @foreach ($usuarios as $u)

  @if ($u->ativo == 0)
  <tr>
    <td><del>{{ $u->name }}</del></td>
    <td><del>{{ $u->email }}</del></td>
    <td></td>
    <td></td>
  </tr>
  @else
  <tr>
    <td>{{ $u->name }}</td>
    <td>{{ $u->email }}</td>
    <td><a href="{{action('UsersController@mostra', $u->id)}}">Visualizar</a></td>
    <td><a href="{{action('UsersController@remove', $u->id)}}">Remover</a></td>
  </tr>
  @endif
  
  @endforeach
</table>

@stop