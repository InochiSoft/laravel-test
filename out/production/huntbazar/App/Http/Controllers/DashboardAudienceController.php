<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class DashboardAudienceController extends Controller
{
    public function index()
    {
        return view('audiences.index', [
            'title' => 'Audiences',
            'active' => 'audiences',
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
