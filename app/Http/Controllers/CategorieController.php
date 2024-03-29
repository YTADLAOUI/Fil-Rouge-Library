<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categorie::all();
        return view('crud.categorie')->with('categories',$categories);
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
            redirect('/categorie')->with('error', 'Categorie ne son pas effectuée');
        }
       $categories= $request->all();
       Categorie::create($categories);
       return redirect('/categorie')->with('success', 'Categorie effectuée avec succès.');
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
        
        $categorie=Categorie::find($id);
        return view('crud.edit.editCategorie')->with('categorie',$categorie);
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
            redirect('/categorie')->with('error', 'Categorie ne son pas update');
        }
        $categorie=Categorie::find($id);
        $input=$request->all();
        $categorie->update($input);
        return redirect('/categorie')->with('success', 'Categorie update avec succès.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categ= Categorie::find($id);
        $categId= $categ->id;
        Categorie::destroy($id);
        Livre::where('categories_id',$categId)->delete();
        return redirect('/categorie')->with('success', 'Categorie delete avec succès.');;
    }
}
