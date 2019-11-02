@extends('layouts.app')


@section('content')
    <div class="container">
        <div id='#app'>
        
        <div class="row justify-content-center">
            <div class="col-4" > 
                <div class="card" v-if="inProcess.length">
                    <div class="card-header">
                        待完成步骤（@{{inProcess.length}}）：
                        <button class="btn btn-sm btn-success float-right" @click="allComputed">完成所有</button>
                    </div>
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
                            <label v-if="!newStep">填写步骤</label>
                            <input v-model='newStep' placeholder="edit me" @keyup.enter='addStep' class="form-control" ref='newStep' >
                            <button v-show="newStep" class="btn btn-sm btn-success float-right mt-2" @click="addStep">提交步骤</button>
                        </div>
                    </div>
                </div>
            </div>  {{--  col-4  --}}


            <div class="col-4" >
                <div class="card" v-show="process.length">
                    <div class="card-header">
                        已完成步骤（@{{process.length}}）：
                        <button class="btn btn-sm btn-danger float-right" @click="clearComputed">清除所有</button>
                    </div>
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
{{--  #v-if 删除dom元素
#v-show 隐藏dom元素  --}}
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
                 },
                 allComputed(){
                     this.steps.forEach((step)=>{
                        step.completion = true
                     })
                 },
                 clearComputed(){
                     this.steps = this.inProcess
                 }
                 
 
             }
             
          })

</script>


@endsection