<?php

namespace App\Http\Controllers;

use Session;
use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student_list')->with('students', Student::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addStu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'course' => 'required',
            'address' => 'required',
            'mobile' => 'required|max:10'
        ]);

        $student = new Student;

        $student->name = $request->name;
        $student->course = $request->course;
        $student->address = $request->address;
        $student->mobile = $request->mobile;

        $student->save();

        Session::flash('success', 'successfully added');

        return redirect()->route('stu-list'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        return view('student_edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'course' => 'required',
            'address' => 'required',
            'mobile' => 'required|max:10'
        ]);

        $student = Student::find($id);

        $student->name = $request->name;
        $student->course = $request->course;
        $student->address = $request->address;
        $student->mobile = $request->mobile;

        $student->save();

        Session::flash('success', 'successfully updated');

        return redirect()->route('stu-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        $student->forceDelete();

        Session::flash('success', 'Deleted');

        return redirect()->back();
    }
}
