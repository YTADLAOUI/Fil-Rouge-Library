<?php

namespace App\Http\Controllers;

use App\Http\Requests\LiverValidation;
use App\Models\Auteure;
use App\Models\Categorie;
use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class livreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres= Livre::with('categories','auteurs')->get();
        $auteurs=Auteure::all();
        $categories=Categorie::all();
        return view('crud.livre')->with(['livres'=>$livres,'auteurs'=>$auteurs,'categories'=>$categories]);
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
    public function store(LiverValidation $request)
    {

        $data=$request->validated();
        $data['quantite_calcul']=$data['quantite_total'];
        if ($request->hasFile('image')) {
            $file =$request->image;
            $imageName = time().'.'.$file->extension();
            $file->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        } else {
            $data['image'] = 'default.jpg';
        }
        Livre::create($data);
    
        return redirect('/livre')->with('success', 'Livre effectuée avec succès.');
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
       $livre= Livre::with('categories','auteurs')->find($id);
       
       $auteurs=Auteure::all();
        $categories=Categorie::all();
        return view('crud.edit.editLivre')->with(['livre'=>$livre,'auteurs'=>$auteurs,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LiverValidation $request, $id)
    {
        $livre=livre::find($id);
        $data=$request->validated();
        $data['quantite_calcul']=$data['quantite_total'];
        if ($request->hasFile('image')) {
            $file =$request->image;
            $imageName = time().'.'.$file->extension();
            $file->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        } 
        else {

            $data['image'] = 'default.jpg';
        }
        $livre->update($data);
    
        return redirect('/livre')->with('success', 'Livre Update avec succès.');
    }
        
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Livre::destroy($id);
        
        return redirect('/livre')->with('success', 'Livre delete avec succès.');
    }
}
