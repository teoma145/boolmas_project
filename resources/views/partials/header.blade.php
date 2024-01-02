<div id="headerpage" class="container">
    <div class="d-flex justify-content-between mt-3">
        <div>
            <a href="{{route('home')}}"><img src="{{Vite::asset('resources/img/logo1.png')}}" alt="logo" class="logo1"></a>
        </div>
        <div class="mt-5">
            <span><a href="">HOME</a></span>
            <span><a href="">CHI SIAMO</a></span>
            <span><a href="">CONTATTI</a></span>
            <span><a href=""><i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i></a></span>
            <span><a href=""><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></a></span>
        </div>
    </div>
    <hr>
    <div class="bg-white">
        <div class="container">
            <ul class="d-flex list-unstyled fs-4 justify-content-between ">
                <li><a href="{{route('decori_casa.index')}}">Decorazioni casa</a></li>
                <li><a href="{{route('ghirlande.index')}}">Ghirlande</a></li>
                <li><a href="{{route('luci.index')}}">Luci</a></li>
                <li><a href="{{route('decoro_albero.index')}}">Decorazioni alberi</a></li>
                <li><a href="{{route('alberi_di_natale.index')}}">Alberi di natale</a></li>
            </ul>
        </div>
    </div>
</div>
<script>
    window.onscroll = function() {
        var navbar = document.querySelector(".bg-white");
        var currentScrollPos = window.pageYOffset;

        if (currentScrollPos > 200) {

            navbar.classList.add("fixed-top");
        }
        else {
            navbar.classList.remove("fixed-top");
        }
    }
</script>
