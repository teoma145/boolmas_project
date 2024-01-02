<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function home()
    {
        $products = Product::All();
        // dd($products);

        return view("home", compact("products"));
    }
    public function alberiDiNatale()
    {
        $products = Product::where('category', 'green tree')->get();
        // dd($products);

        return view("alberi_di_natale.index", compact("products"));
    }
    public function ghirlande()
    {
        $products = Product::where('category', 'ghirlande')->get();
        // dd($products);

        return view("ghirlande.index", compact("products"));
    }
    public function decoroAlbero()
    {
        $products = Product::where('category', 'decorazioni albero')->get();
        // dd($products);

        return view("decoro_albero.index", compact("products"));
    }
    public function luci()
    {
        $products = Product::where('category', 'luci')->get();
        // dd($products);

        return view("luci.index", compact("products"));
    }

    public function luciShow()
    {
        $products = Product::where('category', 'luci')->get();
       //dd($products);

        return view("luci.show", compact("products"));
    }
    public function decoriCasa()
    {
        $products = Product::where('category', 'decorazioni casa')->get();
        // dd($products);

        return view("decori_casa.index", compact("products"));
    }
}
