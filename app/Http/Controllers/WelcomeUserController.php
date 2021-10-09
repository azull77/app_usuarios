<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($nombre, $apodo = null){
        if($apodo){
            return "TU nombre es: { $nombre } y su apodo es : { $apodo }";
        }else{
            return "Tu nombre es: {$nombre} y no tiene apodo";
        }
    }
}
