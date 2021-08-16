<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $valid=$request->validate([
            'name'=>"required|min:4",
            'email'=>"required|email|max:255",
            'password'=>"required|max:255"
        ]);
        User::Create($valid);
        return redirect('show');
    }
}
