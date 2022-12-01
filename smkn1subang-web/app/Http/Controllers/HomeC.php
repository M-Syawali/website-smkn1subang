<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataguruM;
use App\Models\datakelasM;

class HomeC extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function program(){
        return view('pages.program');
    }
    public function dataguru(){
        $data = dataguruM::all();
        return view('pages.dataguru', ['data' => $data]);
    }
    public function datakelas(){
        $data = datakelasM::all();
        return view('pages.datakelas', ['data' => $data]);
    }
}


