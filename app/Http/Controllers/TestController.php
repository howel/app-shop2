<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome() {
    	//return view('welcome');  //devuelve lo mismo que la pagina home ( / )
    	
    	$a = 10;
    	$b = 20;
    	$c = $a + $b;
    	return "el valor de la suma es $c";
    }
}
