<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'user_id','fecha_pedido', 'estado'
    ];
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
