<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Show the form for creating a new report.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('reports.create');
    }

    /**
     * Store a newly created report in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'violations' => 'required|array',
            'description' => 'required|string',
            'evidence' => 'nullable|file|mimes:jpg,png,pdf,doc,docx',
        ]);

        // Handle file upload
        $filePath = null;
        if ($request->hasFile('evidence')) {
            $filePath = $request->file('evidence')->store('evidence');
        }

        // Create the report
        Report::create([
            'user_id' => Auth::id(), // Save the ID of the currently logged-in user
            'violations' => implode(', ', $request->violations), // Store as a comma-separated string
            'description' => $request->description,
            'evidence' => $filePath,
            'status' => 'Ongoing', // Default status
        ]);

        return view('reports.thanks');
    }

    public function index()
    {
        $reports = Report::where('user_id', Auth::id())->get(); // Fetch reports for the logged-in user
        return view('reports.index', compact('reports'));
    }

    public function show($id)
    {
        // Retrieve the report by ID and make sure it belongs to the authenticated user
        $report = Report::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        // Return the view with the report details
        return view('reports.show', compact('report'));
    }

    public function edit($id)
    {
        // Retrieve the report by ID and ensure it belongs to the authenticated user
        $report = Report::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        return view('reports.edit', compact('report'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'violations' => 'required|array',
            'description' => 'required|string',
            'evidence' => 'nullable|file|mimes:jpg,png,pdf,doc,docx',
        ]);

        // Retrieve the report by ID and ensure it belongs to the authenticated user
        $report = Report::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        // Handle file upload if a new file is provided
        $filePath = $report->evidence;
        if ($request->hasFile('evidence')) {
            $filePath = $request->file('evidence')->store('evidence');
        }

        // Update the report details
        $report->update([
            'violations' => implode(', ', $request->violations),
            'description' => $request->description,
            'evidence' => $filePath,
        ]);

        return redirect()->route('reports.show', $report->id)->with('success', 'Report updated successfully.');
    }


}
