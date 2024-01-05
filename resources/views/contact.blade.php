@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <main>

        <div class="container">

            <h2 class="text-center my-5"> Contattaci</h2>
            <form class="row g-3">
                <div class="col-4">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-10">
                    <div class="input-group">
                        <span class="input-group-text">Scrivi un breve messaggio:</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-danger">Invia</button>
                </div>
            </form>
        </div>
    </main>

@endsection
