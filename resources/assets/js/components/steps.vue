<template>
    <div class="row justify-content-center">
            <div class="col-4" > 
                <div class="card" v-if="inProcess.length">
                    <div class="card-header">
                        待完成步骤（{{inProcess.length}}）：
                        <button class="btn btn-sm btn-success float-right" @click="allComputed">完成所有</button>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item" v-for='(step,index) in inProcess'>
                                <span @dblclick='edit(step)'>
                                    {{ step.name }}
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
            </div>  


            <div class="col-4" >
                <div class="card" v-show="process.length">
                    <div class="card-header">
                        已完成步骤（{{process.length}}）：
                        <button class="btn btn-sm btn-danger float-right" @click="clearComputed">清除所有</button>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item" v-for='(step,index) in process'>
                                {{ step.name }} 
                                <span class="float-right">
                                        <i class="fa fa-check" @click='toggle(step)'></i>
                                        <i class="fa fa-times" @click='remove(step)'></i>
                                </span>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>  
        </div>

</template>

<script>
export default {
    props:[
        'route',
    ],
    data(){
        return{    
            steps: [],
            newStep:'',
            }
     },
     created()
     {
         this.fetchSteps();
     },
     computed:{
        inProcess(){
            return this.steps.filter(function (step){
                return step.complete == false ? true :false
            })
        },

        process(){
            return this.steps.filter((step)=>{
                return step.complete == false ? false :true
            })
        }
     },
     methods:{
         addStep(){
            axios.post(this.route,{name:this.newStep,complete:0}).then((res)=>{

                this.steps.push(res.data.step)
                this.newStep=''       
            })

         },
         toggle(step){

            if(step.complete==false)
            {
                var com =1
              
            }
            else 
            {
                var com =0
            }
            axios.patch(this.route+'/'+ step.id,{complete:com}).then((res)=>{

                
                    step.complete= !step.complete
            }) 
            
         },
         remove(step){

             let i = this.steps.indexOf(step)

             axios.delete(this.route+'/'+step.id).then((res)=>{

                 console.log(res.status)
                 this.steps.splice(i,1)
                 //alert(res.data.msg)
             })
        /*

        */
         },

         edit(step){
             this.remove(step)
             this.newStep = step.name
             this.$refs.newStep.focus()
         },
         allComputed(){

             axios.post(this.route+'/allcomputed',{complete:1}).then((res)=>{

                    this.fetchSteps();
             })

/*              this.steps.forEach((step)=>{
                step.complete = true
             }) */
         },
         clearComputed(){

             axios.delete(this.route+'/clearcomputed').then((res)=>{

                     this.steps = this.inProcess
             })

            
         },
         fetchSteps()
         {
                axios.get(this.route).then((res)=>{
                this.steps =res.data.steps

            }).catch((err)=>{
                alert(err.response.status)
            })
         }
         

     }
}
</script>

<style>
    
</style>
