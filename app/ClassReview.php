<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassReview extends Model
{
     protected $fillable = ['lecturer','class_name','rank','presentation','test_review','class_review','user_id'];
     protected $table = 'classreviews';
     
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function reviews()
    {
        return $this->hasMany(ClassReview::class);
    }
}
