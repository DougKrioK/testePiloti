@extends('layout/principal')

@section('conteudo')
<form action="/usuarios/adiciona" method="post">
   <!-- no lavarel, ele envia um token na visualização, e espera receber este token de volta ao enviar, para segurança -->
   <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

   <div class="form-group">
      <label for="">Nome</label>
      <input name="name" type="text" class="form-control" value="{{ old('nome') }}">
   </div>

   <div class="form-group">
      <label for="">E-mail</label>
      <input name="email" type="email" class="form-control" value="{{ old('email') }}">
   </div>

   <div class="form-group">
      <label for="">Senha</label>
      <input name="password" type="password" class="form-control" value="">
   </div>

    <div class="form-group">
      <label>Categoria</label>
      <select name="categoria_id" class="form-control">
          @foreach($categorias as $c)
          <option value="{{$c->id}}">{{$c->nome}}</option>
          @endforeach
      </select>    
    </div>

   <button type="submit" class="btn btn-primary btn-block">Adicionar</button>

</form>

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@stop