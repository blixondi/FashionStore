<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Type::all();
        return view('admin.type.admintype',compact('type'));
    }
    public function indexadmin()
    {
        $type = Type::all();
        return view('admin.type.admintype',compact('type'));
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
        $type = Type::where('name',$request->name)->first();
        if($type){
            return back()->withInput()->with("messege","tipe dengan nama yang sama sudah ada!") ;
        }
        $type = new Type();
        $type->name=$request->name;
        $type->save();
        return redirect()->route('admtype.index')->with("messege","berhasil menambah tipe");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        //
    }
    public function adminedit(Type $type)
    {
        return view("admin.type.admineditform",compact("type"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $type->name = $request->name;
        $type->save();
        return redirect()->route('type.index')->with("messege","update berhasil");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->get('id');
        $data = Type::find($id);
        $data->delete();
        return response()->json(array(
            'status' => 'oke',
            'msg' => 'Tipe berhasil di hapus'
        ), 200);
    }
}
