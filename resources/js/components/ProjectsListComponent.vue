<template>
    <div class="col-md-12 justify-content-center text-center">
        <div class="row">            
        <div class="col-md-3 ml-2 border" v-for="project in projects">
            <div class="row">
                <div class="col-md-12">
                    <span>{{ project.title }}</span>                            
                </div>                        
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img v-bind:src="project.image" style='height:100px; width:200px;' >
                </div>                        
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <a v-bind:href="project.repository_url" target="_blank">View Repository</a>
                </div>                        
            </div>                
        </div>
        </div>
    </div>
</template>

<script>
    export default {   
        mounted() {
            this.getProjects();
        },
        data() { 
            return {
                projects: {}
            }
        },
        methods: {
            getProjects: function() {
                axios.get('/api/project/all').then(response =>(this.projects = response.data))                
            }
        }   
    }
</script>
