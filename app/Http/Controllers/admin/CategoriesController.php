<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'is_available' => 'required'
        ]);

        $model = (new Category([
            'name' => $request->get('name'),
            'country' => $request->get('country'),
            'is_available' => $request->get('is_available'),
        ]))->save();
        return back()->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Category::where('id', $id)->first();
        return view('admin.categories.edit', compact('model'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'is_available' => 'required'
        ]);

        $r = Category::where('id', $id)->update([
            'name' => $request['name'],
            'country' => $request['country'],
            'is_available' => $request['is_available'],
        ]);
        return back()->with('success', 'Category updated successfully');
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
