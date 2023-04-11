<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo= Promo::all();
       return view('crud.promo')->with('promos',$promo);
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
        ]);
        
        if($validator->fails()) {
            return  redirect('/promo')->with('error', 'promo ne son pas effectuée');
        }
        $input=$request->all();
        Promo::create($input);
        return redirect('/promo')->with('success', 'Promo effectuée avec succès.');
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
        $promo=Promo::find($id);
        if(!$promo){
            return response()->json(['promo_not_found'], 404);
        }
        return view('crud.edit.editPromo')->with('promo',$promo);
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
            return redirect('/promo')->with('error', 'Promo ne son pas Update');
        }
        $promo=Promo::find($id);
        if(!$promo){
            return response()->json(['promo_not_found'], 404);
        }
        $input=$request->all();
        $promo->update($input);
        return redirect('/promo')->with('promo', 'Réservation effectuée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
        Promo::destroy($id);
        // if(!(Promo::destroy($id))){
        //     return response()->json(['plant_not_found'], 404);
        // }
        return redirect('/promo')->with('success', 'delete avec succès.');
    }
}
