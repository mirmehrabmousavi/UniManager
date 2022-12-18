<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollegianRequest;
use App\Models\Collegian;

class CollegianController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $collegians = Collegian::latest()->paginate(10);
        return view('collegian.index', compact('collegians'));
    }

    public function create()
    {
        return view('collegian.create');
    }

    public function store(CollegianRequest $request)
    {
        Collegian::create($request->validated());
        return redirect(route('admin.collegian.index'))->with('success','با موفقیت ذخیره شد.');
    }

    public function show($id)
    {
        $collegian = Collegian::findOrFail($id);
        return view('collegian.show', compact('collegian'));
    }
}
