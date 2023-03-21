<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phoneNumber','	subject','message'];
   public function _construct(){
       dd('ddddd');
} 
}
