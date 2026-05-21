<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    
    public function index()
    {
        $positions = Position::with('employer')->get();
        
        return view('position.index',compact('positions'));
    }

    public function create()
    {
        $employers = Employer::all();

        return view('position.create',compact('employers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'position_name' => 'required|string|max:144',
                'employer_id' => 'required|exists:employers,id',
            ]
        );

        Position::create($validated);

        return redirect()->route('position.index');
        
    }

    public function destroy($id)
    {
        Position::destroy($id);
        
        return redirect()->route('position.index');
    }

    public function edit($id)
    {
        $position = Position::findOrFail($id);
        $employers = Employer::all();

        return view('position.edit',compact('position','employers'));
    }

    public function update(Request $request,$id)
    {   
        $position = Position::findOrFail($id);
        
        $validated = $request->validate(
            [
                'position_name' => 'required|string|max:144',
                'employer_id' => 'required|exists:employers,id',
            ]
        );

        $position->update($validated);

        return redirect()->route('position.index');
        
    }
}
