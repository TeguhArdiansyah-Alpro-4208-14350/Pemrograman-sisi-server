<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class StatistikController extends Controller
{
    public function index()
    {
        $jumlahUserBuatCourse = User::has('courses')->count();
        $jumlahUserTanpaCourse = User::doesntHave('courses')->count();
        $rataRataCoursePerUser = User::withCount('courses')->avg('courses_count');
        $userPalingBanyakCourse = User::withCount('courses')->orderByDesc('courses_count')->first();
        $userTanpaCourse = User::doesntHave('courses')->get();
    
        return view('statistik.index', compact(
            'jumlahUserBuatCourse',
            'jumlahUserTanpaCourse',
            'rataRataCoursePerUser',
            'userPalingBanyakCourse',
            'userTanpaCourse'
        ));
    }
}
