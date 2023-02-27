<?php

namespace App\Http\Controllers;
use App\Models\Student_s;
use Illuminate\Http\Request;

class StrudentForController extends Controller
{
    public function showHasMany(){
        return Student_s::with('class')->get();
    }

    public function showClassToStudent(){
        // return Student_s::with('student')->get();
       $student = Student_s::with('class')->get();
       foreach($student as $key => $val){
        $data = $val->class; 
            dd($data);             
       }
    }
    
}
