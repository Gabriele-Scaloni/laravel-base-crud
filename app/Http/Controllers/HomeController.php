<?php

namespace App\Http\Controllers;

use App\Comics;
use ComicsSeeder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function home(){

    $comics = Comics::all(); //così mi prendo tutti i comics da db e li salvo su una var

    return view('pages.home'); 

    }
}

