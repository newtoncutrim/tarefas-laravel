<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){

    }

    public function new(Request $r, Category $category){
        $categories = $category->all();
        $data['categories'] = $categories;
        return view('tasks.create', $data);
    }

    public function create_action(Request $r, Task $t)
    {
        $data = $r->only(['title', 'due_date', 'category_id', 'description']);
        $data['user_id'] = 1;
        $result = $t->create($data);
        $result->save();

        return redirect(route('home'));
    }

    public function edit(Request $r, Task $task, Category $category){
        $id = $r->id;
        $data = $task->find($id);
        if(!$data){
            return redirect(route('home'));
        }
        $categories = $category->all();
        $data['categories'] = $categories;

        $data['task'] = $data;

        return view('tasks.edit', $data);


    }

    public function edit_action(Request $r){
        return 'ok';
    }

    public function delete(Request $r){
        return redirect(route('home'));
    }
}
