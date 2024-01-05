@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100"
                        src="https://christmastheoriginal.it/wp-content/uploads/2022/08/Alberi-di-Natale-Originali-1024x682.jpg"
                        alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-1">Luci</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://www.produceshop.it/blog/wp-content/uploads/2022/11/MicrosoftTeams-image-10-930x620.jpg"
                        alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-1">Alberi di natale</h5>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://www.aranzulla.it/wp-content/contenuti/2018/01/chrsudh-1200x628.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-1">Decorazioni</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container mt-5 mb-5">
            <h2 class="text-center mb-4 text-danger ">I più popolari</h2>
            <div class="row">
                @foreach ($products->groupBy('category') as $category => $categoryProducts)
                    @foreach ($categoryProducts->take(2) as $product)
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card ">
                                <a href="{{ route('prodotto.show', $product->id) }}"><img src="{{ $product->img }}"
                                        class="card-img-top" alt="{{ $product->nome }}"></a>
                                <p>{{ $product->nome }} - Prezzo: {{ $product->prezzo }}</p>
                                <div class="bg-danger p-1 w-50 ">
                                    <a href="{{ route('prodotto.show', $product->id) }}"
                                        class="text-decoration-none text-black ">Scopri di più</a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </main>

@endsection
