<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\view\view;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $batches = Batch::all();
        return view('batches.index')->with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        $courses = Course::pluck('name', 'id');
        return view('batches.create', compact('courses'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with('flash_message', 'Batch Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $batch = Batch::find($id);

        return view('batches.show')->with('batch', $batch);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $batches = Batch::find($id);
        return view('batches.edit')->with('batch', $batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $batches = Batch::find($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('batches')->with('flash_message', 'Batch Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message', 'Batch deleted!');
    }
}
