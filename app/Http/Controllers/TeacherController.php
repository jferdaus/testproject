<?php

namespace App\Http\Controllers;
//use App\Teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
    	return view('admin.teacher.teacherEntry');
    }



public function save(Request $request)
{


$data = array();

$data['teacherName'] = $request->teacherName ;
$data['shortDescription'] = $request->shortDescription ;
$data['publicationStatus'] = $request->publicationStatus ;


echo "<pre>";
print_r($data);



/*
$teacherEntry = new Teacher();

$teacherEntry->teacherName = $request->teacherName;
$teacherEntry->shortDescription = $request->shortDescription;
$teacherEntry->publicationStatus = $request->publicationStatus;

$teacherEntry->save();

return redirect('/teacher/save')->with('message', 'Data is Inserted Successfully');
*/
}



}
