<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
    public function  create ($data)
    {
        $bankAccount = new BankAccount();
        $bankAccount->fill($data);
        $bankAccount->save();

        return $bankAccount;
    }
}
