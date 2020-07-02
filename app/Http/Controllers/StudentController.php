<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.add-student');
    }

    public function newStudent(Request $request)
    {
       Student::create($request->all());

        return redirect()->back()->with('message', 'Student info Save Successfully');
    }

    public function viewStudent()
    {
        $students = Student::all();
        return view('student.view-student', compact('students'));
    }

    public function editStudent($id)
    {
        $student = Student::find($id);
        return  view('student.edit-student', ['student'=>$student]);
    }
    public function updateStudent(Request $request)
    {
        $student = Student::find($request->id);

        $student->name =$request->name;
        $student->mobile =$request->mobile;
        $student->email =$request->email;
        $student->save();

        return redirect("/student/view-student")->with('message', 'Student info update Successfully');
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect("/student/view-student")->with('message', 'Student info delete Successfully');

    }

}
