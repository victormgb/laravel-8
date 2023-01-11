<template>
    <div>
        <div class="d-flex justify-content-between">
            <h2>Projects</h2>

            <!-- <button class="btn btn-info">
                Add Skill
            </button> -->

            <v-btn
            color="primary"
            class="btn btn-info"
            @click="$router.push('/projects/create')"
            >
            Add Project
            </v-btn>
        </div>
        
        <!-- Table -->
      <v-data-table
        class="elevation-1"
        :headers="headers"
        :items="itemsFormatted"
        :items-per-page="10"
        :loading="loading"
      >
        <template v-slot:item.name="{ item }">
            <span class="">
                {{ item.name }}
            </span>
        </template>

        <template v-slot:item.skills="{ item }">
            <template v-for="skill in item.skills" >
                <img :src="skill.source" style="max-height:45px" :key="skill.id">
            </template>
        </template>

        <template v-slot:item.actions="{ item }">
            <v-btn
            color="warning"
            class="btn btn-warning"
            @click="edit(item)"
            >
                Edit
            </v-btn>

            <v-btn
            color="error"
            class="btn btn-error"
            @click="deleteProject(item)"
            >
                Delete
            </v-btn>
        </template>
      </v-data-table>
    </div>
</template>

<script>
export default {
    name:"ProjectsComponent",
    data(){
        return {
            loading: false,
            headers: [
                { text: 'Name', value: 'name', sortable: true },
                { text: 'Skills', value: 'skills'},
                { text: 'actions', value: 'actions' }
            ],
            projectData:[]
        }
    },
    mounted() {
       this.fetchSkills();
    }, 
    computed:{
        itemsFormatted() {
            if(!this.projectData.length) {
                return [];
            }

            return this.projectData.map(project => {
                return {
                    id: project.id,
                    name:project.name,
                    skills: project.skills
                }
            })
        },
    },
    methods:{
        async fetchSkills() {
            this.loading =true;
            const response = await axios.get('/api/projects');
            if(response.status == 200) {
                this.projectData = response.data;
            }
            this.loading =false;
        }, 
        async deleteProject(project) {
            this.loading =true;
            const response = await axios.delete(`/api/projects/${project.id}`);
            if(response.status == 200) {
                const idx = this.projectData.map(project => project.id).indexOf(project.id);
                this.projectData.splice(idx, 1);

            }

            this.loading =false;
        },
        edit(project) {
            this.$router.push(`/projects/${project.id}`);
        }
    }
}
</script>
