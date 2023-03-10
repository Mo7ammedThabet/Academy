<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [ 'title', 'price', 'time_course','date','image','description','user_id'];



    public function User()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function Comments()
    {
        return $this->hasMany(Comment::class,'course_id');
    }


    public function Auttachment()
    {
        return $this->hasMany(Comment::class,'auttachment_id');
    }


}


