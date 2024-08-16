<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function create ($data)
    {
        $wallet = new Wallet();
        $wallet->fill($data);
        $wallet->save();

        return $wallet;
    }
}
