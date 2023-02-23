<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\StudenDetails;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function classShow(){
        
        foreach (Student::all() as $student) {
            $a[] =  $student->student_name;
        }
        return view('welcome', $student);
    }

    public function showData() {
        // return DB::table('student_details')->where('student_name', 'asdf')->first();
        $results = StudenDetails::with('book')->first();
        // dd($results->book);
        
    }


    public function testData() {
        //  $db_data = DB::table('posts')->where('id', 1)->first();
        // return $db_data;

       
         $results = User::with('getPosts')->get();
        //  dd($results);
        //  $results->getPosts;
      foreach ($results as $key => $rs) {
      
         if(isset($rs->getPosts->user_id)){
            $id[]=  $rs->getPosts->user_id ;
         }
    
      }

    }
}
