<?php

namespace App\Http\Controllers;

use App\Models\Teammember;
use Illuminate\Http\Request;

class TeammemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show teammembers
        return view('teammembers/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create a teammember
        return view('teammembers/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store new team member in database
        $data = $request->except('_token');
        Team::create($data);
        return redirect('/teammembers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teammember  $teammember
     * @return \Illuminate\Http\Response
     */
    public function show(Teammember $teammember)
    {
        // Show a single teammember
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teammember  $teammember
     * @return \Illuminate\Http\Response
     */
    public function edit(Teammember $teammember)
    {
        // Update a single teammember
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teammember  $teammember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teammember $teammember)
    {
        // Update the teammember in the database
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teammember  $teammember
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teammember $teammember)
    {
        // Delete the teammember out of the database
        // This action is irreversible.
    }
}
