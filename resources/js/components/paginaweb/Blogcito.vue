<template>



     	<div v-if="arrayBlog" class="row">
					<div class="blog-entry col-md-4 "  v-for="blog in arrayBlog" :key="blog.id"  >
							<div style="position: relative">
                			<a href="#"><img  class="img-fluid " :src="'imagepage/blogs/'+ blog.imagen"  />	</a>
                            </div>
                            <!-- <div class="meta-date text-center p-2">
								<span class="day"></span>
							</div> -->
											<div class="text bg-white p-4" >
							<h3 class="heading text-center "><a href="#">{{blog.titulo}}</a></h3>
							<p class="text-center">{{blog.nombre_categoria}}</p>
                            <p class="text-center" >{{getHumanDate(blog.fecha)}}</p>
                            <p class="text-justify" >{{blog.descripcion}}</p>
                      
						</div>
					</div>
				</div>
      
    </template>

<script>

import moment from 'moment';
  export default {
        mounted() {
            this.getBlog()
        },
        data() {
            return {
                    arrayBlog:[]
            }
        },
        methods: {
            getBlog(){
                let me = this;
                var url = '/blog/show';
                axios.get(url).then((Response)=>{
                  //  console.log(Response);
                   
                    me.arrayBlog=Response.data.blogs;
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
