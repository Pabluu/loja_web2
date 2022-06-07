@extends('templates.main')

@section('titulo', 'Listagem de Venda')

@section('tabela')
<br>
<div class="row">
    <div class="col-10 form-group">
        <input type="text" name='q' placeholder='Buscar...' class="form-control">
    </div>

    <div class="col-2 form-group">
        <a href="/venda/create" class="btn btn-primary" style='float: right'>
            <i class="bi bi-plus-square">Nova Venda</i>
        </a>
    </div>
</div>

<table id="tabVendas" class="table table-striped">

    <colgroup>
        <col width='50'>
        <col width='80'>
        <col width='120'>
        <col width='50'>
        <col width='50'>
        <col width='50'>
    </colgroup>

    <thead>
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Cliente</th>
            <th>Total</th>
            <th></th>
            <th></th>
        </tr>

    </thead>

    <tbody>
        @foreach($vendas as $venda)
        <tr>
            <td>{{$venda->id}}</td>
            <td>{{$venda->data}}</td>
            <td>{{$venda->cliente}}</td>
            <td class='td_preco'>{{number_format($venda->total, 2)}}</td>
            <td>
                <a href="/venda/{{$venda->id}}/edit" class='btn btn-warning'>
                    <i class="bi bi-pencil-square"></i>  Editar
                </a>
            </td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        $(".td_preco").mask("#.#00,00", {
            reverse: true
        });
    });
</script>