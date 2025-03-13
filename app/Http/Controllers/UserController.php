<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Pail\Contracts\Printer;

//Pagina index
class UserController extends Controller
{
   public function index(){
     
    return view('user.index');
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
}


