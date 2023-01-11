<template>
    <div>
        <div class="d-flex justify-content-between">
            <h2>Skills</h2>

            <!-- <button class="btn btn-info">
                Add Skill
            </button> -->

            <v-btn
            color="primary"
            class="btn btn-info"
            @click="$router.push('/skills/create')"
            >
            Add Skill
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

        <template v-slot:item.image="{ item }">
            <img :src="item.image" style="max-width:80px"/>
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
                    @click="deleteSkill(item)"
                    >
                        Delete
                    </v-btn>
        </template>
      </v-data-table>
    </div>
</template>

<script>
export default {
    name:"SkillsComponent",
    data(){
        return {
            loading: false,
            headers: [
                { text: 'Name', value: 'name', sortable: true },
                { text: 'Image', value: 'image'},
                { text: 'actions', value: 'actions' }
            ],
            skillData:[]
        }
    },
    mounted() {
       this.fetchSkills();
    }, 
    computed:{
        itemsFormatted() {
            if(!this.skillData.length) {
                return [];
            }

            return this.skillData.map(skill => {
                return {
                    id: skill.id,
                    name:skill.name,
                    image:skill.source
                }
            })
        },
    },
    methods:{
        async fetchSkills() {
            this.loading =true;
            const response = await axios.get('/api/skills');
            if(response.status == 200) {
                this.skillData = response.data;
            }
            this.loading =false;
        }, 
        async deleteSkill(skill) {
            this.loading =true;
            const response = await axios.delete(`/api/skills/${skill.id}`);
            if(response.status == 200) {
                const idx = this.skillData.map(skill => skill.id).indexOf(skill.id);
                this.skillData.splice(idx, 1);

            }

            this.loading =false;
        },
        edit(skill) {
            this.$router.push(`/skills/${skill.id}`);
        }
    }
}
</script>
