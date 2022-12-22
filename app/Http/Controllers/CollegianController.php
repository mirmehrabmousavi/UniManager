<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollegianRequest;
use App\Models\Collegian;
use Illuminate\Http\Request;

class CollegianController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $collegians = Collegian::latest()->paginate(10);
        return view('collegians.index', compact('collegians'));
    }

    public function create()
    {
        return view('collegians.create');
    }

    public function store(CollegianRequest $request)
    {
        Collegian::create($request->validated());
        return redirect(route('collegian.index'))->with('success','با موفقیت ذخیره شد.');
    }

    public function show($id)
    {
        $collegian = Collegian::findOrFail($id);
        return view('collegians.show', compact('collegian'));
    }

    public function edit()
    {
        return view('collegians.edit');
    }

    public function update(Request $request)
    {

    }

    public function destroy()
    {

    }
}
