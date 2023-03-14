<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [  'name','course_id'];

    public function Course()
    {
        return $this->hasMany(Comment::class,'course_id');
    }

}
