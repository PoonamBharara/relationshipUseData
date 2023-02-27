<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Course;
use Illuminate\Http\Request;

class CustomerCourser extends Controller
{
    public function Customer(){
        // dd(Customer::with('courses')->get());

        $results = Customer::with('courses')->get();

        foreach($results as $res => $r){
            $data = $r->courses;
            foreach($data as $key => $value){
                $extracteddata[] = $value;
                $id = $value->id;
                $name = $value->name;
                $address = $value->address;

                
            }
            
        }
        return view('welcome', ['extracteddata' => $extracteddata]); 
    
    }
    public function get_customer(Request $request)
    {
        $tableData = Customer::with('courses')->get();
        // dd($tableData);
        foreach($tableData as $tdata => $td){
            $courseDetails = $td->courses;
            foreach($courseDetails as $key => $details){
                    // $tbDetail['id'] = $details->id;
                    // $tbDetail['name'] = $details->name;
                    // $tbDetail['address'] = $details->address;
                    // $tbDetail['customer_id'] = $details->customer_id;
                }
        }
        // $tbDetail['id'] = $details->id;
        // $tbDetail['name'] = $details->name;
        // $tbDetail['address'] = $details->address;
        // $tbDetail['customer_id'] = $details->customer_id;
         return $tbDetail;
    }
}
