<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse

    {
        $request->validate([
            'name' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'characteristics' => 'required',
            'is_available' => 'required',
            'image' => 'required',
            'price' => 'required'
        ]);
        try {
            $path = $request->file('image')->store('public/images');
            $data = Image::create([
                'image' => $path,
            ]);
            $product = Product::create([
                'name' => $request['name'],
                'short_description' => $request['short_description'],
                'long_description' => $request['long_description'],
                'characteristics' => $request['characteristics'],
                'is_available' => $request['is_available'],
                'price' => $request['price'],
                'image_id' => $data->id,
            ]);
        } catch (\Exception $exception) {
            // silent
        }

        session()->flash('success', 'Image Upload successfully');
        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
