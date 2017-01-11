
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Francisco Javier Lindo Vázquez</title>
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" charset="utf-8" async defer>

			//objeto

			//Creamos un objeto
			var app = {}
			//almacenamos en este objeto la url con nuestra api y nuestra key que seria el appid, aparte de otros paramentros
			// como metric para que los grados aparezcan en kelvin y lang que es el lenguaje en este caso español.
			app.url = "http://api.openweathermap.org/data/2.5/forecast?id=3118848&appid=f02f9e55c77a7c0909f0970944e9913a&units=metric";


			cargarDatos();
			function cargarDatos(){
				$.ajax({
					url: app.url,
					success: function(data){
						app.datos = data;

						// app.procesaDatos = function(){
						//guardamos los datos por separado en variables

						//cogemos la temperatura y la almacenamos en app.temperatura
						app.temperatura = app.datos.list[0].main.temp, 10;
						app.temperaturaMin = app.datos.list[0].main.temp_min, 10;
						app.temperaturaMax = app.datos.list[0].main.temp_max, 10;
						app.humedad = app.datos.list[0].main.humidity;

						var condicionIcono = app.datos.list[0].weather[0].icon;

						//obtenemos el icono (una clase) para el código que indicamos

						app.icono = obtenIcono( condicionIcono );


						//vamos al siguiente paso en el proceso: el “pintado” de los elementos en pantalla


						function obtenIcono(weatherIcon) {

							var icon;
							switch( weatherIcon ){
								case "01d":
									icon = "http://openweathermap.org/img/w/01d.png";
									break;
								case "01n":
									icon = "http://openweathermap.org/img/w/01n.png";
									break;
								case "02d":
									icon = "http://openweathermap.org/img/w/02d.png";
									break;
								case "02n":
									icon = "http://openweathermap.org/img/w/02n.png";
									break;
								case "03d":
									icon = "http://openweathermap.org/img/w/03d.png";
									break;
								case "03n":
									icon = "http://openweathermap.org/img/w/03n.png";
									break;
								case "04d":
									icon = "http://openweathermap.org/img/w/04n.png";
									break;
								case "04n":
									icon = "http://openweathermap.org/img/w/04n.png";
									break;
								case "09d":
									icon = "http://openweathermap.org/img/w/09n.png";
									break;
								case "09n":
									icon = "http://openweathermap.org/img/w/09n.png";
									break;
								case "10d":
									icon = "http://openweathermap.org/img/w/10n.png";
									break;
								case "10n":
									icon = "http://openweathermap.org/img/w/10n.png";
									break;
								case "11d":
									icon = "http://openweathermap.org/img/w/11n.png";
									break;
								case "11n":
									icon = "http://openweathermap.org/img/w/11n.png";
									break;
								case "13d":
									icon = "http://openweathermap.org/img/w/13n.png";
									break;
								case "13n":
									icon = "http://openweathermap.org/img/w/13n.png";
									break;
								case "50d":
									icon = "http://openweathermap.org/img/w/50n.png";
									break;
								case "50n":
									icon = "http://openweathermap.org/img/w/50n.png";
									break;

							}
							return icon;
						}

						muestra();



						function  muestra (){
							$('#js_w_icon').append('Icono : <img src="' + app.icono + '">');
							$('#js_w_temp').append("Temperatura de ahora : "+app.temperatura);
							$('#js_w_tempMin').append("Temperatura minima : " + app.temperaturaMin);
							$('#js_w_tempMax').append("Temperatura maxima : " + app.temperaturaMax);
							$('#js_w_humedad').append("Humedad : " + app.humedad + "%");


							//y asi podriamos seguir todos lso datos que quisieramos en texto plano



						}

						//  };
					},
					error: function(){
						alert("Error, no se pudo obtener los datos de la api");
					}

				});
			}
		</script>

    </head>
	
    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#body">FL</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">Principal</a></li>
                        <!--<li><a href="#service">Service</a></li>-->
                        <li><a href="#portfolio">Proyectos</a></li>
                        <li><a href="#testimonials">Sobre mí</a></li>
						<!--<li><a href="Curriculum.pdf" target="_blank">Currículum vítae</a></li>-->
						<li><a href="#" onclick="window.open('Curriculum.pdf')">Currículum vítae</a></li>

						<!--<li><a href="#price">price</a></li>-->
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                            <div class="caption-content">
                                <h2 class="animated fadeInDown">ELEGANCIA</h2>
<!--
                                <span class="animated fadeInDown">Clean and Professional one page Template</span>
-->
                                <a href="#contact" class="btn btn-blue btn-effect">CONTACTO</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>PROFESIONALIDAD</h2>
<!--
                                <span>Clean and Professional one page Template</span>
-->
                                <a href="#contact" class="btn btn-blue btn-effect">CONTACTO</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>CONSTANCIA</h2>
