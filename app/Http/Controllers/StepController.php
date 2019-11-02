<?php

namespace App\Http\Controllers;

use App\Step;
use App\Task;
use Illuminate\Http\Request;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Task $task)
    {
        /* 
            $task->steps() 加括号调取关系
             $task->steps  不加括号直接获取值

        */

        return response()->json([
            'steps'=>$task->steps
        ],200);

   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Task $task,Request $request)
    {

        $step = $task->steps()->create([
            'name' => $request->name,
            'complete' => $request->complete
        ],201); 
        
        return response()->json([
            'step'=>$step
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function show(Step $step)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function edit(Step $step)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Task $task, Step $step)
    {
        //

        $step->update([
            'complete' =>$request->complete
        ]);

       return response()->json([
            'msg'=>'更新成功'
        ]);
    }


    public function allComputed(Task $task)
    {
    
        $task->steps()->update([
            'complete' =>1
        ]);
    }

    

    public function clearComputed(Task $task)
    {
    
        $task->steps()->where('complete',1)->delete();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task,Step $step)
    {
        $step->delete();

        return response()->json([
            'msg'=>'删除成功'
        ],204);
        
     
    }
}
