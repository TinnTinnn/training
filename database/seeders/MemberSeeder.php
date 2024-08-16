<?php

namespace Database\Seeders;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberSessionController;
use App\Http\Controllers\WalletController;
use Illuminate\Database\Seeder;
use Random\RandomException;

class MemberSeeder extends Seeder
{
    /**
     * @throws RandomException
     */
    public function run(): void
    {
        $walletCtl = new WalletController();
        $wallet = $walletCtl->create(['amount' => 10]);

        $memberCtl = new MemberController();
        $member = $memberCtl->create([
            'name' => 'John Doe',
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'code' => 'JD123',
            'role_id' => 1,
            'wallet_id' => $wallet->id
        ]);

        $sessionCtl = new MemberSessionController();
        $sessionCtl->create([
            'member_id' => $member->id,
            'token' => bin2hex(random_bytes(32)),
        ]);
    }
}
