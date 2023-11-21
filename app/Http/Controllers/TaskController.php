<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = [
            'Task 1',
            'Task 2',
            'Task 3',
        ];

        return view('tasks.index', compact('tasks'));
    }
}
