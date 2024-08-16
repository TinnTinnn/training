<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Random\RandomException;

class AuthController extends Controller
{
    /**
     * @throws RandomException
     */
    public function  login (Request $req)
    {
//        Easy Auth part 1
//        $rootPasswd = 'root';
//        $hashedPasswd = password_hash($rootPasswd, PASSWORD_DEFAULT);
//
//        if ($req->username === 'root' && password_verify($req->passwd, $hashedPasswd)) {
//            $req->session()->put('username', $req->username);
//            session()->put('user_agent', $req->header('User-Agent'));
//            session()->put('ip_address', $req->ip());
//            return redirect()->route('app.home');
//        }
//
//        session()->flush();
//        return redirect()->route('login');

        $username = $this->real_username($req->username);
        $passwd = $this->real_passwd($req->passwd);
        $memberToken = MemberController::get_token_by_login([
            'username' => $username,
            'password' => $passwd
        ]);
        session()->put('member_token', $memberToken);
        $login = MemberSessionController::verify_session_by_token(session('member_token'),[
            'username' => $username,
            'password' => $passwd,
        ]);
        if ($login) {
            return redirect()->route('app.home');
        }
        return redirect()->route('auth.logout');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }

    private function real_username($username)
    {
        $str = str_replace('','',$username);
        return strtolower($str);
    }

    private function real_passwd($passwd)
    {
        return  str_replace('','',$passwd);
    }
}
