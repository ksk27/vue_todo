<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <form v-on:submit.prevent="submit" class="px-2">
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">ID : {{task.id}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <input type="text" class="col-sm-9 form-control" id="title" v-model="task.title">
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-sm-3 col-form-label">Content</label>
                        <input type="text" class="col-sm-9 form-control" id="content" v-model="task.content">
                    </div>
                    <div class="form-group row">
                        <label for="person-in-charge" class="col-sm-3 col-form-label">Person In Charge</label>
                        <input type="text" class="col-sm-9 form-control" id="person-in-charge" v-model="task.person_in_charge">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            taskId:{
                type: Number,
                default:0,
            }
        },
        data: function(){
            return {
                task: {}
            }
        },
        methods: {
            getTask(){
                axios.get('/api/tasks/' + this.taskId).then((res)=>{
                    this.task=res.data;
                });
            },
            submit(){
                axios.put('/api/tasks/' + this.taskId, this.task).then((res)=>{
                    this.$router.push({name: 'task.list'})
                });
            }
        },
        mounted(){
            this.getTask();
        }
    }
</script>