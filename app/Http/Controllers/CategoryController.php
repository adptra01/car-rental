<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::get()
        ]);
    }

    function store(CategoriesRequest $request)
    {
        Category::create($request->only('name', 'description'));
        return back()->with('success', '...');
    }

    function show($id)
    {
        return view('categories.show', 
        [
            'car' => Category::whereId($id),
        ]);
    }

    function update(Request $request)
    {
        dd($request->all());
    }

    Function destroy($id)
    {
        Category::WhereId($id)->delete();
        return back()->with('success', 'Hapus data berhasil 👏');
    }
}
