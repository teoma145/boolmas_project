@extends('layouts.app')

@section('title', 'Alberi di natale')

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
                                <a href="prodotto/{{ $product->id }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>

@endsection