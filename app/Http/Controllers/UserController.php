<?php

namespace App\Http\Controllers;

use App\Http\Requests\Requisitos;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Pail\Contracts\Printer;

//Pagina index
class UserController extends Controller
{
   public function index(){
     
      $user = User::orderBy('id')->get();

    return view('user.index', ['user' => $user]);
   }
   public function sobreNos(){
      return view('user.sobreNos');
   }
   public function galeria(){
      return view('user.galeria');
   }
   public function principal(){
      return view('user.principal');
   }
   public function menu(){
      return view('user.menu');
   }
   public function integrantes(){
      return view('user.integrantes');
   }

   public function store(Requisitos $request){

      $request-> validated();

   User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => $request->password,
   ]);

   return redirect()->route('user.menu')->with('sucess', 'Usuário cadastrado com sucesso');

   }
}


