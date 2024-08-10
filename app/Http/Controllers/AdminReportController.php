<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    public function index()
    {
        $reports = Report::all()->groupBy(function($report) {
            return ucfirst(strtolower($report->status));
        });
    
        return view('admin.reports.index', compact('reports'));
    }
    

    public function show($id)
    {
        // Fetch a specific report by its ID
        $report = Report::find($id);

        // Check if the report exists
        if (!$report) {
            return redirect()->route('admin.reports.index')->withErrors('Report not found.');
        }

        return view('admin.reports.show', compact('report'));
    }

    public function update(Request $request, $id)
    {
        // Fetch the report by its ID
        $report = Report::find($id);

        // Check if the report exists
        if (!$report) {
            return redirect()->route('admin.reports.index')->withErrors('Report not found.');
        }

        // Validate the request data
        $request->validate([
            'status' => 'required|string|in:Ongoing,Approved,Closed,Rejected',
            'feedback' => 'nullable|string',
        ]);

        // Update the report with the new status and feedback
        $report->status = ucfirst(strtolower($request->input('status')));
        $report->feedback = $request->input('feedback');
        $report->save();

        // Redirect back to the reports index with a success message
        return redirect()->route('admin.reports.index')->with('success', 'Report updated successfully.');
    }
}
