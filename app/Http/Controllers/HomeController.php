<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comics;
use App\ComicsModel;

/* use ComicsSeeder; 
 */

class HomeController extends Controller
{
    public function home(){

        $comics = Comics::all(); //così mi prendo tutti i comics da db e li salvo su una var

        return view('pages.home', compact('comics'));

    }
    public function fumetto($id) {

        $comic = Comics::findOrFail($id);
        return view('pages.fumetto', compact('comic'));
        
    }

    
}

