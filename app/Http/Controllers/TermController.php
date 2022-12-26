<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $terms = Term::latest()->paginate(10);
        return view('terms.index', compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('terms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:terms',
            'major_id' => 'required',
            'section_id' => 'required',
            'supported_fee' => 'required',
            'university_fee' => 'required',
        ]);
        Term::create($request->all());
        return redirect(route('term.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $term = Term::findOrFail($id);
        return view('terms.edit', compact('term'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:terms',
            'major_id' => 'required',
            'section_id' => 'required',
            'supported_fee' => 'required',
            'university_fee' => 'required',
        ]);
        $term = Term::findOrFail($id);
        $term->update($request->all());
        return redirect(route('term.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $term = Term::findOrFail($id);
        $term->delete();
        return redirect(route('term.index'));
    }
}
