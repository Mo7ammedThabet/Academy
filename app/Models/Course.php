<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public const Published = 1;
    public const Draft = 0;
    
    protected $fillable = [ 'title', 'price', 'time_course','date','image','description','user_id','category_id','is_publish'];



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


    public function Category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

}


