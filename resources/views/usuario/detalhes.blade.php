@extends('layout/principal')

@section('conteudo')
<form action="{{action('UsersController@altera', $usuario->id)}}" method="post">
   <!-- no lavarel, ele envia um token na visualização, e espera receber este token de volta ao enviar, para segurança -->
   <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

   <div class="form-group">
      <label for="">Nome</label>
      <input name="name" type="text" class="form-control" value="{{ $usuario->name }}">
   </div>

   <div class="form-group">
      <label for="">E-mail</label>
      <input name="email" type="email" class="form-control" value="{{ $usuario->email }}">
   </div>

   <div class="form-group">
      <label for="">Senha</label>
      <input name="password" type="password" class="form-control" value="{{ $usuario->password }}">
   </div>

   <button type="submit" class="btn btn-primary btn-block">Alterar</button>

</form>

@stop