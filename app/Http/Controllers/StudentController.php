<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=Student::all();
        return view('student.allstudents',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required|max:25|min:4',
        'phone' => 'required|unique:students|max:12|min:9',
        'email' => 'required|unique:students',
    ]);
        $student = new Student;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();

        $notification=array(
                'message'=>'Successfully Added!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::find($id);
        return view('student.viewstudent',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::findorfail($id);
        return view('student.edit',compact('student'));
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
        $student=Student::findorfail($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;

        $student->save();
        $notification=array(
                'message'=>'Successfully Updated!',
                'alert-type'=>'info'
            );
            return Redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::findorfail($id);
        $student->delete();
        //DB::table(students)->where('id',$id)->delete();
        $notification=array(
                'message'=>'Successfully Deleted!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }
}
