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
    public function search(Request $request){
        $q = $request->get("q");
        $limit = $request->has("limit")?$request->get("limit"):18;
        $categories = Category::limit(10)->get();
        $products = Products::where("name",$q)->paginate(18);
        $products = Products::where("name",'like',"%$q%")->paginate($limit);
        return view("search",
            [
                "categories"=>$categories,
                "products"=>$products
            ]);
    }
    public function shop(){
        return view("shop");
    }
    public function category(Category $category){
//        $category = Category::findOfFail($id);
//        if ($category==null){
//            return abort(404);
//        }
//        $category = Category::findOfFail($id);
        $products = Products::where("category_id",$category->id)->paginate(18);
        $categories = Category::limit(10)->get();
        return view("category",
        [
            "category"=>$category,
            "products"=>$products,
            "categories"=>$categories]
        );
    }

}
