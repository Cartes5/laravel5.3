<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Perros</div>

                    <div class="panel-body">
                       <h3>Listado Perros</h3>
                       <ul class="list-group">
                            <li class="list-group-item" v-for="perro in list">{{perro.imagen}}</li>
                            <li class="list-group-item" v-for="perro in list">{{perro.nombre}}</li>
                            <li class="list-group-item" v-for="perro in list">{{perro.raza}}</li>
                            <li class="list-group-item" v-for="perro in list">{{perro.tamaño}}</li>
                            <li class="list-group-item" v-for="perro in list">{{perro.color}}</li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data:function() {
            return {
                list:[],
                perro:{
                    id:'',
                    imagen:'',
                    nombre:'',
                    raza:'',
                    tamaño:'',
                    color:''
                }
            };
        },

        created: function(){
            this.fetchPerroList();
        },

        methods: {
            fetchPerroList: function() {
                this.$http.get('api/perros').then(function(response){
                    this.list = response.data
                });
            }
        }
    }
</script>
