@extends('layouts.app')

@section('title', 'Decorazioni Alberi ')

@section('content')
    <main>

        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-4">
                        <div class="card">
                            <img src="{{ $product->img }}" class="card-img-top" alt="{{ $product->nome }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->nome }}</h5>
                                <p class="card-text">{{ $product->prezzo }}</p>
                                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>

@endsection
