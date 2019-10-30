<!-- Modal -->
<div class="modal fade" id="editProjectModal-{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel-{{$project->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel-{{$project->id}}">编辑项目</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <form action="{{route('projects.update',$project->id)}}" method="post" enctype="multipart/form-data">
              <input type="hidden" name='_method' value="PATCH">
              @csrf
              <div class="form-group">
                <label for="creatModalInput">编辑项目</label>
                <input type="text" value="{{$project->name}}" class="form-control" id="creatModalInput"  name='project_name' placeholder="项目名称">
              </div>

              <div class="form-group">
                <input type="file" id="creatModalInputFile" name='project_thumbnail'>
              </div>
        </div>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>                                
                                @foreach ($errors->all() as $error)
                                  <li>
                                    {{ $error }}
                                  </li>
                                @endforeach                                
                            </ul>
                        </div>
                    @endif
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Add">
      </div>
    </form>
    </div>
  </div>
</div>