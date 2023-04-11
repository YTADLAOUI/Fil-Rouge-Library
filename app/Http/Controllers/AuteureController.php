<?php

namespace App\Http\Controllers;

use App\Models\Auteure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuteureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auteurs=Auteure::all();
        return view('crud.auteur')->with('auteurs',$auteurs);
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
            redirect('/auteur')->with('error', 'auteur ne son pas effectuée');
        }
       $auteur= $request->all();
       Auteure::create($auteur);
       return redirect('/auteur')->with('success', 'auteur effectuée avec succès.');;
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
        $auteur=Auteure::find($id);
        return view('crud.edit.editAuteur')->with('auteur',$auteur);
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
            redirect('/auteur')->with('error', 'auteur ne son pas update');
        }
        $auteur=Auteure::find($id);
        $input=$request->nom;
        $auteur->update($input);
        return redirect('/auteur')->with('success', 'auteur update avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Auteure::destroy($id);
        return redirect('/auteur')->with('success', 'auteur delete avec succès.');
    }
}