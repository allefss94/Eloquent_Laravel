@extends('shared.base')

@section('content')

<div class="card ">
    <div class="card-header bg-dark text-white text-center">
        <h3>Cadastre o Imóvel</h3>
    </div>

    <div class="card-body">

        <form action="{{ route ('imoveis.store') }}" method="post">


            <h4>Dados do imóvel</h4>
            <hr>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" class="form-control" placeholder="Descrição" required>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="preco">Preço</label>
                        <input type="text" name="preco" id="" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="qntQuartos">Quantidade de Quartos</label>
                    <input type="number" name="qtdQuartos" id="" class="form-control" required>
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
                        <input type="text" name="logradouroEndereco" id="" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="bairroEndereco">Bairro</label>
                    <input type="text" name="bairroEndereco" id="" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="numeroEndereco">Numero</label>
                    <input type="number" name="numeroEndereco" placeholder="Numero" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidadeEndereco" placeholder="Cidade" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="cepEndereco">Cep</label>
                    <input type="text" name="cepEndereco" placeholder="Cep" class="form-control" required>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </div>
        </form>

    </div>
</div>

@endsection
