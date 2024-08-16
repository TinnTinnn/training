<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class  MemberController extends Controller
{
    public function create ($data)
    {
        $member = new Member();
        $member->fill($data);
        $member->save();

        return $member;
    }

    public static function get_token_by_login($auth)
    {
        $table = Member::where('username', $auth['username'])->first();
        if (!$table) return false;
        if (password_verify($auth['password'], $table->password)) {
            return $table->session->token;
        }
        return false;
    }
}
