<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $username)
 */
class Member extends Model
{
    protected $fillable = [
        'name',
        'username',
        'password',
        'code',
        'role_id',
        'wallet_id'
    ];

    public function session()
    {
        return $this->hasOne(MemberSession::class, 'member_id', 'id');
    }
}
