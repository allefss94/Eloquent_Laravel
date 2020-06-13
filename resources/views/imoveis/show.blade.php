@extends('shared.base')

@section('content')

    <div class="card">
        <div class="card-header text-light bg-dark">
            Detalhes do Imóvel
        </div>

        <div class="card-body bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h4>Sobre o imóvel</h4>
                    
                    <p>Descrição: {{$imovel->descricao}}</p>
                    <p>Preço: R$ {{number_format($imovel->preco, 2, ',', '.') }}</p>
                    <p>Quantidade de Quartos: {{$imovel->qtnQuartos}}</p>
                    <p>Tipos: {{$imovel->tipo}}</p>
                    <p>Finalidade: {{$imovel->finalidade}}</p>
                    <hr>
                    <h4>Endereço</h4>
                    <p>Logradouro: {{$imovel->logradouroEndereco}}</p>
                    <p>Bairro: {{$imovel->bairroEndereco}}</p>
                    <p>Número: {{$imovel->numeroEndereco}}</p>
                    <p>CEP: {{$imovel->cepEndereco}}</p>
                    <p>Cidade: {{$imovel->cidadeEndereco}}</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{url()->previous()}}" class="btn btn-outline-primary">Voltar</a>
        </div>
    </div>

@endsection