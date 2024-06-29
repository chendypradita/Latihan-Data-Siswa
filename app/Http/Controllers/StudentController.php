<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Student::query();

        if($search) {
            $query->where('nama', 'like', "%$search%");
        }

        $students = $query->get();

        return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $search = $request->input('search');
;

        $student = new Student();
        $student->nama = $request->nama;
        $student->tempat_lahir = $request->tempat_lahir;
        $student->tanggal_lahir = $request->tanggal_lahir;
        $student->sekolah = $request->sekolah;
        $student->keterangan = $request->keterangan;

        $student->save();

        $query = Student::query();

        if($search) {
            $query->where('nama', 'like', "%$search%")
                  ->orWhere('tempat_lahir', 'like', "%$search%")
                  ->orWhere('sekolah', 'like', "%$search%");
        }

        $students = $query->get();

        // dd($student);
        return view('index', ['students' => $students]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $students = Student::findOrFail($id);

        return view('edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function change(Request $request, $id)
    {
        $search = $request->input('search');

        $student = Student::findOrFail($id);
        $student->update($request->all());

        $query = Student::query();

        if ($search) {
            $query->where('nama', 'like', "%$search%")
                  ->orWhere('tempat_lahir', 'like', "%$search%")
                  ->orWhere('sekolah', 'like', "%$search%");
        }

        $students = $query->get();

        return redirect()->route('students.index')->with('students', $students);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapus($id, Request $request)
    {
        // dd($request);
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect()->back();
    }
}
