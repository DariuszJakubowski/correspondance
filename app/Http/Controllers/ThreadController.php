<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Role;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Http\Request;

class ThreadController extends Controller
{

    public function index()
    {
//        return Thread::with('items')->get();
        return Post::with(['thread', 'createdBy', 'currentRecipient', 'recipients', 'files'])->first();
//        return response()->json(['data' => Role::with('users')->get(), 'user' => auth()->user()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json([
            'status' => true,
            'auth' => auth()->user()
        ]);
    }

    public function store(Request $request)
    {
        $thread = Thread::create($request->all());
        return response()->json([
            'status' => true,
            'thread' => $thread
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread)
    {
        return $thread->with('posts')->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        return response()->json([
            'status' => true,
            'thread' => $thread
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Thread $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        return response()->json([
            'status' => true,
            'thread' => $thread->update($request->all())
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Thread $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        return response()->json([
            'status' => Thread::destroy($thread)
        ]);
    }
}

