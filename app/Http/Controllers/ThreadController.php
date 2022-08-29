<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index()
    {
        return Thread::all();
    }

    public function store(Request $request)
    {

        $category = Thread::create($request->all());
        return response()->json([
            'status' => true,
            'category' => $category
        ]);
    }
}
