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
                            <h3> {{ $product->nome }}</h3>
                            <h4>description : {{ $product->description }}</h4>
                            <div class="mt-3 d-flex justify-content-between ">
                                <span class="btn btn-primary  p-3">{{ $product->prezzo }}</span>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
