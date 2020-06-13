@extends('shared.base')

@section('content')

    <div class="card">
        <div class="card-header bg-dark text-light">
            <h3>Lista de Imoveis</h3>
        </div>
        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-12">
                <form action="{{route('imoveis.index', 'busca')}}" method="get">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="busca" placeholder="Pesquisar por Cidade">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <th>Descrição</th>
                    <th>Cidade</th>
                    <th>Preço</th>
                    <th>Finalidade</th>
                    <th>Tipo</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($imoveis as $imovel)
                        <tr>
                            <td>{{$imovel->descricao}}</td>
                            <td>{{$imovel->cidadeEndereco}}</td>
                            <td>{{$imovel->preco}}</td>
                            <td>{{$imovel->finalidade}}</td>
                            <td>{{$imovel->tipo}}</td>
                            <td>
                                <a href="{{ route('imoveis.edit', $imovel->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="{{ route('imoveis.remove', $imovel->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                <a href="{{ route ('imoveis.show', $imovel->id) }}"><i class="fa fa-search-plus" aria-hidden="true" alt="Ver Detalhes"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-center">
            <a href="{{route('imoveis.create')}}" class="btn btn-primary">Adicionar Novo imovel</a>
        </div>
        <div class="row justify-content-center">
            {{$imoveis->links()}}
        </div>
    </div>

@endsection