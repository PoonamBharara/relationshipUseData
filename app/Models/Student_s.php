<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Claaas;

class Student_s extends Model
{
    use HasFactory;
    protected $table = "student_s";


    public function class(){
        return $this->hasMany(Claaas::class, 'stu_id');
    }
}
