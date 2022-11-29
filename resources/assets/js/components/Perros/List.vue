<template>
    <div class="row">
        <div class="col-12 mb-2 text-end">
            <router-link :to='{name:"perroAdd"}' class="btn btn-primary">Crear</router-link>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Perros</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Raza</th>
                                    <th>Tamaño</th>
                                    <th>Color</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody v-if="perros.length > 0">
                                <tr v-for="(perro,key) in perros" :key="key">
                                    <td>{{ perro.id }}</td>
                                    <td>{{ perro.imagen }}</td>
                                    <td>{{ perro.nombre }}</td>
                                    <td>{{ perro.raza }}</td>
                                    <td>{{ perro.tamaño }}</td>
                                    <td>{{ perro.color }}</td>
                                    <td>
                                        <router-link :to='{name:"perroEdit",params:{id:perro.id}}' class="btn btn-success">Editar</router-link>
                                        <button type="button" @click="deletePerros(perro.id)" class="btn btn-danger">Borrar</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody v-else>
                                <tr>
                                    <td colspan="4" align="center">Perro no encontrado.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"perros",
    data(){
        return {
            perros:[]
        }
    },
    mounted(){
        this.getPerros()
    },
    methods:{
        async getPerros(){
            await this.axios.get('/api/perro').then(response=>{
                this.perros = response.data
            }).catch(error=>{
                console.log(error)
                this.perros = []
            })
        },
        deletePerros(id){
            if(confirm("¿Estas seguro que quieres borrar perro?")){
                this.axios.delete(`/api/perro/${id}`).then(response=>{
                    this.getPerros()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>