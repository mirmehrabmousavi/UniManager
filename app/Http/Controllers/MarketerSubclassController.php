<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarketerSubclassRequest;
use App\Models\MarketerSubclass;
use Illuminate\Http\Request;

class MarketerSubclassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $subclasses = MarketerSubclass::latest()->paginate(10);
        return view('marketers-subclass.index', compact('subclasses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('marketers-subclass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(MarketerSubclassRequest $marketerSubclassRequest)
    {
        MarketerSubclass::create($marketerSubclassRequest->validated());
        return redirect(route('subclass.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MarketerSubclass  $marketerSubclass
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $subclass = MarketerSubclass::findOrFail($id);
        return view('marketers-subclass.edit', compact('subclass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\MarketerSubclass  $marketerSubclass
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(MarketerSubclassRequest $marketerSubclassRequest, $id)
    {
        $subclass = MarketerSubclass::findOrFail($id);
        $subclass->update($marketerSubclassRequest->validated());
        return redirect(route('subclass.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MarketerSubclass  $marketerSubclass
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $subclass = MarketerSubclass::findOrFail($id);
        $subclass->delete();
        return redirect(route('subclass.index'));
    }
}
