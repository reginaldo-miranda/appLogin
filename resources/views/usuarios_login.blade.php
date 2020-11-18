
@extends('layouts.app') 

@section('conteudo')

	<div id="imagem">

		<img src="{{asset('imagens/cadeado.png')}}">
		
	</div>

    <div class='row'>
    	<dir class="col-md-4 offset-4">
    		{{-- erros (validacao) --}}

    		@include('inc.erros')	


    		<form method="post" action="/usuarios_fazer_login">

    		 {{ csrf_field()}} 

			  <div class="form-group">
			    <label for="id_usuarios">Email</label>
			    <input type="text" class="form-control" id="id_usuarios" name="text_usuario" placeholder="Usuario:">
			  </div>
			  <div class="form-group">
			    <label for="id_senha">Senha</label>
			    <input type="password" class="form-control" id="id_senha" name="text_senha" placeholder="Password:">
			  </div>
			  <button type="submit" class="btn btn-primary">login</button>
			</form>
    		   <a href="/inserir_usuario">Criar nova conta..</a>
    	</dir>

    	
    </div>


@endsection