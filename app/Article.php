<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fileable = ['title', 'content'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
