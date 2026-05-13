<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ITCourseController extends Controller
{
    public function index()
    {
        return view('it-courses');
    }
}
