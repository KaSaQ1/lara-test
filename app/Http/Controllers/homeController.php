<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function show()
    {
        $var = "Некая переменная";
        return view('home', ['var' => $var, 
                    'var2' => "Еще одна переменная",
                    'var3' => 88]);
    }

    public function array()
    {
        $var = ["Лена", "Ока", "Волга", "Дон"];
        return view('array', ['var' => $var]);
    }
}