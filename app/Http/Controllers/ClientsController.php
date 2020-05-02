<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clients;
class ClientsController extends Controller
{
    public function store(Request $request)
    {
        $client = new Clients();
        
        $client->name= $request->get('name');
        $client->email= $request->get('email');
        $client->phoneNumber= $request->get('phoneNumber');
        $client->address= $request->get('address');
        $client->save();
        return $client;
    }
}
