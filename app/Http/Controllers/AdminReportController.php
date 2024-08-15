<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    public function index(Request $request)
    {
        // Fetch all reports and filter by the selected date range
        $query = Report::query();
    
        if ($request->startperiod && $request->endperiod) {
            $query->whereBetween('created_at', [$request->startperiod, $request->endperiod]);
        }
    
        $reports = $query->get()->groupBy('status');
    
        // Define status colors for the view
        $statusColors = [
            'New' => '#00BCD4',
            'Ongoing' => '#757575',
            'Approved' => '#4CAF50',
            'Closed' => '#FFC107',
            'Rejected' => '#F44336',
        ];
    
        $statusBackgroundColors = [
            'New' => '#E0F7FA',
            'Ongoing' => '#CFD8DC',
            'Approved' => '#C8E6C9',
            'Closed' => '#FFECB3',
            'Rejected' => '#FFCDD2',
        ];
    
        $statusTextColors = [
            'New' => '#006064',
            'Ongoing' => '#37474F',
            'Approved' => '#2E7D32',
            'Closed' => '#FF6F00',
            'Rejected' => '#B71C1C',
        ];
    
        return view('admin.reports.index', compact('reports', 'statusColors', 'statusBackgroundColors', 'statusTextColors'));
    }
    
    
    

    public function show($id)
    {
        // Fetch a specific report by its ID
        $report = Report::find($id);

        // Check if the report exists
        if (!$report) {
            return redirect()->route('admin.reports.index')->withErrors('Laporan tidak ditemukan.');
        }

        // Determine allowed statuses based on current status
        $allowedStatuses = $this->getAllowedStatuses($report->status);

        return view('admin.reports.show', compact('report', 'allowedStatuses'));
    }

    public function update(Request $request, $id)
    {
        // Fetch the report by its ID
        $report = Report::find($id);

        // Check if the report exists
        if (!$report) {
            return redirect()->route('admin.reports.index')->withErrors('Laporan tidak ditemukan.');
        }

        // Validate the request data, ensuring the status is one of the allowed statuses
        $request->validate([
            'status' => 'required|string|in:' . implode(',', $this->getAllowedStatuses($report->status)),
            'feedback' => 'nullable|string',
        ]);

        // Update the report with the new status and feedback
        $report->status = $request->input('status');
        $report->feedback = $request->input('feedback');
        $report->save();

        // Redirect back to the admin index page with a success message
        return redirect()->route('admin.reports.index')->with('success', 'Laporan telah berhasil di-update.');
    }

    private function getAllowedStatuses($currentStatus)
    {
        switch ($currentStatus) {
            case 'New':
                return ['New', 'Ongoing'];
            case 'Ongoing':
                return ['Ongoing', 'Approved', 'Rejected'];
            case 'Approved':
                return ['Approved', 'Closed'];
            case 'Rejected':
                return ['Rejected', 'Closed'];
            default:
                return [];
        }
    }

    public function print(Request $request)
    {
        // Get the status from the request
        $status = $request->input('status');

        // Fetch reports with the selected status
        $reports = Report::where('status', $status)->get();

        // Pass the reports to the print view
        return view('admin.reports.print', compact('reports', 'status'));
    }

}
