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

    public function store(UniversityRequest $universityRequest)
    {
        University::create($universityRequest->validated());
        return redirect(route('university.index'))->with('success','با موفقیت ذخیره شد.');
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

    public function update(UniversityRequest $universityRequest, $id)
    {
        $university = University::findOrFail($id);
        $university->update($universityRequest->validated());
        return redirect(route('university.index'))->with('success','با موفقیت بروزرسانی شد.');
    }

    public function destroy($id)
    {
        $university = University::findOrFail($id);
        $university->delete();
        return redirect(route('university.index'))->with('success','با موفقیت حذف شد.');
    }
}
