<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardInvitationController extends Controller
{
    public function index()
    {
        return view('invitation.index', [
            'title' => 'Invitations',
            'active' => 'invitations',
            'invitations' => Invitation::all()
        ]);
    }

    public function create()
    {
        return view('invitation.create', [
            'title' => 'Add New Invitation',
            'active' => 'invitations',
            'code' => Invitation::generateCode(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => 'required',
            // 'name' => 'required',
            'email' => 'required|email:dns',
        ]);
        try
        {
            Invitation::create($data);
            return redirect('/dashboard/invitations/create')->with('success', 'Invitation has been created');
        }
        catch(QueryException $e){
            return redirect('/dashboard/invitations/create')->with('error', 'Email already taken');
        }
    }

    public function show(Invitation $invitation)
    {
        //
    }

    public function edit(Invitation $invitation)
    {
        //
    }

    public function update(Request $request, Invitation $invitation)
    {
        //
    }

    public function destroy(Invitation $invitation)
    {
        Invitation::destroy($invitation->id);
        return redirect('/dashboard/invitations')->with('success', 'Invitation already deleted');
    }
}
