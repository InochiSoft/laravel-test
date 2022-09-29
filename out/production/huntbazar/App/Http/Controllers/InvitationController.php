<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use App\Models\Designer;
use App\Models\AudienceDesigners;
use App\Models\Invitation;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InvitationController extends Controller
{
    protected $invitation;
    public function show($code)
    {
        $this->invitation = Invitation::firstwhere('code', $code);
        if ($this->invitation) {
            $designers = Designer::all();
            return view('audiences.register', [
                "title" => "Register",
                "active" => 'posts',
                "code" => $code,
                "invitation" => $this->invitation,
                "designers" => $designers,
            ]);
        }
        return redirect('/');
    }

    public function store(Request $request)
    {
        /*
        $guest = Guest::create($data);
        $request->session()->flash('success', 'message');
        return redirect("/");
        */
        $dataAudience = $request->validate([
            'code' => 'required',
            'name' => 'required|min:5|max:255',
            'email' => 'required|email:dns|unique:guest',
            'birth_date' => 'required|date',
        ]);

        try
        {
            $guest = Audience::create($dataAudience);
            $guestId = $guest->id;
            if ($guestId) {
                if ($request->designers) {
                    $dataDesigner = null;
                    foreach ($request->designers as $designer) {
                        $dataDesigner[] = [
                            'guest_id' => $guestId,
                            'designer_id' => (int) $designer,
                        ];
                    }
                    if ($dataDesigner) {
                        AudienceDesigners::create($dataDesigner);
                    }
                }
            }
            return redirect('/invitation/{code}')->with('success', 'Registration succeed');
        }
        catch(QueryException $e){
            return back()->with('error', 'Registration failed!');
        }

        /*
        $dataDesigner = null;

        if ($request->designers) {
            foreach ($request->designers as $designer) {
                $dataDesigner[] = [
                    'guest_id' => 1,
                    'designer_id' => (int) $designer,
                ];
            }
        }

        return $dataDesigner;
        */
    }
}
