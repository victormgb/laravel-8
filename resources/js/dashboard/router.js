import Vue from 'vue';
import VueRouter from 'vue-router';

import Skills from "./views/Skills.vue";
import SkillEdit from "./views/SkillEdit.vue";
import SkillCreate from "./views/SkillCreate.vue";
import Dashboard from "./views/Dashboard.vue";
import Projects from "./views/Projects.vue";
import ProjectCreate from "./views/ProjectCreate.vue";
import ProjectEdit from "./views/ProjectEdit.vue";

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
  
    routes: [
      {
        path: '/dashboard/',
        name: 'Dashboard',
        component: Dashboard,
      },

      {
        path: '/skills/',
        name: 'Skills',
        component: Skills,
      },

      {
        path: '/skills/create',
        name: 'SkillCreate',
        component: SkillCreate,
      },

      {
        path: '/skills/:id',
        name: 'SkillEdit',
        component: SkillEdit,
      },

      {
        path: '/projects',
        name: 'Projects',
        component: Projects,
      },

      {
        path: '/projects/create',
        name: 'Projects',
        component: ProjectCreate,
      },

      {
        path: '/projects/:id',
        name: 'ProjectEdit',
        component: ProjectEdit,
      },
    ],
  });