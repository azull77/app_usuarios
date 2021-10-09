<?php

namespace App\Http\Controllers;


use App\Http\Requests\ValidationUser;
use App\Profession;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(10);
        return view('users.index',compact('users'));
    }
    public function show(User $email){
        $usuario = $email;
        return view('users.show',compact('usuario'));
    }
    public function create(){
        $professions = Profession::all();
        $usuario = new User();
        return view('users.create', compact('professions','usuario'));
    }
    public function storage(ValidationUser $request){
        User::create($request->validated());
        return redirect()->route('usuario.index');
    }
    public function edit(User $email){
        $usuario = $email;
        $professions = Profession::all();
        return view('users.edit', compact('usuario', 'professions'));
    }
    public function update(ValidationUser $request,User $email){
        $email->update($request->validated());
        return redirect()->route('usuario.index');
    }
    public function destroy(User $email){
        $email->delete();
        return redirect()->route('usuario.index');
    }   

}
