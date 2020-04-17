
  @extends('layouts.app')
  @section('content')
  <header class="mt-0 pt-0">

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
						<a href="/contacto" class="nav-link  font-weight-bold  active font-italic" ><h3 class="font-italic">CONTACTO</h3></a>
                    </li>
                    <li class="nav-item">
                  
					
				</ul>

			
			</div>
		</div>
    </nav>

</head>

<body   
style="background-image:url('http:/img/f3.jpg');
background-repeat: no-repeat;
height:1000px;
border-radius:40px;
position:relative;
background-repeat: repeat;">
<br>
  <div class="container">

        <center>
                	
                        
                                <h1 class="text-white">Quienes somos</h1>
                                <br>
                                
                                   <h3 class="text-white"> Somos un equipo de desarrollo orientado a prestar 
                                    servicios de administración y gestión en los diferentes
                                    procesos que realizan en las  instalaciones del restaurante Krokanto´s 
                                    con el fin de dar soporte al cuerpo de administrativo,</h3>
                                    <br>

                                </p>
                                <h3 class="text-white">
                                    Somos un restaurante tradicional porque hacemos todo desde el
                                    principio y de una forma muy personal, con dedicación y trabajo diario.
                                    
                                    Prestamos diversos servicios, te atenderemos lo más rápido posible,
                                    nos encontramos ubicados en cucuta norte de santander.
                                
                                </h3>
                              
                   
                    <br>
                    <br>
                
        </center>      

  </div>
  <center><footer class= "">
    <p class=" text-white" >Universidad de Pamplona - © 2020</p>
    <br>
</footer></center>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
@endsection

</html>


