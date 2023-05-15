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
        $categories = Category::limit(10)->get();
       $products = Products::paginate(12);
        return view("welcome",
        ["new_products"=>$new_products,
            "categories"=>$categories,
          "products"=>$products
        ]);



    }
    public function search(){
        $categories = Category::limit(10)->get();
        $products = Products::paginate(18);
        return view("search",
            [
                "categories"=>$categories,
                "products"=>$products
            ]);
    }
    public function shop(){
        return view("shop");
    }

}
