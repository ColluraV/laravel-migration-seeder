<?php

namespace App\Http\Controllers;


use App\Models\Trains;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Trains::all();
        
        return view('home',["trains"=>$trains]);
                
    }
   
}