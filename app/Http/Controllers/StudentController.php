<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $students = Student::with("section:id,name")->get();
        // $students = Student::orderBy('id','desc')->paginate(5);
        $students = Student::when($request->search,function($query) use($request){
            return $query->whereAny([
                'name','email','address'
            ],"LIKE","%".$request->search."%");
        })->orderBy('id','desc')->paginate(5);
        return view('pages.erp.common.student.index',compact('students'));
        // return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pages.erp.common.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('pages.erp.common.student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('pages.erp.common.student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
    // Custom Methods

    public function trash(){
        $students = Student::onlyTrashed()->paginate(5);
        return view('pages.erp.common.student.trash',compact('students'));
    }
    public function restore($id){
        $students = Student::withTrashed()->find($id)->restore();
        return redirect()->route('students.index');
    }
    public function forcedDelete($id){
        $students = Student::withTrashed()->find($id)->forceDelete();
        return redirect()->route('students.trash');
    }
}
