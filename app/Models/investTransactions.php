<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investTransactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'fund_size',
        'visit_id',
        'account_id',
        'invest_id'
    ];

    protected $guards = [
        'id',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];

}
