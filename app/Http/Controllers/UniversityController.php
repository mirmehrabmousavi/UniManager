<?php

namespace App\Http\Controllers;

use App\Models\Collegian;
use App\Models\Major;
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:universities|max:255',
            'image' => '',
            'address' => 'required',
            'majors' => 'required',
            'sections' => 'required',
        ]);
        University::create($request->all());
        return redirect(route('university.index'))->with('success','با موفقیت ذخیره شد.');
    }

    public function show($id)
    {
        $university = University::findOrFail($id);
        $collegians = Collegian::where('university_id', $university->id)->get();
        $majors = Major::where('university_id', $university->id)->get();
        return view('universities.show', compact('university', 'collegians', 'majors'));
    }

    public function edit($id)
    {
        $university = University::findOrFail($id);
        return view('universities.edit', compact('university'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:universities|max:255',
            'image' => '',
            'address' => 'required',
            'majors' => 'required',
            'sections' => 'required',
        ]);
        $university = University::findOrFail($id);
        $university->update($request->all());
        return redirect(route('university.index'))->with('success','با موفقیت بروزرسانی شد.');
    }

    public function destroy($id)
    {
        $university = University::findOrFail($id);
        $university->delete();
        return redirect(route('university.index'))->with('success','با موفقیت حذف شد.');
    }
}
