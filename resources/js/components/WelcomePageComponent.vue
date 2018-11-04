<template>

        <div class="card">
            <div class="card-header">
                Current Theme: {{ current_theme }}
            </div>
            <div class="card-body">  
                <div class="row justify-content-center text-center">                    
                    <div class="col-md-12">                   
                        Time Remaining: <CrosdaleCountdownComponentVue :deadline="time_remaining"></CrosdaleCountdownComponentVue>                
                        <vue-twitch-player></vue-twitch-player>
                    </div>
                </div>
            </div>
        </div>
    

</template>

<script>

import LoadScript from 'vue-plugin-load-script';

Vue.use(LoadScript);

import CrosdaleCountdownComponentVue from './CrosdaleCountdownComponent.vue';
import VueTwitchPlayer from 'vue-twitch-player';

    export default {     
        components: { CrosdaleCountdownComponentVue, VueTwitchPlayer },
        mounted() {
            this.getData();
        },        
        data () {
            return {
                time_remaining: 'August 22, 2022',
                current_theme: null,
                channel: 'crosdale'
            }
        },
        methods: {    
            getData() {                
                axios.get('/api/theme/current').then(response =>(this.time_remaining = response.data.end_date, this.current_theme = response.data.theme_idea.title))                
            }
        }
    }
</script>
