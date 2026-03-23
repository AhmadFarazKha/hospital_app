<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    // پبلک لسٹ: جہاں صرف ڈیٹا نظر آئے گا
    public function publicIndex()
    {
        $groups = Doctor::all()->groupBy('specialization');
        return view('doctors.public_list', compact('groups'));
    }

    // ایڈمن لسٹ: جہاں تمام کنٹرولز (Add/Edit/Delete) ہوں گے
    public function index()
    {
        $groups = Doctor::all()->groupBy('specialization');
        return view('doctors.index', compact('groups'));
    }

    public function create() { return view('doctors.create'); }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required', 'specialization' => 'required']);
        Doctor::create($request->only('name', 'specialization', 'description'));
        return redirect('/doctors')->with('success', 'ڈاکٹر شامل ہو گیا');
    }

    public function edit(Doctor $doctor) { return view('doctors.edit', compact('doctor')); }

    public function update(Request $request, Doctor $doctor)
    {
        $doctor->update($request->only('name', 'specialization', 'description'));
        return redirect('/doctors')->with('success', 'ریکارڈ اپ ڈیٹ ہو گیا');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect('/doctors')->with('success', 'ریکارڈ حذف کر دیا گیا');
    }
}