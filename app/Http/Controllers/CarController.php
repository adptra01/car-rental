<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    function index()
    {
        return view('cars.index',[
            'cars' => Car::get(),
        ]);
    }

    function store(Request $request)
    {
        dd($request->all());
    }

    function show($id)
    {
        return view('cars.show', 
        [
            'car' => Car::whereId($id),
        ]);
    }

    function update(Request $request)
    {
        dd($request->all());
    }

    Function destroy($id)
    {
        Car::WhereId($id)->delete();
        return back()->with('success', 'Hapus data berhasil 👏');
    }
}
