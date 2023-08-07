<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class UserAccount extends Model
{
    use HasFactory, SoftDeletes;

        /**
     * The primary key associated with the table.
     *
     * @var string
     */
    
    protected $fillable = [
        'username',
        'email',
        'role_id',
        'user_id',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

        /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ]; 

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

