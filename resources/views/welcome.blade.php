
  @extends('layouts.app')
 
  @section('content')
  <header class="mt-0 pt-0" >

   <title>Restaurante Krokanto's</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <nav class="navbar navbar-toggleable-md navbar-inverse fondocolor">
		<div class="container">
			<button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#fm-menu" aria-controls="fm-menu" aria-expanded="false" aria-label="Menu">
				<span class="navbar-toggler-icon"></span>
			</button>

			<a href="#" class="navbar-brand text-warning">.</a>

			<div class="collapse navbar-collapse" id="fm-menu">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="/welcome" class="  nav-link  font-weight-bold active textossss"><h3 class="font-italic">INICIO </h3></a>
					</li>
					<li class="nav-item">
						<a class="nav-link  font-weight-bold  active font-italic"  href="/somos" ><h3 class="font-italic">QUIENES SOMOS</h3></a>
                    </li>
                    <li class="nav-item">
						<a href="/contacto" class="nav-link font-weight-bold active font-italic"><h3 class="font-italic">CONTACTO</h3></a>
                    </li>
                    <li class="nav-item">
                  
					
				</ul>

			
			</div>
		</div>
    </nav>

</head>
<body   style="background-image:url('http:/img/f3.jpg');
height:1000px;
border-radius:40px;
position:relative;
background-repeat: repeat;">
  <div class="row mt-3">
    <div class="col-12 mt-3">
        <div class="carousel slide" id="secondary-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#secondary-carousel" data-slid-to="0" class="active"></li>
                <li data-target="#secondary-carousel" data-slid-to="1"></li>
                <li data-target="#secondary-carousel" data-slid-to="2"></li>
            </ol>

            <div class="container">
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption d-block">
                        <h2>BIENVENIDOS</h2>
                        <p><h4>La Mejor Gastronomia La Podras Encontrar Aqui en nuestro Restaurante KROKANTO'S</h4></p>
                    </div>
                    <img  style="width:1400px; height:500px;" src="img/m1.png"alt="">
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-block">
                        <h4>Titulo de la Imagen</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, possimus!</p>
                    </div>
                    <img style="width:1400px; height:500px;" src="img/m2.png" alt="">
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-block">
                        <h4>Titulo de la Imagen</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, possimus!</p>
                    </div>
                    <img style="width:1400px; height:500px;" src="img/m3.png" alt="">
                </div>
            </div>

            <a href="#secondary-carousel" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>

            <a href="#secondary-carousel" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
    </div>
</div>


<div class="container">
    <div class="row mt-3">
    <div class="col">
        <div class="card card-danger">
            <div class="card-block">
                <h1 class="mb-3">SERVICIOS</h1>
             </div>
        </div>
    </div>
</div></div>



