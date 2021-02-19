<template>
            <main class="main">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Escritorio</a></li>
            </ol>
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->
                <div class="card">
                 <strong><h2 class="text-center">Ficha de Admisión</h2></strong> 
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> 
                      </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control col-md-3" v-model="criterio">
                                      <option value="nombres">Nombres</option>   
                                      <option value="apellidos">Apellidos</option>
                                                                       
                                    </select>
                                    <input type="text" v-model="buscar" @keyup.enter="listarContacto(1,buscar,criterio)" class="form-control" placeholder="Texto a buscar">
                                    <button type="submit" @click="listarContacto(1,buscar,criterio)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Opciones</th>    
                                    <th> Datos del Apoderado</th>
                                    <th>Dni del Apoderado</th>
                                    <th> Datos del Estudiante</th>
                                    <th>Dni del Estudiante</th>
                                    <th>Telefono</th>
                                    <th>Email</th>                                 
                                    <th>Nivel Educativo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="admisione in arrayAdmision" :key="admisione.id">
                                    <td>
                                        <button type="button" @click="abrirModal('admisione','actualizar',admisione)" class="btn btn-warning btn-sm">
                                          <i class="icon-pencil"></i>
                                        </button> 
                                         <button type="button" class="btn btn-danger btn-sm" @click="eliminarAdmision(admisione.id)">
                                        <i class="fa fa-trash"></i>
                                        </button>
                                    </td>                                   
                                    <td v-text="admisione.nombres_apo"></td>
                                    <td v-text="admisione.dni_apo"></td>
                                    <td v-text="admisione.nombres_estud"></td>
                                    <td v-text="admisione.dni_estud"></td>
                                    <td v-text="admisione.telefono"></td>                                    
                                    <td v-text="admisione.email"></td>
                                    <td v-text="admisione.nivel"></td>
                                </tr>                                
                            </tbody> 
                        </table>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item" v-if="pagination.current_page > 1">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page - 1,buscar,criterio)">Ant</a>
                                </li>
                                <li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(page,buscar,criterio)" v-text="page"></a>
                                </li>
                                <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page + 1,buscar,criterio)">Sig</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>
            <!--Inicio del modal agregar/actualizar-->
            <div class="modal fade" tabindex="-1" :class="{'mostrar' : modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" v-text="tituloModal"></h4>
                            <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                     
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Nombres y Apellidos del Apoderado</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="nombres_apo" class="form-control" placeholder="Nombres y Apellidos del Apoderado">                                        
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Dni del Apoderado</label>
                                    <div class="col-md-9">
                                        <input type="number" v-model="dni_apo" class="form-control" placeholder=" Dni del Apoderado">                                        
                                    </div>
                                </div>

                                  <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Nombres y y Apellidos del Alumno </label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="nombres_estud" class="form-control" placeholder="Nombres">                                        
                                    </div>
                                </div>
                                  <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Dni del Alumno</label>
                                    <div class="col-md-9">
                                        <input type="number" v-model="dni_estud" class="form-control" placeholder=" Dni del Alumno">                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Nº Celular</label>
                                    <div class="col-md-9">
                                        <input type="number" v-model="telefono" class="form-control" placeholder="celular">                                        
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Correo Electrónico</label>
                                    <div class="col-md-9">
                                        <input type="email" v-model="email" class="form-control" placeholder="Correo">                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                       <label class=" col-md-3 form-control-label nivel" for="nivel">Seleccione el nivel educativo</label>
                                    <div class="col-md-9">
                                         <select v-model="nivel" class="custom-select my-1 mr-sm-2" id="nivel" >
                                            <option value="inicial">Inicial</option>
                                            <option value="primaria">Primaria</option>
                                            <option value="secundaria">Secundaria</option>
                                        </select>
                                    </div>
                                </div>                  


                                <div v-show="errorAdmision" class="form-group row div-error">
                                    <div class="text-center text-error">
                                        <div v-for="error in errorMostrarMsjAdmision" :key="error" v-text="error">

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                            <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="registrarAdmision()">Guardar</button>
                            <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarAdmision()">Actualizar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
        </main>
</template>

