<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
    public function index()
    {
        $car = car::all();

        return view('car.index')
            ->with('cars', $car);
    }

    
    public function create()
    {   
        return view('car.create');
    }

    
    public function store(StoreCarRequest $request)
    {
        $car = Car::create($request->validated());
        $car->name = $request->name;
        $car->price = $request->price;
        $car->status = $request->status;
        $car->save();

        return redirect()->route('cars.index')
            ->with('success','Data Berhasil Dibuat!');
    }

    
    public function show(Car $car)
    {
        //
    }

    
    public function edit(Car $car)
    {
        return view('car.edit', compact('car'));
    }

    
    public function update(UpdateCarRequest $request, Car $car)
    {
        $car->update($request->validated());

        return redirect()->route('cars.index')
            ->with('success', 'Berhasil Dihapus!');
    
    }

    
    public function destroy(Car $car)
    {
        $car->delete();
        
        return redirect()->route('cars.index')
            ->with('success', 'Berhasil Dihapus!');
    }
}
