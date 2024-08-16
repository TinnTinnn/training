<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trans extends Model
{
    protected $fillable = [
        'wallet_id',
        'amount',
        'type',
        'status',
        'created_by',
    ];
}
