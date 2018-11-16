<template>
    <div class="col-md-12 justify-content-center text-center">
        <div class="row">            
        <div class="col-md-3 ml-1 border" v-for="project in projects">
            <div class="row">
                <div class="col-md-12">
                    <span>{{ project.title }}</span>                            
                </div>                        
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img v-bind:src="project.image" style='height:50px; width:100px;' >
                </div>                        
            </div>

            <div class="row">
                <div class="col-md-12">
                    <a v-bind:href="'/projects/' + project.id">View Project</a>
                </div>                        
            </div> 

            <div class="row">
                <div class="col-md-12">
                   {{ project.theme.theme_idea.title }}
                </div>                        
            </div> 

            <div class="row">
                <div class="col-md-12">
                    <span v-bind:class="statusBadges[project.status]">{{ statusTexts[project.status] }}</span>
                </div>
            </div>

        </div>
        </div>
    </div>
</template>

<script>
    export default {   
        mounted() {

            if (this.user_id) {
                this.getUserProjects();
            } else {
                this.getProjects();    
            }

        },    
        props: [
            'user_id'
        ], 
        data() { 
            return {
                projects: {},
                statusBadges: ['badge badge-danger', 'badge badge-primary','badge badge-success'],
                statusTexts: ['Not Active', 'In Progress', 'Finished']
            }
        },
        methods: {
            getProjects: function() {
                axios.get('/api/project/all').then(response =>(this.projects = response.data)) 
            },
            getUserProjects: function() {
                axios.get('/api/user/' + this.user_id + '/projects').then(response => (this.projects = response.data));          
            }
        }   
    }
</script>
