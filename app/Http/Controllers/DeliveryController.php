<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\DeliveryType;
use Illuminate\Support\Facades\Http;

class DeliveryController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        //urls of deliveries services stored in db 
        $delivery = DeliveryType::where('id', $data['delivery'])->first()->url;

        return $this->sendData($data, $delivery);
    }
// when use other delivery service, sendData post response for any address which are in delivedy_type table
// if need to send different body you can to create other sendData function and run it with Vuejs or other methods
    public function sendData($data, $delivery)
    {
        Http::post($delivery, [
            'customer_name' => $data['fio'],
            'phone_number' => $data['phone'],
            'email' => $data['email'],
            'sender_address' => config('delivery.nv.sender_address'),
            'delivery_address' => $data['address'],
        ]);
        return response('success');
    }
}
