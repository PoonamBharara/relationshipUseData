<?php

namespace App\Models;
use App\Models\Company;
use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    
    public function employe()
    {
        return $this->belongsTo(Employe::class, 'id');
    }
}
