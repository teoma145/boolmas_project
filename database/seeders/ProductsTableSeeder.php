<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //le variabili che conterranno gli array
        $trees = config("db_tree.tree");
        //$lights= config("db_light.light");
        $ghirlande = config("db_ghirlande.ghirlande");
        $tree_decorations = config("db_tree_decoration.decoro_albero");
        $home_decorations = config("db_decoro_casa.decoro_casa");

        //ciclo sull'array degli alberi
        // foreach ($trees as $tree) {
        //     $new_tree = new Product();
        //     $new_tree->nome = $tree['nome'];
        //     $new_tree->prezzo = $tree['prezzo'];
        //     $new_tree->category = $tree['category'];
        //     $new_tree->img = $tree['img'];
        //     $new_tree->save();
        // }
        //ciclo sull'array delle luci (non ancora pronto)
        // foreach ($lights as $light) {
        //     $new_light= new Product();
        //     $new_light->nome= $light['nome'];
        //     $new_light->prezzo= $light['prezzo'];
        //     $new_light->category= $light['category'];
        //     $new_light->img= $light['img'];
        //     $new_light->save();
        // }
        //ciclo sull'array delle ghirlande
        foreach ($ghirlande as $ghirlanda) {
            $new_ghirlanda = new Product();
            //dd($new_ghirlanda);
            $new_ghirlanda->nome = $ghirlanda['nome'];
            $new_ghirlanda->prezzo = $ghirlanda['prezzo'];
            $new_ghirlanda->category = $ghirlanda['category'];
            $new_ghirlanda->img = $ghirlanda['img'];
            $new_ghirlanda->save();
        }
        //ciclo sull'array delle decorazioni degli alberi
        // foreach ($tree_decorations as $tree_decoration) {
        //     $new_tree_decoration = new Product();
        //     $new_tree_decoration->nome = $tree_decoration['nome'];
        //     $new_tree_decoration->prezzo = $tree_decoration->prezzo;
        //     $new_tree_decoration->category = $tree_decoration['category'];
        //     $new_tree_decoration->img = $tree_decoration['img'];
        //     $new_tree_decoration->save();
        // }
        //ciclo sull'array delle decorazione della casa
        foreach ($home_decorations as $home_decoration) {
            $new_home_decoration = new Product();
            $new_home_decoration->nome = $home_decoration['nome'];
            $new_home_decoration->prezzo = $home_decoration['prezzo'];
            $new_home_decoration->category = $home_decoration['category'];
            $new_home_decoration->img = $home_decoration['img'];
            $new_home_decoration->save();
        }


    }
}
