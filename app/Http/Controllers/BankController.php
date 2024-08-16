<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function create ($data)
    {
        $bank = new Bank();
        $bank->fill($data);
        $bank->save();

        return $bank;
    }
}
