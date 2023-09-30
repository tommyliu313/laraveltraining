<?php

namespace App\Http\Controllers\Api;

use App\Models\Dog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return Dog::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        return Dog::create($request->only(['name','bread']));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        return Dog::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $dog = Dog::findOrFail($id);
        $dog->update($request->only(['name','bread']));
        return $dog;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        Dog::findOrFail($id)->delete();
    }

    public function updatePicture(Request $request, Dog $dog){
        $original = $request->file('picture');
        $image = Image::make($original)->resize(150, null, function($constraint){

        })
    }
}
