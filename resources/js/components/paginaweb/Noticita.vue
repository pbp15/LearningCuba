<template>

	

	<div v-if="arrayNoticia" class="row">
					<div class="blog-entry col-md-4 " v-for="noticia in arrayNoticia" :key="noticia.id" >
							<div style="position: relative">
                			<a href="#"><img  class="img-fluid " :src="'imagepage/noticias/'+noticia.imagen" :title="noticia.titulo" />	</a>
                            <p class="fechita"   style="position:absolute; bottom: 0">{{getHumanDate(noticia.fecha)}}</p>
                            </div>
                            <!-- <div class="meta-date text-center p-2">
								<span class="day"></span>
							</div> -->
											<div class="text bg-white p-4" >
							<h3 class="heading"><a href="#">{{noticia.titulo}}</a></h3>
							<p>{{noticia.descripcion}}</p>
							<div class="d-flex align-items-center mt-4">
								<p class="mb-0"><a href="#" class="btn btn-primary">Leer mas<span
											class="ion-ios-arrow-round-forward"></span></a></p>
							
							</div>
						</div>
					</div>
				</div>

		
</template>

<script>

    import moment from 'moment';
    export default {
        mounted() {
            this.getNoticia()
        },
        data() {
            return {
                    arrayNoticia:[]
            }
        },
        methods: {
            getNoticia(){
                let me = this;
                var url = '/noticia/show';
                axios.get(url).then((Response)=>{
                  //  console.log(Response);
                   
                    me.arrayNoticia=Response.data.noticias;
                }).catch((error)=>{
                    console.log(error)
                })
            },
                      
            getHumanDate : function (date) {
                return moment(date, 'YYYY-MM-DD').format('DD/MM/YYYY');
            }
          
        },
    }
</script>

<style >
    
    .fechita{
        border-radius: 10%;
        height: 14%;
        width: 60%;
        text-align: center;
        padding-top: 5px;
        background-color:rgb(214, 52, 100);
        color: #fff;
       

    }
</style>