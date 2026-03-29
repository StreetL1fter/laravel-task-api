<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perpage = $request->get('per_page',10);
        $tasks = Task::paginate($perpage);

        return response()->json($tasks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(['title'=> 'required|string|max:255',
        'description' => 'nullable|string',
        'status' => 'string|in:pending,done,cancelled']);
        $data_create = Task::create($validate);
        return response()->json($data_create,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_find = Task::find($id);
        if(!$data_find){
            return response()->json([
                "message" => 'Task not found'
            ],404
            );
        }
        return response->json($data_find);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_model = Task::find($id);
        if(!$data_model){
            return response()->json([
                'message' => "Task not found"
            ],404);
        }
        $validate_update = $request->validate(['title'=> 'required|string|max:255',
        'description' => 'nullable|string',
        'status' => 'string|in:pending,done,cancelled']);

        $data_model->update($validate_update);
        return response()->json($data_model,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy_model = Task::find($id);
        if(!$destroy_model){
            return response()->json([
                "message" => "Task not found"
            ],404);
        }
        $destroy_model->delete();
        return response()->json(['message' => 'Task deleted'],204);
    }
}
