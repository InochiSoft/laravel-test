<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestRegisterController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|email:dns|unique:guest',
        ]);

        Guest::create($data);

        $request->session()->flash('success', 'message');

        return redirect("/");
    }
}
