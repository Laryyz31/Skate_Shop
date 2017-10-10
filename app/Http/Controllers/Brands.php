<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Brands extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return Brand::orderBy('id', 'asc')->get();
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
            'name' => 'required|unique:posts|max:75',
        ]);

        $brand = new Brand();

        $brand->name = $request->input('name');
        $brand->save();

        return 'Brand record successfully created with id ' . $brand->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Brand::find($id);
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

        $skate = Brand::find($id);

        $skate->name = $request->input('name');
        $skate->save();

        return "Sucess updating brand #" . $skate->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request) {

        $this->validate($request, [
            'id' => 'required',
        ]);

        $category = Brand::find($request->input('id'));

        $category->delete();

        return "Brand record successfully deleted #" . $request->input('id');
    }
}
