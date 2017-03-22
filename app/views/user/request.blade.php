@extends("user.layout")
@section("content")
	{{ Form::open() }}
		<div class="form-group">
			<label class="control-label">E-mail</label>
			<input id="email" class="form-control" type="text" name="email" value="" required="" title="Insira seu e-mail" placeholder="exemplo@fortaleza.ce.gov.br" />
			<span class="help-block small">Seu e-mail institucional</span>
		</div>

		<div class="checkbox">
			<button class="btn btn-pmf btn-block">Enviar</button>
		</div>
	{{ Form::close() }}
@stop