<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claaas extends Model
{
    use HasFactory;
    protected $table = "claaas";
    public function student(){
        return $this->hasMany(Student_s::class);
    }
}
