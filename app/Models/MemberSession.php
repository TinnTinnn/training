<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $token)
 * @method static find($id)
 */
class MemberSession extends Model
{
    protected $fillable = [
        'member_id',
        'token',
        'session_key',
        'logged_in_at',
        'expired_at',
        'last_activity_at',
        'status',
    ];
}
