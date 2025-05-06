<?php

namespace App\Http\Controllers;

use App\Models\OEM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OEMController extends Controller
{
    public function index()
    {
        $oems = DB::table('oems')->get();
        return view('oems.index', compact('oems'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:oems',
            'status' => 'required|in:active,inactive'
        ]);

        try {
            $oem = DB::table('oems')->insert([
                'company_name' => $validated['company_name'],
                'contact_person' => $validated['contact_person'],
                'phone_number' => $validated['phone_number'],
                'email' => $validated['email'],
                'status' => $validated['status'],
                'created_at' => now(),
                'updated_at' => now()
            ]);

            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'OEM created successfully',
                    'oem' => $oem
                ], 201);
            }

            return redirect()->route('oems.index')
                ->with('success', 'OEM created successfully.');
        } catch (\Exception $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Error creating OEM',
                    'error' => $e->getMessage()
                ], 500);
            }

            return redirect()->route('oems.index')
                ->with('error', 'Error creating OEM: ' . $e->getMessage());
        }
    }

    public function update(Request $request, OEM $oem)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|unique:oems,email,' . $oem->id,
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