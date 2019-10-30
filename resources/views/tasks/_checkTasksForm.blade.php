<form action="{{route('tasks.check',$todo->id)}}" method="post">
@csrf

    <button type="submit" class="btn btn-sm btn-success" >
        <i class="fa fa-check"></i>
    </button>
</form>