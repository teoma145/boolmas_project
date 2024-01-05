@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <main>

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h2 class="text-center my-5"> Contattaci</h2>
                    <form class="row g-3">
                        <div class="col-12">
                            <label for="inputName" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="inputName">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <span class="input-group-text">Scrivi un breve messaggio:</span>
                                <textarea class="form-control" aria-label="With textarea" rows="10"></textarea>

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
            </div>


        </div>
    </main>

@endsection
