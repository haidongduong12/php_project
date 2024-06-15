<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Thêm phương thức để kiểm tra xem đơn hàng đã hoàn thành hay chưa
    public function isCompleted()
    {
        return $this->status == 'Completed';
    }
    public function getFormattedCreatedAtAttribute()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
