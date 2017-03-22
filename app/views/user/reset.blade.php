@extends("user.layout")
@section("content")
	{{ Form::open() }}
		<div class="form-group">
			<label class="control-label" for="j_username">Senha</label>
			<input id="password" class="form-control" type="text" name="password" value="" required="" title="Senha" placeholder="*********" />
			<span class="help-block small">Nova Senha</span>
		</div>

		<div class="form-group">
			<label class="control-label" for="j_username">Confirmar Senha</label>
			<input id="password_confirmation" class="form-control" type="text" name="password_confirmation" value="" required="" title="Confirmar Senha" placeholder="*********" />
			<span class="help-block small">Confirmar Senha</span>
		</div>

		<div class="checkbox">
			<button class="btn btn-pmf btn-block">Enviar</button>
		</div>
	{{ Form::close() }}
@stop