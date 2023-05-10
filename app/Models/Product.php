<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class product extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'short_description', 'long_description','image','category_id','price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
