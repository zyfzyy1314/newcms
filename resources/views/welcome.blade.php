
@extends('layouts.app')


@section('content')

<div class="container">
    @if(count($projects)>0)
    <div class="card-deck">
        @foreach ($projects as $project)
        <div class="col-3 my-3" >
            <div  class="card project_card" >
                <ul class="icon-bar">
                    
                    @include('projects._deleteForm') 

                    <li>
                        <button type="button" class="btn ben-class">
                            <i class="fa fa-cog" data-toggle="modal" data-target="#editProjectModal-{{$project->id}}"></i> 
                         </button>
                    </li>

                </ul>
                <a href="{{route('projects.show',$project->id)}}">
                    <img src="{{asset('storage/thumbs/cropped/'.$project->thumbnail)}}" class="card-img-top">
                </a>
                <div class="card-body">
                        <a href="{{route('projects.show',$project->id)}}">
                        <h6 class="card-title">  {{ $project->name }}</h6>
                </a>
                </div>
            </div>
        </div>
        @include('projects._editModal')    
        @endforeach
    </div>
    @endif
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#projectsModal">
            <i class="fa  fa-plus fa-1x"></i> 
        </button>
</div>

<!-- Button trigger modal -->

    @include('projects._createModal')
@endsection

@section('customJs')
    <script>
        $(document).ready(function(){
            $('.icon-bar').hide();
            $('.project_card').hover(function(){
                $(this).find('.icon-bar').toggle();   

            })
        })


    </script>
@endsection
