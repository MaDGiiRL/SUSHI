<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;
use App\Http\Requests\DeliveryRequest;

class DeliveryController extends Controller
{
    public function delivery()
    {
        $deliveries = Delivery::latest()->get();
        return view('menu.delivery', compact('deliveries'));
    }

    public function store(DeliveryRequest $request)
    {
        Delivery::create([
            'full_name' => $request->full_name,
            'number' => $request->number,
            'email' => $request->email,
            'address' => $request->address,
            'base' => $request->base,
            'protein' => $request->protein,
            'second_choose' => $request->second_choose,
            'sauce' => $request->sauce,
            'drinks' => $request->drinks,
            'payment' => $request->payment
        ]);

        return redirect(route('menu.delivery'))->with('message', 'Order placed.');
    }
}