<script>
   
    export default {
        data (){
            return {
                admision_id: 0,
                nombres_apo : '',
               dni_apo : '',
                nombres_estud : '',
                 dndni_estud : '',
                telefono : '',                
                email : '',
                nivel : '',
                arrayAdmision : [],
                modal : 0,
                tituloModal : '',
                tipoAccion : 0,
                errorAdmision : 0,
                errorMostrarMsjAdmision : [],
                pagination : {
                    'total' : 0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 3,
                criterio : 'nombres',
                buscar : '',
            }
        },
 
        computed:{
            isActived: function(){
                return this.pagination.current_page;
            },
            //Calcula los elementos de la paginación
            pagesNumber: function() {
                if(!this.pagination.to) {
                    return [];
                }
                
                var from = this.pagination.current_page - this.offset; 
                if(from < 1) {
                    from = 1;
                }

                var to = from + (this.offset * 2); 
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }  

                var pagesArray = [];
                while(from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;             

            }
        },
        methods : {
            listarAdmision(page,buscar,criterio){
                let me=this;
                var url= '/admision?page=' + page + '&buscar='+ buscar + '&criterio='+ criterio;
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.arrayAdmision = respuesta.admisiones.data;
                    me.pagination= respuesta.pagination;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            cambiarPagina(page,buscar,criterio){
                let me = this;
                //Actualiza la página actual
                me.pagination.current_page = page;
                //Envia la petición para visualizar la data de esa página
                me.listarContacto(page,buscar,criterio);
            },
      
            actualizarAdmision(){
               if (this.validarAdmision()){
                    return;
                }
                
                let me = this;

                axios.put('/admision/actualizar',{
                    'nombres_apo': this.nombres_apo,
                    'dni_apo': this.dni_apo,
                    'nombres_estud': this.nombres_estud,
                    'dni_estud': this.dni_estud,              
                    'telefono': this.telefono,
                    'email': this.email,
                    'nivel': this.nivel,
                    'id': this.admision_id
                }).then(function (response) {
                    me.cerrarModal();
                    me.listarContacto(1,'','nombre');
                }).catch(function (error) {
                    console.log(error);
                }); 
            },
      
            validarContacto(){
                this.errorContacto=0;
                this.errorMostrarMsjContacto =[];

                if (!this.nombres_apo) this.errorMostrarMsjAdmision.push("Los datos del apoderado no pueden estar vacío.");
                if (!this.nombres_estud) this.errorMostrarMsjAdmision.push("Los datos del estudiante no pueden estar vacío.");
                if (!this.email) this.errorMostrarMsjAdmision.push("El email no puede estar vacío.");
                if (!this.nivel) this.errorMostrarMsjAdmision.push("El nivel no puede estar vacío.");

                if (this.errorMostrarMsjAdmision.length) this.errorAdmision = 1;

                return this.errorAdmision;
            },
            cerrarModal(){
                this.modal=0;
                this.tituloModal='';
                this.nombres_apo = '';
                this.dni_apo = '';
                this.nombres_estud = '';
                this.dni_estud = '';  
                this.telefono = 0;
                this.email = 0;
                this.nivel= '';
		        this.errorAdmision=0;
            },
             eliminarAdmision(id){
            
             swal({
                title: 'Esta seguro de eliminar este formulario de matricula?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar!',
                cancelButtonText: 'Cancelar',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
                }).then((result) => {
                if (result.value) {
                    let me = this;

                    axios.put('/admision/eliminar',{
                        'id': id
                    }).then(function (response) {
                        me.listarEvento(1,'','titulo');
                        swal(
                        'Eliminado!',
                        'El formulario de matricula ha sido eliminado con éxito.',
                        'success'
                        )
                    }).catch(function (error) {
                        console.log(error);
                    });
                    
                    
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    
                }
                }) 
            },

            abrirModal(modelo, accion, data = []){
                switch(modelo){
                    case "admision":
                    {
                        switch(accion){
                         
                            case 'actualizar':
                            {
                                //console.log(data);
                                this.modal=1;
                                this.tituloModal='Actualizar Formulario de Matricula';
                                this.tipoAccion=2;
                                this.admision_id=data['id'];
                                this.nombres_apo=data['nombres_apo'];
                                this.dni_apo = data['dni_apo'];
                                this.nombres_estud=data['nombres_estud'];
                                this.dni_estud = data['dni_estud'];
                                this.telefono=data['telefono'];
                                this.email=data['email'];
                               this.nivel= data['nivel'];
                                break;
                            }
                        }
                    }
                }
            }
        },
        mounted() {
            this.listarAdmision(1,this.buscar,this.criterio);
        }
    }
</script>
<style>    
    .modal-content{
        width: 100% !important;
        position: absolute !important;
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .div-error{
        display: flex;
        justify-content: center;
    }
    .text-error{
        color: red !important;
        font-weight: bold;
    }
</style>
