<?php

namespace App\Http\Controllers;

use App\Models\Trans;
use Illuminate\Http\Request;

class TransController extends Controller
{
    public function create($data)
    {
        $trans = new Trans();
        $trans->fill($data);
        $trans->save();

        return $trans;
    }
}
