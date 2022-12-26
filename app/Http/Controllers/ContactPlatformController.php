<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactPlatformRequest;
use App\Models\ContactPlatform;
use Illuminate\Http\Request;

class ContactPlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $contact_platforms = ContactPlatform::latest()->paginate(10);
        return view('contacts-platform.index', compact('contact_platforms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('contacts-platform.create');
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
        ContactPlatform::create($request->all());
        return redirect(route('contact-platform.index'))->with('success','stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactPlatform  $contactPlatform
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    /*public function show($id)
    {
        $contact_platform = ContactPlatform::findOrFail($id);
        return view('contacts-platform.show', compact('contact_platform'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactPlatform  $contactPlatform
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $contact_platform = ContactPlatform::findOrFail($id);
        return view('contacts-platform.edit', compact('contact_platform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactPlatform  $contactPlatform
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $contact_platform = ContactPlatform::findOrFail($id);
        $contact_platform->update($request->validated());
        return redirect(route('contact-platform.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactPlatform  $contactPlatform
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $contact_platform = ContactPlatform::findOrFail($id);
        $contact_platform->delete();
        return redirect(route('contact-platform.index'));
    }
}
