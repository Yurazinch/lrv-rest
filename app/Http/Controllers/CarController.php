<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\CarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Car::get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        return Car::create($request)->validated();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Car::findOrfail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, Car $car)
    {
        $car->fill($request)->validated();
        $car->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        if($car->delete())
        {
            return response(null, Response::HTTP_NO_CONTENT);
        }
        return null;
    }
}
