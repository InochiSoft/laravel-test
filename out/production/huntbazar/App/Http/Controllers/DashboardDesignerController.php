<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class DashboardDesignerController extends Controller
{
    public function index()
    {
        return view('designer.index', [
            'title' => 'Designers',
            'active' => 'designers',
            'designers' => Designer::all()
        ]);
    }

    public function create()
    {
        return view('designer.create', [
            'title' => 'Add New Designer',
            'active' => 'designers',
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'slug' => 'required',
            'name' => 'required',
        ]);
        try
        {
            Designer::create($data);
            return redirect('/dashboard/designers/create')->with('success', 'Designer has been created');
        }
        catch(QueryException $e){
            return redirect('/dashboard/designers/create')->with('error', 'Designer already taken');
        }
    }

    public function show(Designer $designer)
    {
        //
    }

    public function edit(Designer $designer)
    {
        //
    }

    public function update(Request $request, Designer $designer)
    {
        //
    }

    public function destroy(Designer $designer)
    {
        Designer::destroy($designer->id);
        return redirect('/dashboard/designers')->with('success', 'Designer already deleted');
    }
}
