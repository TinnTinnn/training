<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create($data)
    {
        $item = new Item();
        $item->fill($data);
        $item->save();

        return $item;
    }
}
