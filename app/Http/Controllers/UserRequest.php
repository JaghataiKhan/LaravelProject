<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Session;


class UserRequest extends Controller
{
    public function store()
    {

        $attributes = request()->validate([
            'name'=> 'required|max:255',
            'phone'=>'required',
            'user_message' =>'required|max:500',
            'email' => 'required|email|max:255'
        ]);

        Client::create($attributes);

        return response()->json(['your request has been sent!']);
    }
}
