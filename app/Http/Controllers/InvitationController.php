<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\Audience;
use App\Models\Designer;
use App\Models\AudienceDesigner;
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
            return view('audience.register', [
                "title" => "Register",
                "active" => 'posts',
                "code" => $code,
                "invitation" => $this->invitation,
                "designers" => $designers,
            ]);
        }
        return redirect('/')->with('error', 'Invitation code is not exist!');;
    }

    public function store(Request $request)
    {
        $dataAudience = $request->validate([
            'code' => 'required|min:10|max:255',
            'name' => 'required|min:5|max:255',
            'gender' => 'required',
            'email' => 'required|email:dns',
            'birth_date' => 'required|date',
        ]);

        try
        {
            $is_exists = Audience::firstwhere('email', $request->email);
            if (!$is_exists) {
                $audience = Audience::create($dataAudience);
                $audienceId = $audience->id;

                if ($audienceId) {
                    $designers = $request->designers;
                    if ($designers) {
                        $dataDesigner = null;
                        foreach ($designers as $designer) {
                            $dataDesigner[] = [
                                'audience_id' => $audienceId,
                                'designer_id' => (int) $designer,
                                'created_at' => now(),
                                'updated_at' => now(),
                            ];
                        }
                        if ($dataDesigner) {
                            AudienceDesigner::insert($dataDesigner);
                        }
                    }
                }

                $details['email'] = $request->email;
                dispatch(new SendEmailJob($details))->delay(now()->addMinutes(60));
                return redirect('/')->with('success', 'Registration succeed');
            } else {
                return back()->with('error', 'Email already registered!');
            }
        }
        catch(QueryException $e){
            return back()->with('error', 'Registration failed!');
        }
    }
}
