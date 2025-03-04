<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        $tasks = Task::where( 'user_id', Auth::id() )->get();
        return view( 'tasks.index', compact( 'tasks' ) );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        return view( 'tasks.create' );
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        $request->validate( [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,completed',
        ] );

        Task::create( [
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ] );

        return redirect()->route( 'tasks.index' )->with( 'success_message', 'Tâche ajoutée avec succès.' );
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {

    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( Task $task ) {
        $this->authorize( 'update', $task );
        return view( 'tasks.edit', compact( 'task' ) );
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, Task $task ) {
        $this->authorize( 'update', $task );

        $request->validate( [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,completed',
        ] );

        $task->update( $request->all() );

        return redirect()->route( 'tasks.index' )->with( 'success_message', 'Tâche mise à jour.' );
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( Task $task ) {
        $this->authorize( 'delete', $task );
        $task->delete();

        return redirect()->route( 'tasks.index' )->with( 'success_message', 'Tâche supprimée.' );
    }
}
