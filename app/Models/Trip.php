<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Trip extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['name', 'short_description', 'long_description','image','image2','category_id','guest_number','price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
