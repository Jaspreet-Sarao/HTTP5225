<?php
namespace App\Http\Controllers;
use App\Models\Professor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class ProfessorController extends Controller
{
    public function index()
    {
        $professors = Professor::all();
        return view('professors.index', compact('professors'));
    }

    public function create()
    {
        return view('professors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Professor::create($request->all());
        return redirect()->route('professors.index')->with('success', 'Professor added successfully.');
    }

    public function edit(Professor $professor)
    {
        return view('professors.edit', compact('professor'));
    }

    public function update(Request $request, Professor $professor)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $professor->update($request->all());
        return redirect()->route('professors.index')->with('success', 'Professor updated successfully.');
    }

    public function destroy(Professor $professor)
    {
        $professor->delete();
        return redirect()->route('professors.index')->with('success', 'Professor deleted successfully.');
    }
}
