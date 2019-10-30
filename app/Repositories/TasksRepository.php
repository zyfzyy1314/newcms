<?php

namespace App\Repositories;
use App\Project;
use App\Task;
use Image;

class TasksRepository 
{


    public function find($id)
    {
        return Task::findOrFail($id);
    }

    public function create($request)
    {
       return Task::create([
            'name' =>$request->task_name,
            'project_id'=>$request->project_id,
            'complete'=>0
        ]);

    }

    public function todo($project)
    {
        $todo = $project->tasks()->where('complete',0)->get();
        return $todo;
    }

    public function done($id)
    {
        $done = $project->tasks()->where('complete',1)->get();
        return $done;
    }

    public function todoCount()
    {
        $todoCount = auth()->user()->tasks()->where('complete',0)->count();
        return $todoCount;
    }

    public function doneCount()
    {
        $doneCount = request()->user()->tasks()->where('complete',1)->count();
        return $doneCount;
    }



    public function update($request,$id)
    {
        $task = $this->find($id);

        $task->name = $request->task_name;
        $task->project_id = $request->task_change_project;
        
        $task->save();
    }

    public function check($id)
    {
        $task = $this->find($id);

        $task->complete = 1;

        $task->save();

    }

    public function delete($id)
    {
        return $this->find($id)->delete();
    
    }

}



