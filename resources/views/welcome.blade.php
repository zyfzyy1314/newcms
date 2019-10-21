
@extends('layouts.app')


@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#projectsModal">
    <i class="fa  fa-plus fa-1x"></i> 
</button>

                   @include('projects._createModal')

@endsection
