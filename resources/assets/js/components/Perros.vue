<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <router-link to="/" class="navbar-brand" href="#">Perros</router-link>
                <div class="collapse navbar-collapse">
                    <div class="navbar-nav">
                        <router-link to="/" class="nav-item nav-link">Inicio</router-link>
                        <router-link to="/Perros" class="nav-item nav-link">Perros</router-link>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <router-view></router-view>
        </div>
    </main>
</template>
 
<script>
    export default {}
</script>
