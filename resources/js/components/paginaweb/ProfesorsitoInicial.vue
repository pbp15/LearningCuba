<template>

    <div class="contenedor" v-if="arrayProfesore" >
                        <div v-for="profesore in arrayProfesore" :key="profesore"   class="info-pet">
                                <img :src="'imagepage/profesores/'+ profesore.imagen" >
                        
                         <div class="text pt-3 text-center">
                                <h3>{{profesore.nombres}}</h3>
                                <span class="position mb-2"> {{profesore.curso_cargo}}</span>
                                <strong><p>{{profesore.nivel}}</p></strong>                              
                            </div>
                        </div>
                         
     </div>
      
    </template>

<script>
    export default {
        mounted() {
            this.getProfesore()
        },
        data() {
            return {
                    arrayProfesore:[]
            }
        },
        methods: {
            getProfesore(){
                let me = this;
                var url = '/profesores/inicial';
                axios.get(url).then((Response)=>{
                  //  console.log(Response);
                   
                    me.arrayProfesore=Response.data.profesores;
                }).catch((error)=>{
                    console.log(error)
                })
            }
        },
    }
</script>
