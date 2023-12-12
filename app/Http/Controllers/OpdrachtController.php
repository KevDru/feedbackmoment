<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Fruit;

class OpdrachtController extends Controller
{
    public function show()
    {
        $name = 'Kevin van Drunen';
        $fruits = Fruit::all(); 

        return view('opdracht', ['fruits' => $fruits, 'name'=> $name]);
    }
}
