<form action="{{route('tasks.destroy',$todo->id)}}" method="post">
<input type="hidden" name="_method" value="DELETE">
        @csrf
            <button type="submit" class="btn btn-sm btn-danger" >
                <i class="fa fa-recycle"></i>
            </button>
</form>