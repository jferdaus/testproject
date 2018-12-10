<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

    	return view('admin.student.save');
    }




    public function save(Request $request)
    {

		dd($request->all());

    }
}
