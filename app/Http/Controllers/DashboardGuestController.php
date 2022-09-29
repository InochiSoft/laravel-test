<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class DashboardGuestController extends Controller
{
    public function index()
    {
        return view('guest.index', [
            'title' => 'Guests',
            'active' => 'guests',
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Guest $guest)
    {
        //
    }

    public function edit(Guest $guest)
    {
        //
    }

    public function update(Request $request, Guest $guest)
    {
        //
    }

    public function destroy(Guest $guest)
    {
        //
    }
}
