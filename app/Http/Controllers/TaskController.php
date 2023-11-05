<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function create(Request $req){
        return view('task.create');
    }

    public function store(Request $req){
        DB::beginTransaction();
        try {
            $task = Task::create([
                'task_name'=>$req->name, 
                'task_description'=>$req->description,  
                'task_priority'=>$req->priority, 
                'task_type'=>$req->type, 
                'task_from_res'=>$req->resident_task, 
                'task_complain_no'=>$req->complain_no, 
                'task_expire'=>$req->expire, 
                'created_by'=>auth()->user()->id, 
                'created_at'=>date('Y-m-d H:i:s'), 
            ]);
            DB::commit();
            return redirect()->route('task.create')
            ->withSuccess(__('Task created successfully.'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('task.create')
            ->withErrors(__('Something went wrong!!'));
        }
    }

    public function index(){
        $tasks = Task::select('task.*','users.first_name')->join('users','users.id','task.created_by')->where('task.is_active',1)->get();
        return view('task.index')->with(['tasks'=>$tasks]);
    }

    public function show(Task $task){
        return view('task.show', [
            'task' => $task,
            'user' => User::where('id',$task->created_by)->value('first_name'),
        ]);

    }

    public function edit(Task $task) 
    {
        return view('task.edit', [
            'task' => $task,
        ]);
    }

    public function update(Task $task, Request $req){
        DB::beginTransaction();
        try {
            $task->update([
                'task_name'=>$req->name,
                'task_description'=>$req->description,
                'task_priority'=>$req->priority,
                'task_type'=>$req->type,
                'task_expire'=>$req->type==2?$req->expire:null,
                'task_from_res'=>$req->resident_task,
                'task_complain_no'=>$req->resident_task==1?$req->complain_no:null,
                'updated_by'=>auth()->user()->id,
                'updated_date'=>date('Y-m-d H:i:s')
            ]);
            DB::commit();
            return redirect()->route('task.index')
            ->withSuccess(__('Task Updated successfully.'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('task.index')
            ->withErrors(__('Something went wrong!!'));
        }
    }
    public function destroy(Task $task) 
    {
        $task->update(['is_active'=>0]);

        return redirect()->route('task.index')
            ->withSuccess(__('Task deleted successfully.'));
    }
}
