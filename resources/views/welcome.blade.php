@extends('shared.base')

@section('content')

<div class="card">
    <div class="card-body">
        @foreach ($imoveis as $imovel)
            <ul>
                <li>{{$imovel}}</li>
            </ul>
        @endforeach
    </div>
</div>

@endsection