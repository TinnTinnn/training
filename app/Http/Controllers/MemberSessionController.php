<?php

namespace App\Http\Controllers;

use App\Models\MemberSession;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Random\RandomException;

class MemberSessionController extends Controller
{
    public function  create ($data)
    {
        $session = new MemberSession();
        $session->fill($data);
        $session->save();

        return $session;
    }

    private static  function update_session($id, $data)
    {
        $session = MemberSession::find($id);
        $session->fill($data);
        $session->save();

        return $session;
    }


    /**
     * @throws RandomException
     */
    public static function verify_session_by_token($token, $data)
    {
        $session = MemberSession::where('token', $token)->first();
        if (!$session) return false;
        $tokenVerify = MemberController::get_token_by_login($data);
        if (!$tokenVerify == $token) return false;
//        generate session key
        $session_key = password_hash($data['username'].$token, PASSWORD_DEFAULT);

        self::update_session($session->id, [
            'token' => bin2hex(random_bytes(32)),
            'session_key' => $session_key,
            'logged_in_at' => Carbon::now(),
            'expired_at' => Carbon::now()->addMinutes(10),
            'last_activity_at' => Carbon::now(),
            'status' => 1

        ]);

        $data = [
            'session_key' => $session->id,
            'member_token' => $data['username'].$token
        ];


        self::put_session($data);

        return true;

//        จุดไว้เช็ค 3 ครั้ง ของ token
//        dd(($token === $tokenVerify) == $session->token);
    }

    public static function verify_session_auth($session_key, $member_token)
    {
//        dd($session_key, $member_token);
        $session = MemberSession::find($session_key);
        if (!$session) return false;
        if(password_verify($member_token, $session->session_key)){
            if ($session->expired_at < Carbon::now()){
                self::update_session($session->id, [
                    'status' => 0
                ]);
                return false;
            }
            self::update_session($session->id, [
                'expired_at' => Carbon::now()->addMinutes(10),
                'last_activity_at' => Carbon::now(),
                'status' => 1
            ]);
            return true;
        }
        return false;
    }

    private static function  put_session($data)
    {
       foreach ($data as $key => $value) {
           session()->put($key, $value);
       }
    }
}
