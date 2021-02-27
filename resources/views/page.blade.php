<!DOCTYPE html>
<html lang="en">

<head>
	<title>Academia LearningCuba </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Academia LearningCuba  - Escolar y Preuniversitaria" />

	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/estiles.css" type="text/css" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
	 rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>

<div id="app">
<!-- main banner -->
<div class="main-top" id="home">

    {{-- barra social --}}
    @include('paginaweb.barrasocial')

    <!-- header -->
    @include('paginaweb.header')

 <!-- //main header -->   

    <!-- banner -->
    @include('paginaweb.banner')

<!-- //main banner -->
<!-- middle -->
<section class="midd-w3 py-5" id="faq">
    <div class="container py-xl-5 py-lg-3">
        <div class="row">
            <div class="col-lg-7 about-right-faq">
                <h3 class="text-da">En LearningCuba</h3>
                <h6> Te ofrecemos</h6>
           
                <ul class="w3l-right-book mt-4">
                             
                   
                    <li>Orientación Vocacional</li>    
                    <li>Evaluaciones Constantes</li>             
                    <li>Excelente Plana Docente</li>   
                    <li>Clases 100% virtuales</li>
                    <li>Programa de Nivelación Académica</li>
                    <li>Preparación Pre-Universitaria & Escolar</li>
                    <li>Metodología Scrum basado en el aprendizaje remoto</li>
           
                </ul>
                <a href="about.html" class="btn button-style button-style-2 mt-sm-5 mt-4">Read More</a>
            </div>
            <div class="col-lg-5 left-wthree-img text-right">
                <img src="images/b1.png" alt="" class="img-fluid mt-5" />
            </div>
        </div>
    </div>
</section>
<!-- //middle -->
<!-- what we do section -->
<div class="what bg-li py-5" id="what">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold mb-5">Nuestros Ciclos Virtuales</h3>

        <div class="row about-bottom-w3l text-center mt-4">
     
            <div class="col-lg-4 about-grid ciclos">
                <div class="about-grid-main">
                    <img src="images/img3.png" alt="" class="img-fluid">
                    <h4 class="my-4 ">Ciclo Intensivo Verano</h4>                   
                    <a href="about.html" class="button-w3ls btn mt-sm-1 mt-1">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 about-grid my-lg-0 my-5 ciclos">
                <div class="about-grid-main" >
                    <img src="images/img2.png" alt="" class="img-fluid">
                    <h4 class="my-4">Ciclo Semestral</h4>
                    <a href="about.html" class="button-w3ls btn mt-sm-1 mt-1">Más info</a>
                </div>
            </div>
            <div class="col-lg-4 about-grid ciclos ">
                <div class="about-grid-main">
                    <img src="images/img3.png" alt="" class="img-fluid">
                    <h4 class="my-4">Ciclo El Cole</h4>
                    <a href="about.html" class="button-w3ls btn mt-sm-1 mt-1">Más info</a>
                </div>
            </div>

            <div class="col-lg-4 about-grid mt-4 ciclos">
                <div class="about-grid-main">
                    <img src="images/img3.png" alt="" class="img-fluid">
                    <h4 class="my-4">Ciclo Repaso</h4>
                    <a href="about.html" class="button-w3ls btn mt-sm-1 mt-1">Más info</a>
                </div>
            </div>

            <div class="col-lg-4 about-grid mt-4 ciclos">
                <div class="about-grid-main">
                    <img src="images/img3.png" alt="" class="img-fluid">
                    <h4 class="my-4">Ciclo Primera Selección</h4>
                    <a href="about.html" class="button-w3ls btn mt-sm-1 mt-1">Más info</a>
                </div>
            </div>
      
            <div class="col-lg-4 about-grid mt-4 ciclos">
                <div class="about-grid-main">
                    <img src="images/img3.png" alt="" class="img-fluid">
                    <h4 class="my-4">Ciclo de Nivelación Académica</h4>
                    <a href="about.html" class="button-w3ls btn mt-sm-1 mt-1">Más info</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- //what we do section -->



<!-- services -->
<section class="banner-bottom-w3layouts bg-li py-5" id="services">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold">Servicios TIC's </h3>
        <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">En nuestra academia virtual te brindamos lo mejor en Tecnologia para ofrecerte una mejor calidad educativa</p>
        <div class="row pt-lg-4">
            <div class="col-lg-4 about-in text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="bg-clr-w3l">
                            <span class="fa fa-line-chart"></span>
                        </div>
                        <h5 class="card-title mt-4 mb-3">Aula Virtual</h5>
                        <p class="card-text">Plataforma de enseñanza virtual mediante la cual los administrativos,
                            profesores y alumnos disponen de diversas herramientas y recursos educativos de las clases</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 about-in text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="bg-clr-w3l">
                            <span class="fa fa-lightbulb-o"></span>
                        </div>
                        <h5 class="card-title mt-4 mb-3">Plataforma de VideoConferencia</h5>
                        <p class="card-text">Sistema interactivo que permite a varios usuarios mantener una conversación virtual por medio de la
                             transmisión en tiempo real de video, sonido y texto a través de Internet.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 about-in text-center my-lg-0 my-3">
                <div class="card active">
                    <div class="card-body">
                        <div class="bg-clr-w3l">
                            <span class="fa fa-usd"></span>
                        </div>
                        <h5 class="card-title mt-4 mb-3">Soporte TI</h5>
                        <p class="card-text"> Se ofrece asistencia de la infraestructura tecnológica y orientación de los estudiantes y personal</p>
                    </div>
                </div>
            </div>
       
        </div>
    </div>
