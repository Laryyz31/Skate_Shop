<?php

namespace App\Http\Controllers;

use App\Skate;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Skates extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return Skate::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'bail|required|max:75',
            'brand_id' => 'required',
            'category_id' => 'required',
            'model_manufacture_date' => 'required',
            'price' => 'required',
        ]);

        $skate = new Skate;

        $skate->name = $request->input('name');
        $skate->description = $request->input('description');
        $skate->brand_id = $request->input('brand_id');
        $skate->category_id = $request->input('category_id');
        $skate->model_manufacture_date = $request->input('model_manufacture_date');
        $skate->price = $request->input('price');
        $skate->save();

        return 'Skate record successfully created with id ' . $skate->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Skate::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {

        $this->validate($request, [
            'name' => 'max:75',
        ]);

        $skate = Skate::find($id);

        $skate->name = $request->input('name');
        $skate->description = $request->input('description');
        $skate->brand_id = $request->input('brand_id');
        $skate->category_id = $request->input('category_id');
        $skate->model_manufacture_date = $request->input('model_manufacture_date');
        $skate->price = $request->input('price');

        $skate->save();

        return "Sucess updating pony #" . $skate->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id) {

        if($id != null){
            $skate = Skate::find($id);

            $skate->delete();
        } else {
            $skate = Skate::find($request->input('id'));

            $skate->delete();
        }


        return "Skate record successfully deleted #" . $request->input('id');
    }
}
