<template>

        <div class="col-md-12">            
            <div class="col-md-3" v-for="project in projects">
                    {{ project.title }}
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
