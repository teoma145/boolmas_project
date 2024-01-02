@extends('layouts.app')

@section('title', 'Luci')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 m-4">
                    {{-- @foreach ($products as $key => $product)
                    <div class="col-4">
                        <div class="card">
                            <a href="{{ route ('luci.show', $key)}}"><img src="{{ $product->img }}" class="card-img-top" alt="{{ $product->nome }}"></a>

                            <div class="card-body">
                                <h5 class="card-title">{{ $product->nome }} </h5>
                                <p class="card-text">{{ $product->prezzo }} euro</p>
                                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                            </div>
                        </div>
                    </div>
                @endforeach --}}

                    <div class="d-flex flex-row">
                        <img src="{{ $products[0] -> img }}" alt="{{ $products[0] -> nome }}" >
                        <div class="d-flex flex-column px-4 text-uppercase opacity-75 ">
                            <h3 > {{ $products[0] -> nome }}</h3>
                            <h4 >description : {{ $products[1] -> description }}</h4>
                            <div class="mt-3 d-flex justify-content-between ">
                                <span class="btn btn-primary  p-3">{{ $products[0] -> prezzo }}</span>


                            </div>
                     </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
