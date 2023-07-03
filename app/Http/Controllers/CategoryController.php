<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function indexadmin()
    {
        $category = Category::all();
        return view('admin.admincategory',compact('category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = Category::where("name", "=", $request->name)->first();
        if($name){
            return back()->withInput()->with("message", "Sudah ada");
        }

        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route("admcategory.index")->with("message", "Insert Successfull");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $category = Category::where("id", "=", $id)->first();
        return view('admin.admcategory', ['categories'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::where("id", "=", $id)->first();
        $category->name = $request->name;
        $category->save();
        return redirect()->route("admcategory.index")->with("message", "Update Successfull");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::where("id", "=", $id)->first();
        $category->delete();
        return redirect()->route("admcategory.index")->with("message", "Delete Successfull");
    }

    // public function updateCat($id){
    //     $category = Category::where("id", "=", $id)->first();
    //     return view('categories.updateCat', ['categories'=>$category]);
    // }
}
