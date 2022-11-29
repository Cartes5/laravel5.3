<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Añadir Perro</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="create">
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
                                <button type="submit" class="btn btn-primary">Guardar</button>
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
    name:"add-perro",
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
    methods:{
        async create(){
            await this.axios.post('/api/perro',this.perro).then(response=>{
                this.$router.push({name:"perroList"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>