<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        //["products"=>$products]
        return view("products.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // prendo i dati del form
            $data = $request->all();
        // dd($request->all());
        //inserisco un nuovo record nella tabelle

            $newProduct = new Product();
            $newProduct->name = $data["name"];
            $newProduct->type = $data["type"];
            $newProduct->cooking_time = $data["cooking_time"];
            $newProduct->weight = $data["weight"];
            $newProduct->description = $data["description"];

           if( !empty($data['image'] ) ){
            $newProduct->image = $data["image"];
           }
            $newProduct->save();// E qui  che avviene l'insert 
        // restituisco una pagina 
            return redirect()->route('products.show',$newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //SELECT * FROM products WHERE id = x
        // $product = Product::find($id);
        
        return view("products.show", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // recupero la risorsa che voglio modificare 
        // dd($product);
        //restituisco il form per l'editing di questa risorsa

        return view("products.edit" ,compact("product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // prendo tutti i dati del form
        $data = $request->all();
        // aggiorno la risorsa con i  nuovi dati
        $product->name = $data["name"];
        $product->type = $data["type"];
        $product->cooking_time = $data["cooking_time"];
        $product->weight = $data["weight"];
        $product->description = $data["description"];

       if( !empty($data['image'] ) ){
        $product->image = $data["image"];
       }
        $product->save();
        //restituisco la pagina show della risorsa modificata
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();

        return redirect()->route("products.index");
    }
}
