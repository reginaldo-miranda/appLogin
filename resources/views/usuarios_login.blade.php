@extends('layouts.app') 

@section('conteudo')

	<div id="imagem">

		<img src="{{asset('imagens/cadeado.png')}}">
		
	</div>

    <div class='row'>
    	<dir class="col-md-4">
    		<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default">Enviar</button>
			</form>
    		
    	</dir>
    	
    </div>


@endsection