@extends('templates.main')

@section('titulo', 'Venda')

@section('formulario')
<form action="/venda" method="post" class='row'>
    <div class="col-6 form-group">
        <select name="cliente" id="" class="form-control selectpicker" data-live-search='true'>
            <option value=""></option>
            @forearch($clientes as $cliente)
                <option value=" {{$cliente->id}}">
                    {{$cliente->nome}}
                </option>
            @endforeach
        </select>
    </div>
</form>

@endsection

@section('tabela')
@endsection