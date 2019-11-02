@extends('layouts.app')


@section('content')
    <div class="container">
        <div id='#app'>
            
       <steps route="{{route('tasks.steps.index' , $task->id)}}"></steps>


        </div>
    </div>
@endsection

@section('customJs')
{{--  #v-if 删除dom元素
#v-show 隐藏dom元素  --}}
{{--  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>  --}}



@endsection