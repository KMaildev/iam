<?php

namespace App\Http\Controllers;

use App\Models\CourseSchedule;
use App\Models\Teacher;
use App\Models\Tokutei;
use Illuminate\Http\Request;

class AsuTomorrowController extends Controller
{
    public function index()
    {
        $tokuteis = Tokutei::all();
        $teachers = Teacher::all();
        $course_schedules = CourseSchedule::all();
        return view('partners.asu', compact('tokuteis', 'teachers', 'course_schedules'));
    }
}
