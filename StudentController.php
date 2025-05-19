<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function index()
    // {
    //     $students = Student::latest()->paginate(10);
    //     return view('students.index', compact('students'));
    // }

    public function create()
    {
        return view('students.create');
    }

    public function list()
    {
        return view('students.list');
    }







































    //     public function store(Request $request)
    //     {
    //         $validated = $request->validate([
    //             'academic_year' => 'required|string',
    //             'class' => 'required|string',
    //             'section' => 'required|string',
    //             'admission_id' => 'nullable|string',
    //             'admission_date' => 'required|date',
    //             'first_name' => 'required|string|max:50',
    //             'last_name' => 'required|string|max:50',
    //             'dob' => 'required|date',
    //             'gender' => 'required|string',
    //             'religion' => 'nullable|string',
    //             'email' => 'nullable|email',
    //             'phone' => 'required|string',
    //             'country' => 'required|string',
    //             'address' => 'required|string',
    //             'photo' => 'required|image|max:2048',
    //             'birth_certificate' => 'required|file|max:2048',
    //             'parent_id_proof' => 'nullable|file|max:2048'
    //         ]);

    //         // Handle file uploads
    //         if ($request->hasFile('photo')) {
    //             $validated['photo'] = $request->file('photo')->store('students/photos', 'public');
    //         }

    //         if ($request->hasFile('birth_certificate')) {
    //             $validated['birth_certificate'] = $request->file('birth_certificate')->store('students/documents', 'public');
    //         }

    //         if ($request->hasFile('parent_id_proof')) {
    //             $validated['parent_id_proof'] = $request->file('parent_id_proof')->store('students/documents', 'public');
    //         }

    //         Student::create($validated);

    //         return redirect()->route('students.index')->with('success', 'Student added successfully!');
    //     }

    //     // Other controller methods (show, edit, update, destroy)...
}
