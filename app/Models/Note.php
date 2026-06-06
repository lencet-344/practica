<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillabe =[
        "tittle"
        
    ];

    public function Category()
    {
        return $this->hasOne(Category::class);
    }
}
