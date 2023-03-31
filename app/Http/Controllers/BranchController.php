<?php

namespace App\Http\Controllers;

use App\Models\Branche;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches=Branche::with('promo')->get();
        $promos=Promo::all();
        return view('crud.branch')->with(['branches' => $branches, 'promos' => $promos]);
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
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'promo_id'=>'required'
        ]);
        
        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
            $input=$request->all();
            Branche::create($input);
            return redirect('/branch');
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
        $branch= Branche::find($id);
        $promos=Promo::all();
        return view('crud.edit.editBranch')->with(['branches'=>$branch,'promos'=>$promos]);
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
    ]);
    
    if($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }
    $branch=Branche::find($id);
        $input=$request->all();
        $branch->update($input);
        return redirect('/branch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
