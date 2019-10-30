<ul class="nav nav-tabs" id="myTaskTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo" role="tab" aria-controls="未完成" aria-selected="true">未完成</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="done-tab" data-toggle="tab" href="#done" role="tab" aria-controls="已完成" aria-selected="false">已完成</a>
        </li>

</ul>

      <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="todo" role="tabpanel" aria-labelledby="todo-tab">
                @if(count($todos)>0)
                    <table class="table">
                            <tbody>
                               @foreach ($todos as $todo)
                                    <tr>
                                       <td class="col-9"><span class="badge badge-secondary mr-3">{{$todo->updated_at->diffForHumans()}}</span>
                                              <a href="{{route('tasks.show',$todo->id)}}"> {{$todo->name}}</a> 
                                        </td>
                                       <td>@include('tasks._checkTasksForm')</td>
                                       <td>@include('tasks._editTaskForm')</td>
                                       <td>@include('tasks._deleteTaskForm')</td>
                                     </tr>
                               @endforeach
                            </tbody>
                    </table>
                @endif



            </div>
            <div class="tab-pane fade" id="done" role="tabpanel" aria-labelledby="done-tab">
                    @if(count($dones)>0)
                    <table class="table">
                            <tbody>
                               @foreach ($dones as $done)
                                    <tr>
                                       <td>{{$done->name}}</td>
                                     </tr>
                               @endforeach
                            </tbody>
                    </table>
                    @endif
            </div>
      </div>