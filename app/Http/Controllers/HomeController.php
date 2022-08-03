<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * cuando tenemos la fucion invoke es por queeremos que el controlador administistre una sola ruta
     */
    public function __invoke()
    {
       return view('home');
    }
}
