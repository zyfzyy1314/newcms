<?php

namespace App\Repositories;
use App\Project;

use Image;

class ProjectsRepository 
{


    public function create($request)
    {
        $request->user()->projects()->create([
            'name' => $request->project_name,
            'thumbnail' =>$this->thumb($request)
        ]);

/*
        Project::create([
            'name' => $request->project_name,
            'thumbnail' =>$request->project_thumbnail,     
            'user_id' =>$request->user()->id              
        ]);

*/   
    
    }

    public function list()
    {
        return request()->user()->projects()->get();
    }

    public function thumb($request)
    {

        if($request->hasFile('project_thumbnail'))
        {

            $thumb = $request->project_thumbnail;
            $name = $thumb->hashName();
            $thumb ->storeAs('public/thumbs/orihinal',$name);

            $path = storage_path('app/public/thumbs/cropped/'.$name);

            Image::make($thumb)->resize(200,90)->save($path);

            return $name;
        }    
    }

    public function find($id){

        return Project::findOrFail($id);

    }

    public function update($id,$request)
    {
        $project = $this->find($id);
        $project->name = $request->project_name;

        if($request->hasFile('project_thumbnail'))
        {
            $project->thumbnail = $this->thumb($request);
        } 
           
        $project->save();
    }


    public function delete($id){

        $this->find($id)->delete();
        return back();

    }

}