<!--
                                <span>Clean and Professional one page Template</span>
-->
                                <a href="#contact" class="btn btn-blue btn-effect">CONTACTO</a>
                            </div>
                        </div>

					</div>

				</div><!-- /sl-slider -->

                <!-- 
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->
                
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>
                

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
			
			<!-- about section -->
			<section id="about" >
				<div class="container">
					<div class="row">
						<div class="col-md-4 wow animated fadeInLeft">
							<div class="recent-works">
								<h3>Trabajos Recientes y Herramientas</h3>
								<div id="works">
									<div class="work-item">
										<p>He estado en periodo de prácticas, ya que acabe mí formacion profesional de grado superior hace muy poco. <br> <br> En este periodo he utilizado herramientas como Wordpress, Prestashop y un framework llamado Laravel con el que he realizado mi proyecto de fin de ciclo.</p>
								</div>
									<div class="work-item">
										<p>Aparte de lo comentado anteriormente, he realizado este curriculum web. <br><br> En el que he utilizado herramientas como Boostrapp, Css3 y JQuery.</p>
									</div>
									<div class="work-item">
										<p>Tambien llevo utilizando desde que empece mi formación profesional herramientas para el diseño y la maquetación web como pueden ser: <br><br> SublimeText, Brackets o PhpStorm en el que he trabajado utilizándolo con Github y GitLab.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block">
								<h3>Mi sitio web</h3>
						     	 <div class="message-body">
									 <img src="img/fotoCurriculum.jpg" class="pull-left" alt="member">
									 <p>
										 Bienvenido a mi sitio web, aqui podras ver mi curriculum, los proyectos desarrollados por mi, conocer un poco mi forma de ser y de trabajo.
										 <br>Espero que les guste.
									 </p>
						     	 </div>
						       	<a href="#testimonials" class="btn btn-border btn-effect pull-right">Un poco más</a>
						    </div>
						</div>
					</div>
				</div>
			</section>
			<!-- end about section -->
			
			
			<!-- Service section -->
			<!--<section id="service">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Service</h2>
							<p class="wow animated bounceInRight">The Key Features of our Job</p>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>
								<h3>Support</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>
								<h3>Well Documented</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>
								<h3>Design UI/UX</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-heart fa-3x"></i>
								</div>
								
								<h3>Web Security</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>							
							</div>
						</div>
						
					</div>
				</div>
			</section>-->
			<!-- end Service section -->
			
			<!-- portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">

						<div class="sec-title text-center wow animated fadeInDown">
							<h2>MIS PROYECTO</h2>
							<!--<p>Estos son algunos de los proyectos que he llevado a cabo, en ellos he trabajado con diferentes herramientas.</p>-->
						</div>


						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/item.jpg" class="img-responsive" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/item.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/item2.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street" href="img/slider/banner.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<!--<li class="portfolio-item">
								<img src="img/portfolio/item3.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Behind The world" data-fancybox-group="works" href="img/portfolio/item3.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/item4.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 4" data-fancybox-group="works" href="img/portfolio/item4.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/item5.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 5" data-fancybox-group="works" href="img/portfolio/item5.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/item6.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 6" data-fancybox-group="works" href="img/portfolio/item6.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>-->
						</ul>
						<section class="section_main">
							<div class="section__content">
								<!--<h1>Conectando con la API de tiempo</h1>-->
								<h2>El tiempo en Madrid</h2>
								<!--        aqui es donde mostramos lo que nos viene de la funcion muestra con su respectivo id. -->
								<div class="weather__icon" id="js_w_icon"></div>
								<div class="weather__block" id="js_w_temp"></div> <!--Temperatura que tenemos ahora-->
								<div class="weather__block" id="js_w_tempMin"></div><!--Temperatura minima-->
								<div class="weather__block" id="js_w_tempMax"></div><!--Temperatura minima-->
								<div class="weather__block" id="js_w_humedad"></div><!--Humedad-->

								<br><div id="widget1">
									<script src='http://openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script>
									<div id='openweathermap-widget'></div>
									<script type='text/javascript'>
										window.myWidgetParam = {
											id: 11, //esto nos lo proporciona el codigo de la propia api, es el id del widget
											cityid: 3117735, // codigo de la ciudad que se puede encontrar en un json
											appid: 'f02f9e55c77a7c0909f0970944e9913a', //key de la api
											containerid: 'openweathermap-widget', //widget
										};
										(function() {
											var script = document.createElement('script'); //creamos script en html
											script.type = 'text/javascript'; //asignamos el tipo
											script.async = true; //para ejecutar de forma asincrona
											script.src = 'http://openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js'; //ruta donde se encuentra el codigo del widget
											var s = document.getElementsByTagName('script')[0];
											s.parentNode.insertBefore(script, s);
										})();
									</script>
								</div>

							</div>

						</section>

					</div>
				</div>
			</section>
			<!-- end portfolio section -->
			
			<!-- Testimonial section -->
			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Algo sobre mi</h2>
							</div>
							
							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center wow animated fadeInLeft" >
									<img src="img/fotoCurriculum.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Francisco Javier Lindo Vázquez</span>
										<p>Soy una persona trabajadora, ambiciosa, siempre doy el 100% de mi, con muchisimas ganas de aprender y sobre todo muchisimo entusiasmo.</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="img/fotoCurriculum.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Francisco Javier Lindo Vázquez</span>
										<p>Soy responsable, sociable, simpatico, con gran compañerismo y trabajo genial en equipo.</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="img/fotoCurriculum.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Francisco Javier Lindo Vázquez</span>
										<p>No pongo impedimentos a la hora de aprender cualquier nueva herramienta, lenguaje o cualquier cosa que necesite la empresa que recurra a mi.</p>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- end Testimonial section -->
			
			<!-- Price section -->
			<!--<section id="price">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Price</h2>
							<p>Our price for your company</p>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp">
							<div class="price-table text-center">
								<span>Silver</span>
								<div class="value">
									<span>$</span>
									<span>24,35</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
							<div class="price-table featured text-center">
								<span>Gold</span>
								<div class="value">
									<span>$</span>
									<span>50,00</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>Free Trial</li>
									<li>Free Trial</li>
									<li>Free Trial</li>
									<li>Free Trial</li>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.8s">
							<div class="price-table text-center">
								<span>Diamond</span>
								<div class="value">
									<span>$</span>
									<span>123,12</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>All Bonus Points</li>
									<li>All Bonus Points</li>
									<li>All Bonus Points</li>
									<li>All Bonus Points</li>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
		
					</div>
				</div>
			</section>-->
			<!-- end Price section -->
			
			<!-- Social section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>SÍGUENOS</h2>
								<p>Pulse cualquier boton para dirigirse a mis redes sociales</p>
							</div>
							
							<ul class="social-button">
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://www.linkedin.com/in/francisco-javier-lindo-v%C3%A1zquez-0809b244?trk=nav_responsive_tab_profile_pic" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://twitter.com/Lindo0420" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://www.facebook.com/flindovazquez" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
							</ul>
							
						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->
			
			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">
						
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Contacto</h2>
							<p>Deje un mensaje</p>
						</div>
						
						
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<!--role="form" action="php/contacto.php" method="POST" id="contacto" title="Nombre"-->
							<form action="php/contacto.php" method="post" id="contacto">
								<div class="input-field">
									<input type="text" name="name" required="required" class="form-control" placeholder="Nombre...">
								</div>
								<div class="input-field">
									<input type="email" name="email" required="required" class="form-control" placeholder="Email...">
								</div>
								<div class="input-field">
									<input type="text" name="subject" required="required" class="form-control" placeholder="Asunto...">
								</div>
								<div class="input-field">
									<textarea name="message" required="required" class="form-control" placeholder="Mensaje..."></textarea>
								</div>
								<input type="submit" class="btn btn-blue btn-effect" name="enviar" tabindex="7" value="Enviar">
								<input type="reset" class="btn btn-blue btn-effect" tabindex="8" value="Borrar">
								<input type="hidden" name="estado" value="1">
							</form>
						</div>
						
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Contáctenos</h3>
								<p><i class="fa fa-pencil"></i>Calle Martires, Nº 28<span>Barcarrota, Badajoz 06160</span> <span>Extremadura</span><span>España</span></p><br>
								<p><i class="fa fa-phone"></i>Phone: (+34)602-48-56-88 </p>
								<p><i class="fa fa-envelope"></i>flindo10@gmail.com</p>
							</address>
						</div>
			
					</div>
				</div>
			</section>
			<!-- end Contact section -->
			
			<section id="google-map">
				<div id="map-canvas" class="wow animated fadeInUp"></div>
			</section>
		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<!--<div class="wow animated fadeInDown">
							<p>newsletter signup</p>
							<p>Get Cool Stuff! We hate spam!</p>
						</div>
						<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
							<div class="input-field">
								<input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
								<button type="submit" class="submit-icon">
									<i class="fa fa-paper-plane fa-lg"></i>
								</button>
							</div>
						</form>-->
						<div class="footer-social">
							<ul>
								<!--<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>-->
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://www.linkedin.com/in/francisco-javier-lindo-v%C3%A1zquez-0809b244?trk=nav_responsive_tab_profile_pic" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://twitter.com/Lindo0420" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://www.facebook.com/flindovazquez" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
							</ul>
						</div>
						
						<p>Copyright &copy; 2016 Diseño y Desarrollo Por <a href="http://www.themefisher.com">Francisco Javier Lindo Vázquez</a> </p>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>