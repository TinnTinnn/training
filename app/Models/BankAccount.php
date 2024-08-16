<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $fillable = [
        'member_id',
        'bank_id',
        'account_name',
        'account_number',
        'account_phone',
        'order_at',
        'verified_at',
        'status',
        'type',
        'price',
        'paid_at',
        'expired_at',
    ];
}
