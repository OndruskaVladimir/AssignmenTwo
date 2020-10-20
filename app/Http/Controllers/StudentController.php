<?php


namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show($id)
    {
        $student = Student::find($id);
        return view('updateUser', ['student' => $student]);
    }

    public function insert(Request $request)
    {
        $student = new Student();
        $student->name = $request->input('name');
        $student->GPA = $request->input('GPA');
        $student->age = $request->input('age');
        $student->save();

        return response()->view('adduser');
    }

    public function update($id, Request $request)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->GPA = $request->input('GPA');
        $student->age = $request->input('age');
        $student->update();

        return redirect()->action('StudentController@showAll');

    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->action('StudentController@showAll');
    }

    public function showAll()
    {
        $students = Student::all();
        return response()->view('showAllUsers', ['students' => $students]);
    }

    public function getAddUserView()
    {
        return view('adduser');
    }
}
