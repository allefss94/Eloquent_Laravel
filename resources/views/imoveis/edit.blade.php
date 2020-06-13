@extends('shared.base')

@section('content')

@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
        {{$error}}
        <br>
    @endforeach
</div>
@endif

<div class="card ">
    <div class="card-header bg-dark text-white text-center">
        <h3>Cadastre o Imóvel</h3>
    </div>

    <div class="card-body">

        <form action="{{ route ('imoveis.update', $imovel->id) }}" method="post">
            @method('PUT')
            {!! csrf_field() !!}
            <h4>Dados do imóvel</h4>
            <hr>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" class="form-control" placeholder="Descrição" required value="{{$imovel->descricao}}">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="preco">Preço</label>
                        <input type="text" name="preco" id="" class="form-control" required value="{{$imovel->preco}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="qntQuartos">Quantidade de Quartos</label>
                    <input type="number" name="qtnQuartos" id="" class="form-control" required value="{{$imovel->qtnQuartos}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tipo">Tipo do imóvel</label>
                        <select name="tipo" id="" class="form-control" required>
                            <option value="apartamento">Apartamento</option>
                            <option value="casa">Casa</option>
                            <option value="kitnet">Kitnet</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="finalidade">Finalidade</label>
                        <select name="finalidade" id="" class="form-control" required>
                            <option value="venda">Venda</option>
                            <option value="aluguel">Aluguel</option>
                        </select>
                    </div>
                </div>
            </div>
            <h4>Endereço</h4>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="logradouroEndereco">Logradouro</label>
                        <input type="text" name="logradouroEndereco" id="" class="form-control" required value="{{$imovel->logradouroEndereco}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="bairroEndereco">Bairro</label>
                    <input type="text" name="bairroEndereco" id="" class="form-control" required value="{{$imovel->bairroEndereco}}">
                </div>
                <div class="col-md-4">
                    <label for="numeroEndereco">Numero</label>
                    <input type="number" name="numeroEndereco" placeholder="Numero" class="form-control" required value="{{$imovel->numeroEndereco}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidadeEndereco" placeholder="Cidade" class="form-control" required value="{{$imovel->cidadeEndereco}}">
                </div>
                <div class="col-md-6">
                    <label for="cepEndereco">Cep</label>
                    <input type="text" name="cepEndereco" placeholder="Cep" class="form-control" required value="{{$imovel->cepEndereco}}">
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                <button class="btn btn-primary" type="submit">Atualizar</button>
            </div>
        </form>

    </div>
</div>

@endsection
