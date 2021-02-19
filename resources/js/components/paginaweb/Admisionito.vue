<template>

	<form  class="appointment-form " >
  							<div class="d-md-flex">
                                 <div class="form-group ml-md-4">
									<input type="text" v-model="nombres_apo" class="form-control" placeholder="Nombres y Apellidos del apoderado">
								</div>
								<div class="form-group">
									<input type="text" v-model="dni_apo" class="form-control" placeholder="Dni del apoderado">
								</div>
								
							</div>
                            <div class="d-md-flex">
                                        <div class="form-group ml-md-4">
									<input type="text" v-model="nombres_estud" class="form-control" placeholder="Nombres y Apellidos del estudiante">
								</div>
								<div class="form-group">
									<input type="text" v-model="dni_estud" class="form-control" placeholder="Dni del estudiante">
								</div>
								
							</div>
							<div class="d-md-flex">
							
								<div class="form-group ml-md-4">
									<input type="number" v-model="telefono" class="form-control" placeholder="Celular del apoderado">
								</div>

                                <div class="form-group ml-md-4">
									<input type="email" v-model="email" class="form-control" placeholder="Correo electrónico">
								</div>

                               

							</div>
                            	<div class="d-md-flex">
                               
                                    <div class="form-group ml-md-4" >
                                        <label class="nivel" for="nivel">Seleccione el nivel educativo</label>
                                        <select v-model="nivel" class="custom-select my-1 mr-sm-2" id="nivel" >
                                            <option value="inicial">Inicial</option>
                                            <option value="primaria">Primaria</option>
                                            <option value="secundaria">Secundaria</option>
                                        </select>
                                    </div>                                  
						        </div>      

                            <div class="d-md-flex mt-4">
								
								<div class="form-group ml-md-4">
									<input type="submit" value="Enviar" @click="registrarFicha()" class="btn btn-primary py-3 px-4">
								</div>
							</div>
                          <div class="d-md-flex">
                                <div v-show="errorAdmision" class="form-group row div-error">
                                    <div class="text-center text-error">
                                        <div v-for="error in errorMostrarMsjAdmision" :key="error" v-text="error">

                                        </div>
                                    </div>
                            </div>
                    </div>

			</form>

</template>



<script>
    export default {
           data (){
            return {           
                 nombres_apo : '',
                 dni_apo : '',
                nombres_estud : '',
                 dndni_estud : '',
                telefono : '',                
                email : '',
                nivel : '',
                arrayAdmision : [],
                errorAdmision : 0,
                errorMostrarMsjAdmision : [],
            }
        },


  
        methods: {
       
            registrarAdmision(){
                      
                let me = this;

                axios.post('/admision/registrar',{
                    'nombres_apo': this.nombres_apo,
                    'dni_apo': this.dni_apo,
                    'nombres_estud': this.nombres_estud,
                    'dni_estud': this.dni_estud,              
                    'telefono': this.telefono,
                    'email': this.email,
                    'nivel': this.nivel,
                }).then(function (response) {
                    me.correctoRegistro();
                    me.cerrarModal();
                }).catch(function (error) {
                     swal(
                        'Registro incorrecto!',
                        'Todos los Campos son Obligatorios',
                        'error'
                        )
                    console.log(error);
                });
            },
         cerrarModal(){             
                this.nombres_apo = '';
                this.dni_apo = '';
                this.nombres_estud = '';
                this.dni_estud = '';  
                this.telefono = 0;
                this.email = 0;
                this.nivel= '';
		        this.errorAdmision=0;
            },
        
        correctoRegistro(){
                swal(  
                        'Registrado!',
                        'Gracias por Contactarnos, pronto le escribiremos',
                        'success'
                     )
        },


        },
        
          mounted() {
          this.registrarAdmision();
        },
    }
</script>


<style>
   .div-error{
        display: flex;
        justify-content: center;
    }
    .text-error{
        color: red !important;
        font-weight: bold;
    }
    .nivel {
    
         color: rgb(236, 226, 226) !important;
    }

    </style>