<?php

namespace App\Http\Controllers;

use App\Models\ContactReason;
use Illuminate\Http\Request;

class ContactReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $contact_reasons = ContactReason::latest()->paginate(10);
        return view('contacts-reason.index', compact('contact_reasons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('contacts-reason.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        ContactReason::create($request->all());
        return redirect(route('contact-reason.index'))->with('success','stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactReason  $contactReason
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    /*public function show($id)
    {
        $contact_reason = ContactReason::findOrFail($id);
        return view('contacts-reason.show', compact('contact_reason'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactReason  $contactReason
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $contact_reason = ContactReason::findOrFail($id);
        return view('contacts-reason.edit', compact('contact_reason'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactReason  $contactReason
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $contact_reason = ContactReason::findOrFail($id);
        $contact_reason->update($request->all());
        return redirect(route('contact-reason.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactReason  $contactReason
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $contact_reason = ContactReason::findOrFail($id);
        $contact_reason->delete();
        return redirect(route('contact-reason.index'));
    }
}
