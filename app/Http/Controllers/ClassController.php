<?php

namespace App\Http\Controllers;

use App\Models\Branche;
use App\Models\Groupe;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $classes= Groupe::with(['branche.promo'])->get();
       $promos= Promo::all();
       $branches=Branche::all();
       return view('crud.class')->with(['classes'=>$classes,'promos'=>$promos,'branches'=>$branches]);
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
        // dd($request);
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'promo_id'=>'required',
            'branche_id'=>'required'
        ]);
        
        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $input=$request->all();
        Groupe::create($input);
        return redirect('/class');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class=Groupe::find($id);
        $promos=Promo::all();
        $branches=Branche::all();
        return view('crud.edit.editClass')->with(['class'=>$class,'promos'=>$promos,'branches'=>$branches]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'promo_id'=>'required',
            'branche_id'=>'required'
        ]);
        
        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $class=Groupe::find($id);
        if(!$class){
            return response()->json(['class_not_found'], 404);
        }
        $input=$request->all();
        $class->update($input);
        return redirect('/class');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Groupe::destroy($id);
        return redirect('/class');
    }
}