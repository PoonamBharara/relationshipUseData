<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function show(){
        return DB::table('employes')
        ->join('companies', 'employes.id', "=", "companies.employee_id")
        ->select('employes.*')
        ->get();
    }

    public function dataShow(){
        return DB::table('employes')
            ->join('companies', 'employes.id', '=', 'companies.employee_id')
            ->join('orders', 'employes.id', '=', 'orders.employe_id')
            ->select('employes.*', 'companies.company_name', 'orders.order_name')
            ->get();
            
    }
}
