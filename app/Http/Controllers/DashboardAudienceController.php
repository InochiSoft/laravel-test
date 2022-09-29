<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use Illuminate\Http\Request;

class DashboardAudienceController extends Controller
{
    public function index()
    {
        return view('audience.index', [
            'title' => 'Audiences',
            'active' => 'audiences',
            'audiences' => Audience::all()
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

    public function show(Audience $guest)
    {
        //
    }

    public function edit(Audience $guest)
    {
        //
    }

    public function update(Request $request, Audience $guest)
    {
        //
    }

    public function destroy(Audience $guest)
    {
        //
    }
}
