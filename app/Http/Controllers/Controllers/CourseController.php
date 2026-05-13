<?php
namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        // Получаем все курсы
        $courses = Course::all();

        // Отправляем данные в представление
        return view('curs', compact('courses'));
    }
}