</section>
<!-- //services -->

<!-- stats -->
<section class="bottom-count py-5" id="stats">
    <div class="container py-xl-5 py-lg-3">
        <div class="row">
            <div class="col-lg-5 left-img-w3ls">
                <img src="images/b2.png" alt="" class="img-fluid" />
            </div>
            <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                <div class="bott-w3ls mr-xl-5">
                    <h3 class="title-w3 text-bl mb-3 font-weight-bold">Some of Company Real Facts</h3>
                    <p class="title-sub-2 mb-3">Excepteur sint occaecat cupidatat <br>non proident.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium. </p>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-4 count-w3ls">
                        <h4>1000+</h4>
                        <p>Project completed</p>
                    </div>
                    <div class="col-sm-4 count-w3ls mt-sm-0 mt-3">
                        <h4>480+</h4>
                        <p>Consultant</p>
                    </div>
                    <div class="col-sm-4 count-w3ls mt-sm-0 mt-3">
                        <h4>600+</h4>
                        <p>Award Winning</p>
                    </div>
                </div>
                <div class="row mt-sm-5 mt-4">
                    <div class="col-sm-4 count-w3ls">
                        <h4>480+</h4>
                        <p>Consultant</p>
                    </div>
                    <div class="col-sm-4 count-w3ls mt-sm-0 mt-3">
                        <h4>600+</h4>
                        <p>Award Winning</p>
                    </div>
                    <div class="col-sm-4 count-w3ls mt-sm-0 mt-3">
                        <h4>1000+</h4>
                        <p>Project completed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->

<!-- partners -->
<section class="partners py-5" id="partners">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold">Our Partners</h3>
        <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">Sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        <div class="row grid-part text-center pt-4">
            <div class="col-md-2 col-4">
                <div class="parts-w3ls">
                    <a href="#"><span class="fa fa-angellist"></span></a>
                    <h4>Angellist</h4>
                </div>
            </div>
            <div class="col-md-2 col-4">
                <div class="parts-w3ls">
                    <a href="#"><span class="fa fa-opencart"></span></a>
                    <h4>opencart</h4>
                </div>
            </div>
            <div class="col-md-2 col-4">
                <div class="parts-w3ls">
                    <a href="#"><span class="fa fa-lastfm"></span></a>
                    <h4>lastfm</h4>
                </div>
            </div>
            <div class="col-md-2 col-4 mt-md-0 mt-4">
                <div class="parts-w3ls">
                    <a href="#"><span class="fa fa-openid"></span></a>
                    <h4>openid</h4>
                </div>
            </div>
            <div class="col-md-2 col-4 mt-md-0 mt-4">
                <div class="parts-w3ls">
                    <a href="#"><span class="fa fa-skyatlas"></span></a>
                    <h4>skyatlas</h4>
                </div>
            </div>
            <div class="col-md-2 col-4 mt-md-0 mt-4">
                <div class="parts-w3ls">
                    <a href="#"><span class="fa fa-ravelry"></span></a>
                    <h4>ravelry</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //partners -->

<!-- footer -->
<footer class="bg-li py-5">
    <div class="container py-xl-5 py-lg-3">
        <!-- subscribe -->
        <div class="subscribe mx-auto">
            <div class="icon-effect-w3">
                <span class="fa fa-envelope"></span>
            </div>
            <h2 class="tittle text-center font-weight-bold">Stay Updated!</h2>
            <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">Sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <form action="#" method="post" class="subscribe-wthree pt-2">
                <div class="d-flex subscribe-wthree-field">
                    <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
                    <button class="btn form-control w-50" type="submit">Subscribe</button>
                </div>
            </form>
        </div>
        <!-- //subscribe -->
    </div>
</footer>
<!-- //footer -->
<!-- copyright bottom -->
<div class="copy-bottom bg-li py-4 border-top">
    <div class="container-fluid">
        <div class="d-md-flex px-md-3 position-relative text-center">
            <!-- footer social icons -->
            <div class="social-icons-footer mb-md-0 mb-3">
                <ul class="list-unstyled">
                    <li>
                        <a href="#">
                            <span class="fa fa-facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-google-plus"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-instagram"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //footer social icons -->
            <!-- copyright -->
            <div class="copy_right mx-md-auto mb-md-0 mb-3">
                <p class="text-bl let">© 2019 Startup. All rights reserved | Design by
                    <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
                </p>
            </div>
            <!-- //copyright -->
            <!-- move top icon -->
            <a href="#home" class="move-top text-center">
                <span class="fa fa-level-up" aria-hidden="true"></span>
            </a>
            <!-- //move top icon -->
        </div>
    </div>
</div>
<!-- //copyright bottom -->
</div>



	<script src="js1/app.js"></script>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

</body>

</html>