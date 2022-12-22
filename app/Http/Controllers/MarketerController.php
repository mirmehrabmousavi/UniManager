<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarketerRequest;
use App\Models\Marketer;

class MarketerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $marketers = Marketer::latest()->paginate(10);
        return view('marketers.index', compact('marketers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('marketers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(MarketerRequest $marketerRequest)
    {
        Marketer::create($marketerRequest->validated());
        return redirect(route('marketer.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marketer  $marketer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $marketer = Marketer::findOrFail($id);
        return view('marketers.edit', compact('marketer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Marketer  $marketer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(MarketerRequest $marketerRequest, $id)
    {
        $marketer = Marketer::findOrFail($id);
        $marketer->update($marketerRequest->validated());
        return redirect(route('marketer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marketer  $marketer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $marketer = Marketer::findOrFail($id);
        $marketer->delete();
        return redirect(route('marketer.index'));
    }
}
