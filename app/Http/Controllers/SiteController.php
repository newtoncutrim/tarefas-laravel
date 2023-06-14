<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



class SiteController extends Controller
{
    public function index(Request $r, Task $task){

        $date = $r->date;
        if($date){
            $filterDate = $r->date ;
        } else {
            $filterDate = date('Y-m-d');
        }

        $tasks = $task->whereDate('due_date', $filterDate)->get();
        $authUser = Auth::user();
        $carbon = Carbon::createFromDate($filterDate);

        // $date_string = $carbon->translatedFormat('d \d\e M');
        $date_string = $carbon->translatedFormat('d') . ' de ' .ucfirst($carbon->translatedFormat('M')) ;
        $datePrev = $carbon->subDay()->format('Y-m-d');
        $dateNext = $carbon->addDay(2)->format('Y-m-d');



        return view('index', compact('tasks', 'authUser', 'date_string', 'datePrev', 'dateNext'));
    }
}
