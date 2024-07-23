<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('report');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('final');
    }

    public function detail()
    {
        return view('reportdetail');
    }

    public function adminreport()
    {
        return view('adminreport');
    }

    public function givefeedback()
    {
        return view('feedback');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
