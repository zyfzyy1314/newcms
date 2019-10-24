<form action="{{route('projects.destroy',$project->id)}}" method="post">
        <input type="hidden" name='_method' value="DELETE">
        @csrf   
               <li>
                   <button type="submit" class="btn ben-class"><i class="fa fa-times"></i> </button>
               </li>
</form>