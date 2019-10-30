@extends('layouts.app')

@section('content')

    <div class="container">
        
        @include('tasks._createTaskForm')

        @include('tasks._list')
          
    </div>


    
@endsection


