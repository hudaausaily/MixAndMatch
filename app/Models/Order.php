<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['first_name', 'last_name', 'user_id','phoneNumber','email','number_of_guest','res_date','price','status','comment','product_id'];
    protected $dates = [
        'res_date'
    ];
    public function product()
    {
        return $this->belongsTo(product::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
