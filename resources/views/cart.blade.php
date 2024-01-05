@extends('layouts.app')

@section('title', 'cart')

@section('content')
    <table id="cart" class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(session('cart'))
                @foreach (session('cart') as $id => $details)
                    <tr rowId='{{$id}}'>
                        <td data-th='Product'>
                            <div class="row">
                                <div class="col-sm-9">
                                    <h4 class="nomargin">
                                        {{ $details['name'] }}
                                    </h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">${{ $details['price'] }}</td>
                        <td data-th="Total" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                        <td class="actions">
                            <a href="" class="btn btn-outline-danger btn-sm delete-product"><i
                                    class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <a href="{{ route('clear.cart') }}" class="btn btn-danger">Svuota Carrello</a>
@endsection
