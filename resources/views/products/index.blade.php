@extends('layouts.app')

@section('title', $title)

@section('content')
    <main>

        <div class="container">
            <h2>

                    @if(session('success'))
                    <div class="alert alert-success">

                        {{ session('success') }}
                    </div>
                    @endif

            </h2>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-4">
                        <div class="card">
                            <a href="{{ route('prodotto.show', $product->id) }}"><img src="{{ $product->img }}"
                                    class="card-img-top" alt="{{ $product->nome }}"></a>

                            <div class="card-body">
                                <h5 class="card-title">{{ $product->nome }} </h5>
                                <p class="card-text">{{ $product->prezzo }} euro</p>
                                <a href="{{ route('addproduct.to.cart', $product->id) }}" class="btn btn-primary">Aggiungi al carrello</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>

@endsection