<div class="container">
<div class="row mt-3">
    <div class="col fondocolor">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#tab1" class="nav-link  fondocolor " data-toggle="tab"><h2 class="font-italic textooo">Desayunos</h2></a>
            </li>
            <li class="nav-item">
                <a href="#tab2" class="nav-link  fondocolor" data-toggle="tab"><h2 class="font-italic textooo">Almuerzos</h2></a>
            </li>
            <li class="nav-item">
                <a href="#tab3" class="nav-link  fondocolor" data-toggle="tab"><h2 class="font-italic textooo">Cenas</h2></a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab1" role="tabpanel">
                
                

                <div class="container">
                    <div class="row">
                        <div class="col">
                            

                            <div class="card-group mt-3">
                                <div class="card card-inverse card-danger">
                                   <br> <img style="width:400px; height:250px;" src="img/d1.png" class="card-image-top img-fluid" alt="">
                                    <div class="card-block">
                                        <h1 class="card-title">Encabezado</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                             adipisicing elit. Nesciunt natus, odit eius impedit provident
                                              fugiat voluptatum, doloremque repudiandae nemo aspernatur 
                                              delectus quas, placeat alias animi pariatur culpa sunt
                                               asperiores, et!</p>
                                       
                                    </div>
                                  
                                </div>
                
                                <div class="card card-inverse card-danger">
                                   <br> <img style="width:400px; height:250px;" src="img/d2.png" class="card-image-top img-fluid" alt="">
                                    <div class="card-block">
                                        <h1 class="card-title">Encabezado</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                
                                       </p>
                                        
                                    </div>
                                </div>
                
                                <div class="card card-inverse card-danger">
                                   <br> <img style="width:400px; height:250px;" src="img/d3.jpg" class="card-image-top img-fluid" alt="">
                                    <div class="card-block">
                                        <h1 class="card-title">Encabezado</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur 
                                            adipisicing elit. Nesciunt natus, odit eius impedit provident
                                             fugiat voluptatum, doloremque repudiandae nemo aspernatur
                                              delectus quas, placeat alias animi pariatur culpa sunt 
                                              asperiores, et!</p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab2" role="tabpanel">
                   
              
                <div class="container">
                    <div class="row">
                        <div class="col">
                            
                            <div class="card-group mt-3">
                                <div class="card card-inverse card-danger">
                                  <br>  <img style="width:400px; height:250px;" src="img/a1.jpg" class="card-image-top img-fluid" alt="">
                                    <div class="card-block">
                                        <h1 class="card-title">Encabezado</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                             adipisicing elit. Nesciunt natus, odit eius impedit provident
                                              fugiat voluptatum, doloremque repudiandae nemo aspernatur 
                                              delectus quas, placeat alias animi pariatur culpa sunt
                                               asperiores, et!</p>
                                       
                                    </div>
                                  
                                </div>
                
                                <div class="card card-inverse card-danger">
                                    <br><img style="width:400px; height:250px;" src="img/a2.jpg" class="card-image-top img-fluid" alt="">
                                    <div class="card-block">
                                        <h1 class="card-title">Encabezado</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                
                                       </p>
                                        
                                    </div>
                                </div>
                
                                <div class="card card-inverse card-danger">
                                   <br> <img style="width:400px; height:250px;" src="img/a3.jpg" class="card-image-top img-fluid" alt="">
                                    <div class="card-block">
                                        <h1 class="card-title">Encabezado</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur 
                                            adipisicing elit. Nesciunt natus, odit eius impedit provident
                                             fugiat voluptatum, doloremque repudiandae nemo aspernatur
                                              delectus quas, placeat alias animi pariatur culpa sunt 
                                              asperiores, et!</p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
             
            <div class="tab-pane" id="tab3" role="tabpanel">
              


                
                <div class="container">
                    <div class="row">
                        <div class="col">
                            
                            <div class="  card-group mt-3">
                                <div class="card card-inverse card-danger">
                                    <br><img style="width:400px; height:250px;" src="img/c1.jpg" class="card-image-top img-fluid" alt="">
                                    <div class="card-block">
                                        <h1 class="card-title">Encabezado</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                             adipisicing elit. Nesciunt natus, odit eius impedit provident
                                              fugiat voluptatum, doloremque repudiandae nemo aspernatur 
                                              delectus quas, placeat alias animi pariatur culpa sunt
                                               asperiores, et!</p>
                                       
                                    </div>
                                  
                                </div>
                
                                <div class="card card-inverse card-danger">
                                    <br><img style="width:400px; height:250px;" src="img/c2.jpg" class="card-image-top img-fluid" alt="">
                                    <div class="card-block">
                                        <h1 class="card-title">Encabezado</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                
                                       </p>
                                        
                                    </div>
                                </div>
                
                                <div class="card card-inverse  card-danger">
                                    <br><img style="width:400px; height:250px;" src="img/c3.jpg" class="card-image-top img-fluid" alt="">
                                    <div class="card-block">
                                        <h1 class="card-title">Encabezado</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur 
                                            adipisicing elit. Nesciunt natus, odit eius impedit provident
                                             fugiat voluptatum, doloremque repudiandae nemo aspernatur
                                              delectus quas, placeat alias animi pariatur culpa sunt 
                                              asperiores, et!</p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 


  </div>
    </div>
</div>
</div>
</div>
<BR>

<div class="container">
    <div class="row mt-3">
    <div class="col">
        <div class="card card-danger">
            <div class="card-block">
                <h1 class="mb-3">EVENTOS ESPECIALES</h1>
            </div>
        </div>
    </div>
</div></div>

<div class="row mt-3">
    <div class="col">
        <div class="card card-inverse card-success">
            <div class="card-block">
                <h3 class="card-title">SEMANA SANTA</h3>
                <p class="card-text">ABRIL 2020</p>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card card-inverse card-primary">
            <div class="card-block">
                <h3 class="card-title">DIA DE LA MADRE</h3>
                <p class="card-text">MAYO 2020</p>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card card-inverse card-success">
            <div class="card-block">
                <h3 class="card-title">DIA DEL PADRE</h3>
                <p class="card-text">JUNIO 2020</p>
               
            </div>
        </div>
    </div>

   

    <div class="col">
        <div class="card card-inverse card-primary">
            <div class="card-block">
                <h3 class="card-title">SAN VALENTIN</h3>
                <p class="card-text">SEPTIEMBRE 2020</p>
            </div>
        </div>
    </div>
</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


<center><footer class= "pie">
    <p class="text-white" >Universidad de Pamplona - © 2020</p>
    <br>
</footer></center>

 @endsection