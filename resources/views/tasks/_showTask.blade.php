@extends('layouts.app')


@section('content')
    <div class="container">
        <div id='#app'>
        
        <div class="row justify-content-center">
            <div class="col-4"> 
                <div class="card">
                    <div class="card-header">待完成步骤：</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item" v-for='(step,index) in inProcess'>
                                <span @dblclick='edit(step)'>
                                    @{{ step.name }}
                                </span>
                                <span class="float-right">
                                        <i class="fa fa-check" @click='toggle(step)'></i>
                                        <i class="fa fa-times" @click='remove(step)'></i>
                                </span> 

                            </li> 
                        </ul>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">
                        <div class="form-group">
                            <label>填写步骤</label>
                            <input v-model='newStep' placeholder="edit me" @keyup.enter='addStep' class="form-control" ref='newStep' >
                        </div>
                    </div>
                </div>
            </div>  {{--  col-4  --}}

            
            <div class="col-4">
                <div class="card">
                    <div class="card-header">已完成步骤：</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item" v-for='(step,index) in process'>
                                @{{ step.name }} 
                                <span class="float-right">
                                        <i class="fa fa-check" @click='toggle(step)'></i>
                                        <i class="fa fa-times" @click='remove(step)'></i>
                                </spa
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>  {{--  col-4  --}}
        </div>


        </div>
    </div>
@endsection

@section('customJs')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
        var app = new Vue({
            el: '#app',
            data: {
              steps: [
                    {name:'Hello Vue!',completion:false},
                    {name:'Hello javascript!',completion:false},
                    {name:'Hello allen',completion:true}
                  ],
              newStep:'',
             },
             computed:{
                 
                inProcess(){
                    return this.steps.filter(function (step){

                        return step.completion == false ? true :false
                    })
                },

                process(){
                    return this.steps.filter((step)=>{
                        return step.completion == false ? false :true
                    })
                }
             },
             methods:{
                 addStep(){
                    this.steps.push({name:this.newStep,completion:false})
                    this.newStep=''
                 },
                 toggle(step){
                    step.completion= !step.completion
                 },
                 remove(step){
                    let i = this.steps.indexOf(step)
                    this.steps.splice(i,1)
                 },
                 edit(step){
                     this.remove(step)
                     this.newStep = step.name
                     this.$refs.newStep.focus()
                 }
                 
 
             }
             
          })

</script>


@endsection