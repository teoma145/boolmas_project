@extends('layouts.app')

@section('title', $product->nome)

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 m-4">
                    <div class="d-flex flex-row">
                        <img src="{{ $product->img }}" alt="{{ $product->nome }}">
                        <div class="d-flex flex-column px-4 text-uppercase opacity-75 ">
                            <h3 class="mb-5"> {{ $product->nome }}</h3>
                            <h4 class="mb-1">Descrizione : </h4>
                            <p class="mb-5">{{ $product->description }}</p>
                            <div class="mt-3 d-flex justify-content-between ">
                                <span class="btn btn-danger  p-3">{{ $product->prezzo }} &euro; </span>


                            </div>
                            <a href="{{ route('addproduct.to.cart', $product->id) }}" class="btn btn-danger mt-5">Aggiungi al
                                carrello</a>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
