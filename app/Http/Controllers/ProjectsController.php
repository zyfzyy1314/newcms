<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Repositories\ProjectsRepository;
use App\Http\Requests\createProjectRequest;
use App\Http\Requests\editProjectRequest;


class ProjectsController extends Controller
{
       
    
       protected $repo;
              
       public function __construct(ProjectsRepository $repo)
       {
            $this->repo = $repo;
            $this->middleware('auth');
       }
       

       public function index()
       {
            $projects=$this->repo->list();
            return view('welcome',compact('projects'));
       }

       public function show($id)
       {
           $projects = $this->repo->find($id);
           return view('projects.show',compact('projects'));
       }

        public function store(createProjectRequest $request)
        {
            $this->repo->create($request); 
            return back();
        }

        public function destory($id)
        {

            $this->repo->delete($id);
            return back();
        }

        public function update($id,editProjectRequest $request)
        {
            $this->repo->update($id,$request); 
            return back();
        }
        
        


}
