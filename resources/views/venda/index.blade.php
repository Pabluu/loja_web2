@extends('templates.main')

@section('titulo', 'Venda')

@section('formulario')
<form action="/venda" method="post" class='row  mt-4'>
    <div class="col-6 form-group">
        <select name='cliente_id' id="" class="form-control selectpicker" data-live-search='true'>
            <option value=""></option>
            @foreach($clientes as $cliente)
            <option value=" {{$cliente->id}}" @selected($venda->cliente_id == $cliente->id)>
                {{$cliente->nome}}
            </option>
            @endforeach
        </select>
    </div>
    <div class="col-6 form-group">
        @csrf
        <input type='hidden' name='id' value="{{$venda->id}}" />
        <button class="btn btn-success">
            <i class="bi bi-save">  Salvar Venda</i> 
        </button>

        @if($venda->id != '')
        <a href="/venda/{{$venda->id}}/item/ " class='btn btn-primary'>
            <i class="bi bi-plus-square"></i>Adicionar Item
        </a>
        @endif
    </div>
</form>

@endsection

@section('tabela')
@endsection