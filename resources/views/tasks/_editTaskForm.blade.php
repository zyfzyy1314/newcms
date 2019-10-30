<button  class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editTaskModal-{{$todo->id}}">
        <i class="fa fa-cog"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="editTaskModal-{{$todo->id}}" tabindex="-1" role="dialog" aria-labelledby="editTaskModalLabel-{{$todo->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editTaskModalLabel-{{$todo->id}}"> 
          修改项目内容
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
          <form action="{{route('tasks.update',$todo->id)}}" method="POST" >
          @csrf
          <input type="hidden" name="_method" value="PATCH">
              <div class="form-group">
                <input type="text" class="form-control" id="editTaskModalInput"  name='task_name' value="{{$todo->name}}">
              </div>
              <div class="form-group">
               
                    <select name="task_change_project"  class="form-control" >
                        @foreach ($projects as $key =>$value)
                            @if($key == $todo->project_id)
                                <option value={{$key}} selected>{{$value}}</option>   
                            @else
                                <option value={{$key}}>{{$value}}</option>
                            @endif
                         @endforeach
                        
                    </select>
             </div>
        </div>      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Add">
      </div>
    </form>

    </div>
  </div>
</div>