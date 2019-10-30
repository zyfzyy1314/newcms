<form action="{{route('tasks.store')}}" method="POST" >
        <input type="hidden" value="{{$project->id}}" name='project_id'>
        @csrf    
                <div class="align-items-center">                     
                <div class="col-auto">
                    <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="项目名称" name="task_name">
                    <button type="submit" class="btn btn-primary mb-2 ml-1">Submit</button>
                    </div>
                </div>
                </div>
</form>   