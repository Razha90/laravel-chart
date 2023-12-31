<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\UserChart;

class UserChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usersChart = new UserChart;
        $usersChart->labels(['Jan', 'Feb', 'Mar']);
        $usersChart->dataset('Users by trimester', 'line', [10, 25, 13]);
        return view('users', compact('usersChart'));
 
    }
}