<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        return Product::all();
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max: 40',
            'category_id' => 'required|integer',
            'size_id' => 'required|integer',
            'price' => 'required',
        ]);

        $product =  new Product;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->category_id = $request->category_id;
        $product->size_id = $request->size_id;
        $product->price = $request->price;
        $product->save();
        return response()->json(['message' => 'product stored successfully','response' => $product],200);
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'name' => 'required|max: 40',
            'category_id' => 'required|integer',
            'size_id' => 'required|integer',
            'price' => 'required|number',
        ]);

        $product =   Product::findOrFail($id);
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->category_id = $request->category_id;
        $product->size_id = $request->size_id;
        $product->price = $request->price;
        $product->save();
        return response()->json(['message' => 'product Updated successfully','response' => $product],200);
    }

    public function destory(Request $request,$id){
        $this->validate($request,[
            'name' => 'required|max: 40',
            'category_id' => 'required|integer',
            'size_id' => 'required|integer',
            'price' => 'required|number',
        ]);

        $product =   Product::findOrFail($id);
        $product->delete();
        return response()->json('product Deleted successfully',200);
    }

}
