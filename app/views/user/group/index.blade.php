@extends("layout")

@section("filtros")
    <form>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Protocolo</label>
                <input id="numero_protocolo" class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="numero_protocolo" ng-model="search.numero_protocolo" placeholder="Número do Protocolo" aria-invalid="false" type="text">
            </div>
            <div class="form-group col-md-4">
                <label>Protocolo</label>
                <input id="numero_protocolo" class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="numero_protocolo" ng-model="search.numero_protocolo" placeholder="Número do Protocolo" aria-invalid="false" type="text">
            </div>
            <div class="form-group col-md-4">
                <label>Protocolo</label>
                <input id="numero_protocolo" class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="numero_protocolo" ng-model="search.numero_protocolo" placeholder="Número do Protocolo" aria-invalid="false" type="text">
            </div>
        </div>
    </form>
@stop

@section("content")

    @if (count($list))
        <table>
            <tr>
                <th>name</th>
            </tr>
            @foreach ($list as $group)
                <tr>
                    <td>{{ $group->name }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>There are no groups.</p>
    @endif
    
@stop