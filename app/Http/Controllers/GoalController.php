<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function index()
    {
        $goals = Goal::all();
        return view('index', compact('goals'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'due_date' => 'required|date',
        ]);

        $goal = new Goal();
        $goal->name = $request->name;
        $goal->description = $request->description;
        $goal->due_date = $request->due_date;
        $goal->save();

        return redirect()->route('index')->with('success', 'Obiectivul a fost adăugat cu succes!');
    }

   
    public function update(Request $request, Goal $goal)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $goal->name = $request->name;
        $goal->save();

        return redirect('/goals');
    }
}
