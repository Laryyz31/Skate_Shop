<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Categories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return Category::orderBy('id', 'asc')->get();
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
            'name' => 'required|unique:posts|max:255',
        ]);

        $category = new Category;

        $category->name = $request->input('name');
        $category->save();

        return 'Category record successfully created with id ' . $category->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Category::find($id);
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
            'name' => 'required|max:255',
        ]);

        $category = Category::find($id);

        $category->name = $request->input('name');
        $category->save();

        return "Sucess updating category #" . $category->id;
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

        $category = Category::find($request->input('id'));

        $category->delete();

        return "Category record successfully deleted #" . $request->input('id');
    }
}
