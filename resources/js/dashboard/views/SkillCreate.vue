<template>
    <div>
        <div class="d-flex justify-content-between">
            <h2>Create Skill</h2>
            <!-- <button class="btn btn-info">
                Add Skill
            </button> -->
        </div>

        <div class="d-flex justify-content-center">
            <v-card max-width="720">

                <form action="" @submit.prevent="sendData">
                    <v-card-text>
                        <p class="font-weight-bold">Select Skill</p>
                        <input type="text" class="form-control" v-model="skillName">
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
    name:"SkillsComponent",
    data(){
        return {
            skillName:"",
            image:null,
        }
    },
    methods:{
        uploadFile(e){
            this.image = this.$refs.file.files[0];
        },
        createImage(file) {
            console.log("file", file);
        },
        async sendData(e) {
            const formData = new FormData();
            formData.append('source', this.image);
            formData.append('name', this.skillName);

            const response = await axios.post("/api/skills", formData,             
                {
                    headers: {
                'Content-Type': 'multipart/form-data',
                    },
                }
            )

            if(response.status == 200 || response.status == 201) {
                this.$toast.success('Skill added successfully');
                    
            }
        }
    }
}
</script>
