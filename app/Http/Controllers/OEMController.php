<?php

namespace App\Http\Controllers;

use App\Models\OEM;
use Illuminate\Http\Request;

class OEMController extends Controller
{
    public function index()
    {
        $oems = OEM::all();
        return view('oems.index', compact('oems'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'status' => 'required|in:active,inactive'
        ]);

        OEM::create($validated);

        return redirect()->route('oems.index')->with('success', 'OEM created successfully.');
    }

    public function update(Request $request, OEM $oem)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'status' => 'required|in:active,inactive'
        ]);

        $oem->update($validated);

        return redirect()->route('oems.index')->with('success', 'OEM updated successfully.');
    }

    public function destroy(OEM $oem)
    {
        $oem->delete();
        return redirect()->route('oems.index')->with('success', 'OEM deleted successfully.');
    }
} 