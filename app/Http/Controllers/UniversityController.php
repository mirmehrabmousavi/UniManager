<?php

namespace App\Http\Controllers;

use App\Http\Requests\UniversityRequest;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $universities = University::latest()->paginate(10);
        return view('universities.index', compact('universities'));
    }

    public function create()
    {
        return view('universities.create');
    }

    public function store(UniversityRequest $request)
    {
        University::create($request->validated());
        return redirect(route('admin.university.index'))->with('success','با موفقیت ذخیره شد.');
    }

    public function show($id)
    {
        $university = University::findOrFail($id);
        return view('universities.show', compact('university'));
    }

    public function edit($id)
    {
        $university = University::findOrFail($id);
        return view('universities.edit', compact('university'));
    }

    public function update(Request $request, $id)
    {
        $university = University::findOrFail($id);
        $university->update($request->validated());
        return redirect(route('admin.university.index'))->with('success','با موفقیت بروزرسانی شد.');
    }

    public function destroy($id)
    {
        $university = University::findOrFail($id);
        $university->delete();
        return redirect(route('admin.university.index'))->with('success','با موفقیت حذف شد.');
    }
}
