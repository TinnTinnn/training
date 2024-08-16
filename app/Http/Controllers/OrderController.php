<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create ($data)
    {
        $order = new Order();
        $order->fill($data);
        $order->save();

        return $order;
    }
}
