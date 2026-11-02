<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\categories;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataproducts = Product::all();
        return view('product.index', compact('dataproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datacategories = categories::all();
        return view('product.create', compact('datacategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            'name'=> 'required',
            'categories_id'=> 'required',
            'price'=> 'required',
            'stock'=> 'required',
            'image'=> 'nullable|image|mimes:png,jpg|max:2080',
            'description'=> 'nullable',
            'status'=> 'required'
        ]);
        // klo yg categories ambil dari isi field di heidi sql dan namanya disesuaikan di create.blade.php
        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('products', 'public');
        }
        Product::create([
            'name' => $request->name,
            'categories_id' => $request->categories_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $image,
            'description' => $request->description,
            'status' => $request->status
        ]);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataeditproduct = Product::find($id);
        $datacategories = categories::all();
        return view('product.edit', compact('dataeditproduct', 'datacategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required|string|max:100',
            'categories_id'=> 'required',
            'price'=> 'required|integer',
            'stock'=> 'required|integer',
            'image'=> 'nullable|image|mimes:png,jpg|max:2080',
            'description'=> 'nullable',
            'status'=> 'required'
        ]);
        // klo yg categories ambil dari isi field di heidi sql dan namanya disesuaikan di create.blade.php
        $updatedata = Product::find($id);
        $updatedata->update([
            'name' => $request->name,
            'categories_id' => $request->categories_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $request->image,
            'status' => $request->status
        ]);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('product_id', $id)->delete();
        return redirect()->route('.index');
    }
}
