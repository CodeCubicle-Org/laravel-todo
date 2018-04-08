<?php

namespace LaravelPH\LaravelToDo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        echo 'This is a ToDo app';
    }
}
