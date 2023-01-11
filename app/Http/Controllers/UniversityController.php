<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Section;
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
        $universities = University::with(['collegians'])->with(['majors'])->with(['sections'])->latest()->paginate(10);
        return view('universities.index', compact('universities'));
    }

    public function create()
    {
        $majors = Major::all();
        $sections = Section::all();
        return view('universities.create', compact('majors', 'sections'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:universities|max:255',
            'image' => 'required',
            'address' => 'required',
        ]);
        $university = University::create([
            'name' => $request->name,
            'image' => $request->image,
            'address' => $request->address,
        ]);
        if ($request->has('majors')) {
            $university->majors()->attach($request->majors);
        }
        if ($request->has('sections')) {
            $university->sections()->attach($request->sections);
        }
        $notification = array(
            'message' => 'با موفقیت ذخیره شدید :)',
            'alert-type' => 'success'
        );
        return redirect(route('university.index'))->with($notification);
    }

    public function show($id)
    {
        $university = University::findOrFail($id);
        return view('universities.show', compact('university'));
    }

    public function edit($id)
    {
        $majors = Major::all();
        $sections = Section::all();
        $university = University::findOrFail($id);
        return view('universities.edit', compact('university', 'majors', 'sections'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:universities|max:255',
            'image' => 'required',
            'address' => 'required',
        ]);
        $university = University::findOrFail($id);
        $university->update([
            'name' => $request->name,
            'image' => $request->image,
            'address' => $request->address,
        ]);
        $notification = array(
            'message' => 'با موفقیت بروزرسانی شدید :)',
            'alert-type' => 'success'
        );
        return redirect(route('university.index'))->with($notification);
    }

    public function destroy($id)
    {
        $university = University::findOrFail($id);
        $university->delete();
        $notification = array(
            'message' => 'با موفقیت حذف شدید :)',
            'alert-type' => 'success'
        );
        return redirect(route('university.index'))->with($notification);
    }
}
