<?php

namespace App\Http\Controllers;

use App\Models\LESSON;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function userindex() {
        $tasks = response()->json(User::all());
        return $tasks;
    }
    public function index()
    {
        $tasks = response()->json(LESSON::all());
        return $tasks;
    }
    public function show($id)
    {
        $tasks = response()->json(LESSON::find($id));
        return $tasks;
    }
    public function store(Request $request)
    {
        $task = new LESSON();
        $task->status = $request->status;
        $task->subject_id=$request->subject_id;
        $task->user_id=$request->id;
        $task->save();

    }
    public function update(Request $request,$id)
    {
        $task = LESSON::find($id);
        $task->name = $request->name;
        $task->email=$request->email;
        $task->save();
    }

    public function newView(){
        $users = LESSON::all();
        return view('task.new',['users' =>$users]);
    }
    public function editView($id){
        $user = LESSON::all();
        $task = User::find($id);
        return view('task.edit',['users' => $user, 'task'=> $task]);
    }
    public function listView(){
        $lessons = LESSON::all();
        return view('task.list',['lessons'=>$lessons]);
    }

}
