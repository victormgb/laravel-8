<template>
  <v-app>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand nav-item" href="/">
                    Dashboard
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/skills">Skills</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/projects">Projects</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                    </ul>
                </div>
            </div>
        </nav>
    <v-main class="py-4">


            <div class="container">
                <!-- Implementacion VUE -->
                <!-- <app></app> -->
                <transition name="fade" mode="out-in">
                    <router-view ></router-view>
                </transition>
            </div>
    </v-main>
  </v-app>
</template>

<style scoped>
.nav-item, .nav-item .nav-link {
    color: #000;
}
</style>