<div id="headerpage" class="container">
    <div class="d-flex justify-content-between mt-3">
        <div>
            <img src="{{Vite::asset('resources/img/logo1.png')}}" alt="logo" class="logo1">
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
                <li><a href="">Decorazioni casa</a></li>
                <li><a href="">Ghirlande</a></li>
                <li><a href="">Luci</a></li>
                <li><a href="">Decorazioni alberi</a></li>
                <li><a href="">Alberi di natale</a></li>
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
