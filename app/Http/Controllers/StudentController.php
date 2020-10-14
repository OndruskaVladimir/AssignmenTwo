<?php


namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function show($id)
    {
        $student = Student::find($id);
        echo $student->name . "<br>";
        echo $student->GPA . "<br>";
        echo $student->age . "<br>";
        echo $student->created_at . "<br>";
        echo $student->updated_at;
    }

    public function insert()
    {
        $student = new Student();
        $student->name = Str::random(20);
        $student->GPA = mt_rand(1, 5);
        $student->age = mt_rand(1, 80);
        $student->save();
    }

    public function update($id)
    {
        $student = Student::where("id", "=", $id)->firstOrFail();
        $student->update(["age" => mt_rand(1, 80)]);
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
    }

    public function showAll()
    {
        $students = Student::all();

        foreach ($students as $student) {
            echo $student->name . " " . $student->GPA . " " . $student->age . " " . $student->updated_at . "<br>";
        }
    }
}
