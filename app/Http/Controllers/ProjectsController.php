<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Image;

class ProjectsController extends Controller
{
    //
        public function store(Request $request){

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

        public function thumb($request){

            if($request->hasFile('project_thumbnail')){
                $thumb = $request->project_thumbnail;
                $name = $thumb->hashName();
                $thumb ->storeAs('public/thumbs/orihinal',$name);

                $path = storage_path('app/public/thumbs/cropped/'.$name);

                Image::make($thumb)->resize(200,90)->save($path);

                return $name;

            }



        }

        


}
