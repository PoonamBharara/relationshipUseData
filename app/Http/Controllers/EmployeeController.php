<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Employe;
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


    public function showData(){
        $result = Employe::with('getCompanies')->get();
        foreach($result as $key => $d){
            dd($d->getCompanies->employee_id);
            // dd($d->getCompanies->employee_id);
        }
    }
}
