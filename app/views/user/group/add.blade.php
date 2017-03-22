@extends("layout")
@section("content")

    {{ Form::open(["url" => "groups", "autocomplete" => "off" ]) }}

        {{ Form::field([
            "name"        => "name",
            "label"       => "Name",
            "form"        => $form,
            "placeholder" => "new group"
        ])}}

        {{ Form::submit("save") }}

    {{ Form::close() }}
@stop

@section("footer")
    @parent
    <script src="//polyfill.io"></script>
@stop