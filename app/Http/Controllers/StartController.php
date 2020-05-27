<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function startClass()
    {
        $student = new Student();
        $student->joinClass();
    }

    public function stopClass()
    {
        $teacher = new Teacher();
        $teacher->test();
    }
}
