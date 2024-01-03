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

        return view("home", compact("products", "title"));
    }
    public function prodotto($id)
    {
        $product = Product::findOrFail($id);
        // dd($products);

        return view("products.show", compact("product"));
    }
    public function alberiDiNatale()
    {
        $products = Product::where('category', 'green tree')->get();
        $title = 'Alberi di Natale';
        // dd($products);

        return view("products.index", compact("products", "title"));
    }
    public function ghirlande()
    {
        $products = Product::where('category', 'ghirlande')->get();
        $title = 'Ghirlande';
        // dd($products);

        return view("products.index", compact("products", "title"));
    }
    public function decoroAlbero()
    {
        $products = Product::where('category', 'decorazioni albero')->get();
        $title = 'Decoro Albero';
        // dd($products);

        return view("products.index", compact("products", "title"));
    }
    public function luci()
    {
        $products = Product::where('category', 'luci')->get();
        // dd($products);
        $title = 'Luci';

        return view("products.index", compact("products", "title"));
    }
    public function decoriCasa()
    {
        $products = Product::where('category', 'decorazioni casa')->get();
        $title = 'Decori per la Casa';
        // dd($products);

        return view("products.index", compact("products", "title"));
    }

    // public function luciShow()
    // {
    //     $products = Product::where('category', 'luci')->get();
    //     //dd($products);

    //     return view("luci.show", compact("products"));
    // }
}
