<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Actualizar Perro</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="update">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Imagen</label>
                                    <input type="text" class="form-control" v-model="perro.imagen">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" v-model="perro.nombre">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Raza</label>
                                    <input type="text" class="form-control" v-model="perro.raza">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Tamaño</label>
                                    <input type="text" class="form-control" v-model="perro.tamaño">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" class="form-control" v-model="perro.color">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"update-perro",
    data(){
        return {
            perro:{
                imagen:"",
                nombre:"",
                raza:"",
                tamaño:"",
                color:"",
            }
        }
    },
    mounted(){
        this.showPerro()
    },
    methods:{
        async showPerro(){
            await this.axios.get(`/api/perro/${this.$route.params.id}`).then(response=>{
                const { imagen, nombre, raza, tamaño, color } = response.data
                this.category.imagen = imagen
                this.category.nombre = nombre
                this.category.raza = raza
                this.category.tamaño = tamaño
                this.category.color = color
            }).catch(error=>{
                console.log(error)
            })
        },
        async update(){
            await this.axios.post(`/api/perro/${this.$route.params.id}`,this.category).then(response=>{
                this.$router.push({name:"perroList"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>