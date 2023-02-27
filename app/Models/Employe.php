<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    //through this model, can access company data
    public function getCompanies(){
        return $this->hasOne(Company::class, 'employee_id', 'id');
    }
}
