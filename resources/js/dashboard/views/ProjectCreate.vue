<template>
    <div>
        <div class="d-flex justify-content-between">
            <h2>Create Project</h2>
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
            image:null
        }
    },
    created() {
        this.fetchSkills();
    },
    methods:{
        async fetchSkills() {
            const response = await axios.get("/api/skills");
            this.skills = response.data;
        },
        uploadFile(e){
            this.image = this.$refs.file.files[0];
        },
        async sendData(e) {
            const formData = new FormData();
            formData.append('url_thumbnail', this.image);
            formData.append('name', this.projectName);
            formData.append('url_github', this.url);
            
            formData.append('skills', this.skillsSelected);

            const response = await axios.post("/api/projects", formData,             
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
