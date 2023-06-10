<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index(Request $r, Task $task){
        $tasks = $task->all()->take(5);
        $authUser = Auth::user();
        return view('index', ['tasks' => $tasks, 'authUser' => $authUser]);
    }
}
