<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateUser;
use App\Models\Groupe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users= User::with(['role','groupe'])->get();
        // dd($users);
        $groupes=Groupe::all();
       return view('crud.add')->with(['users'=>$users,'groupes'=>$groupes]);
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
    public function store(ValidateUser $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);
        if ($request->hasFile('profile_photo_path')) {
            $file =$request->profile_photo_path;
            $imageName = time().'.'.$file->extension();
            $file->move(public_path('images'), $imageName);

            $data['profile_photo_path'] = $imageName;
        } else {
            $data['profile_photo_path'] = 'default.jpg';
        }
        User::create($data);
    
        return redirect('/livre');
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
    $user=User::find($id);
    $groupes= Groupe::all();
    return view('crud.edit.editUser')->with(['user'=>$user,'groupes'=>$groupes]);
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
        $user=User::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:5',
            'profile_photo_path' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'role_id' => 'required|int|in:1,2',
            'groupe_id' => 'int',
        ]);
        
        $data = $validator->validated();
        $data['password'] = $request->password ? Hash::make($request->password) : $user->password;
        
        if ($request->hasFile('profile_photo_path')) {
            $file =$request->profile_photo_path;
            $imageName = time().'.'.$file->extension();
            $file->move(public_path('images'), $imageName);
            $data['profile_photo_path'] = $imageName;
        } else {
            $data['profile_photo_path'] = 'default.jpg';
        }
        $user->update($data);
        return redirect('/register');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::destroy($id);
        return redirect('/register');
    }
}
