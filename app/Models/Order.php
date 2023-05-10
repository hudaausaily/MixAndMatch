<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'email', 'phone','address','cartItems','res_date','subtotal','status','comment','product_id'];
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
