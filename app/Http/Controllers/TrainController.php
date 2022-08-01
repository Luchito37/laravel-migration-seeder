<?php

namespace App\Http\Controllers;
use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    function index(){
        $data = Train::all();
        return view('index', [
            'trains' => $data
        ]);
    }
}
