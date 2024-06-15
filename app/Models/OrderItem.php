<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    //tạo liên kết với bảng product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    //tạo liên kết với bảng order

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getFormattedCreatedAtAttribute()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }
}
