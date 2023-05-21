<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\Product as ProductResource;

class ProductsController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $req)
    {
        Product::create([
            "name" => $req->name,
            "price" => $req->price
        ]);

        return response(["OK", 200]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return new ProductResource($product);
    }

    public function update(Request $req)
    {
        $product = Product::find($req->id);
        $product->name = $req->name;
        $product->price = $req->price;
        $product->save();
        return response(["Tudo certo!", 200]);
    }

    public function delete(Request $req)
    {
        $product = Product::find($req->id);
        $product->delete();
        return response(["Produto apagado", 200]);
    }
}
