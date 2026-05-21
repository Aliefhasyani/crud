<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    
    public function index()
    {
        $employers = Employer::all();
        
        return view('employer.index',compact('employers'));
    }

    public function create()
    {
        return view('employer.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|max:144',
                'company' => 'required|string|max:144',
            ]
        );

        Employer::create($validated);

        return redirect()->route('employer.index');
        
    }

    public function destroy($id)
    {
        Employer::destroy($id);
        
        return redirect()->route('employer.index');
    }

    public function edit($id)
    {
        $employer = Employer::findOrFail($id);

        return view('employer.edit',compact('employer'));
    }

    public function update(Request $request,$id)
    {   
        $employer = Employer::findOrFail($id);
        
        $validated = $request->validate(
            [
                'name' => 'required|string|max:144',
                'company' => 'required|string|max:144',
            ]
        );

        $employer->update($validated);

        return redirect()->route('employer.index');
        
    }
}
