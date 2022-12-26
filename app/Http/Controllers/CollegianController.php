<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'static_numbers' => 'required',
            'numbers' => 'required',
            'known_numbers' => 'required',
            'document_status' => 'required',
            'document_list' => 'required',
        ]);

        Collegian::create($request->all());
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
