<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $r, Task $task){
        $tasks = $task->all()->take(5);
        return view('index', ['tasks' => $tasks]);
    }
}
