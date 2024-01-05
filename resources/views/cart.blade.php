@extends('layouts.app')

@section('title', 'cart')

@section('content')
    <div class="container">

        @if (session('cart'))

            <table id="cart" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Prodotti</th>
                        <th>Prezzi</th>
                        <th>Totale</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach (session('cart') as $id => $details)
                        <tr rowId='{{ $id }}'>
                            <td data-th='Product'>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">
                                            {{ $details['name'] }}
                                        </h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">&euro;{{ $details['price'] }}</td>
                            <td data-th="Total" class="text-center">&euro;{{ $details['price'] * $details['quantity'] }}</td>
                            <td class="actions">
                                <a href="" class="btn btn-outline-danger btn-sm delete-product"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col p-5">
                        <h2 class="p-5 text-center">Il carrello è vuoto</h2>
                    </div>
                </div>
            </div>

        @endif



        <a href="{{ route('clear.cart') }}" class="btn btn-danger">Svuota Carrello</a>
    </div>

@endsection
