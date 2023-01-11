<template>
    <div>
        <div class="d-flex justify-content-between">
            <h2>Edit Project</h2>
            <!-- <button class="btn btn-info">
                Add Skill
            </button> -->
        </div>

        <div class="d-flex justify-content-center">
            <v-card max-width="720">

                <form action="" @submit.prevent="sendData">
                    <v-card-text>
                        <p class="font-weight-bold">Select Skills</p>
                        <v-select  
                        v-model="skillsSelected"
                        :items="skills"
                        multiple
                        item-text="name"
                        item-value="id"
                        dense
                        filled
                        >
                        </v-select>
                    </v-card-text>

                    <v-card-text>
                        <p class="font-weight-bold">Project Name</p>
                        <input type="text" class="form-control" v-model="projectName">
                    </v-card-text>

                    <v-card-text>
                        <p class="font-weight-bold">Repository URL</p>
                        <input type="text" class="form-control" v-model="url">
                    </v-card-text>

                    <v-card-text>
                        <p class="font-weight-bold">Image</p>
                        <input id="file" type="file" class="form-control" v-on:change="uploadFile" ref="file">
                    </v-card-text>

                    <v-card-actions>
                        <v-btn
                        color="primary"
                        class="btn btn-info"
                        type="submit"
                        >
                            Done
                        </v-btn>
                    </v-card-actions>
                </form>
            </v-card>
        </div>
    </div>
</template>

<script>
export default {
    name:"ProjectCreateComponent",
    data(){
        return {
            projectName:"",
            url:"",
            skills:[],
            skillsSelected:[],
            image:null,
            id: null
        }
    },
    created() {
        this.fetchSkills();
    },
    mounted() {
        const id = this.$route.params.id;
        this.id = id;
        this.fetchProject(id);
    },
    methods:{
        async fetchProject(id) {
            const response = await axios.get(`/api/projects/${id}`);
            if(response.status == 200) {
                // this.skillName = response.data.name;
                this.projectName = response.data.name;
                this.url = response.data.url_github;
                this.skillsSelected = response.data.skills.map(skill => skill.id);
            }
        },
        async fetchSkills() {
            const response = await axios.get("/api/skills");
            this.skills = response.data;
        },
        uploadFile(e){
            this.image = this.$refs.file.files[0];
        },
        async sendData(e) {
            const formData = new FormData();
            if(this.image) {
                formData.append('url_thumbnail', this.image);
            }
            
            formData.append('name', this.projectName);
            formData.append('url_github', this.url);
            
            formData.append('skills', this.skillsSelected);

            const response = await axios.post(`/api/projects/update/${this.id}`, formData,             
                {
                    headers: {
                'Content-Type': 'multipart/form-data',
                    },
                }
            )

            if(response.status == 200 || response.status == 201) {
                this.$toast.success('Project added successfully');
                    
            }
        }
    }
}
</script>
