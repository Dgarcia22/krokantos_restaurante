
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
						<a href="/contacto" class="nav-link font-weight-bold active font-italic"><h3 class="font-italic">CONTACTO</h3></a>
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
 
<div class="container-fluid ar-content">
  <div class=" row">
    <div class="col-md-3 col-sm-3 col-lm-3 col-xs-3">
    
     <center> <h3 class="text-white">Servicios</h3>
      <div class="ads">
        <a href="#"><img style="width:200px; height:100px;" src="img/a1.jpg" width="300" alt=""><br></a>
        
        <a href="#"><img style="width:200px; height:100px;" src="img/c1.jpg" width="300" alt=""><br></a>
              
        <a href="#"><img style="width:200px; height:100px;" src="img/d1.png" width="300" alt=""><br></a>
        <a href="#"><img style="width:200px; height:100px;" src="img/a2.jpg" width="300" alt=""><br></a>
      </div>
     </center>
     
    </div> 
<div class="col-md-6 col-sm-6 col-lm-6 col-xs-6">
                        
  <div class="row mt-3">
      <div class="col ">
        <h1 class="text-white">Contacto</h1>
          <form action="">
              <div class="form-group">
                  <label  class="text-white" for="nombre">Nombre</label>
                  <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
              </div>

              <div class="form-group">
                  <label class="text-white" for="pass">Correo electrónico</label>
                  <input type="text" class="form-control" placeholder="Correo electrónico" name="Correoelectrónico" id="Correoelectrónico">
              </div>

              <div class="form-group">
                      <label class="text-white"  for="pass">Número de teléfono</label>
                      <input type="text" class="form-control" placeholder="numero de telefono" name="numerotelefono" id="numerotelefono">
                  </div>

              <div class="form-group">
                  <label class="text-white" for="mensaje">Mensaje</label>
                  <textarea name="mensaje" id="mensaje" class="form-control"></textarea>
              </div>

              <center><button class="btn btn-primary" type="submit">Enviar</button></center>
          </form>
      
    
        </div>
      </div>  
    </div>
      <div class="col-md-3 col-sm-3 col-lm-3 col-xs-3">
         <center>
          <h3 class="text-white">Servicios</h3>
          <div class="ads">
            <a href="#"><img style="width:200px; height:100px;" src="img/c2.jpg" width="300" alt=""><br></a>
            
            <a href="#"><img style="width:200px; height:100px;" src="img/a2.jpg" width="300" alt=""><br></a>
                  
            <a href="#"><img style="width:200px; height:100px;" src="img/d2.png" width="300" alt=""><br></a>
            <a href="#"><img style="width:200px; height:100px;" src="img/c3.jpg" width="300" alt=""><br></a>
          </div>
         </center>
        </div> 
    
  </div>  
        



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


