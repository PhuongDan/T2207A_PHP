<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){

        //lay san pham trong db
        $new_products = Products::orderBy("id","desc")->limit(6)->get();
        $new_categories = Category::limit(10)->get();
        $new_productss =Products::limit(12)->get();
        return view("welcome",
        ["new_products"=>$new_products,
            "categories"=>$new_categories,
            "new_productss"=>$new_productss
        ]);



    }
    public function shop(){
        return view("shop");
    }

}
