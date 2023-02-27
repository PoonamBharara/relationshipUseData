<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    //customer has many courses, so customer relation with courses
    public function courses(){
        return $this->hasMany(Course::class, 'customer_id', 'id');
    }
}
