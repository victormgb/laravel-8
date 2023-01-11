<template>
    <div>
        <div class="d-flex justify-content-between">
            <h2>Edit Skill</h2>
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
            headers: [
                { text: 'Name', value: 'name', sortable: true },
                { text: 'Image', value: 'image'},
                { text: 'actions', value: 'actions' }
            ],
            items:[],
            skillName:"",
            image:null,
            id: null
        }
    },
    mounted(){
        const id = this.$route.params.id;
        this.id = id;
        this.fetchSkill(id);
    },
    methods:{
        async fetchSkill(id) {
            const response = await axios.get(`/api/skills/${id}`);
            if(response.status == 200) {
                this.skillName = response.data.name;
            }
        },
        uploadFile(e){
            this.image = this.$refs.file.files[0];
        },
        async sendData(e) {
            const formData = new FormData();
            if(this.image) {
                formData.append('source', this.image);
            }
            
            formData.append('name', this.skillName);
            formData.append('id', this.id);

            const response = await axios.post(`/api/skills/update/${this.id}`, formData,             
                {
                    headers: {
                'Content-Type': 'multipart/form-data',
                    },
                }
            )

            if(response.status == 200 || response.status == 201) {
                this.$toast.success('Skill updated successfully');
                this.$router.push(`/skills`);
            }
        }
    }
}
</script>
