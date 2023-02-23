<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudenDetails extends Model
{
    use HasFactory;
    protected $table = 'student_details';
    public function book()
    {
        return $this->hasOne(Book::class,'id','book_id');
    }
}
