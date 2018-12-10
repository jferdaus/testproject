<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //index method

    public function index()
    {

return view('frontView.home.homeContent');

    }


}
