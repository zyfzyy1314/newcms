<?php
namespace App\Http\ViewComposer;
use Illuminate\View\View;
use App\Repositories\TasksRepository;


class TaskCountComposer
{

    protected $repo;

    public function __construct(TasksRepository $repo)
    {
        $this->repo = $repo;
    }
    

    public function compose(view $view)
    {
        if(auth()->user())
        {
            $view->with([
                'total'=>$this->repo->doneCount() + $this->repo->todoCount(),
                'dones'=>$this->repo->doneCount(),
                'todos'=>$this->repo->todoCount()
            ]); 
        }    
    }

}


