<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function create(Request $request){

        $student = new StudentModel();
        $student -> fist_name = $request -> input('fist_name');
        $student -> last_name = $request -> input('last_name');
        $student -> email_address = $request -> input('email_address');
        $student -> password = $request -> input('password');


        $student -> save();
        return response()->json($student, 200);

        //return ["data"=>"result "];
    }

}
