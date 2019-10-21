<!-- Modal -->
<div class="modal fade" id="projectsModal" tabindex="-1" role="dialog" aria-labelledby="projectsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="projectsModalLabel"> 
          新建表单
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <form action="{{route('projects.store')}}" method="post">
            @csrf
              <div class="form-group">
                <label for="creatModalInputEmail1">新建项目</label>
                <input type="text" class="form-control" id="creatModalInputEmail1" placeholder="项目名称">
              </div>

              <div class="form-group">
                <input type="file" id="creatModalInputFile">
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes">
      </div>


    </form>

    </div>
  </div>
</div>