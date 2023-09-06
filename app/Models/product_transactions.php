<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'jumlah',
        'product_id',
        'account_id'
    ];

    
    protected $guards = [
        'id',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];
}
