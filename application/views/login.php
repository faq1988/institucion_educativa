
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Sistema de login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>bootstraptemplate/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>bootstraptemplate/css/signin.css" rel="stylesheet">
  </head>

  <body>
<form method="POST">
    <section class="login-block">
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
        <h2 class="text-center">Iniciar sesión</h2>
        <form class="login-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Usuario</label>
    <input type="text" class="form-control" placeholder="Nombre de usuario" name="username">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Contraseña</label>
    <input type="password" class="form-control" placeholder="Contraseña" name="password">
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Recordar</small>
    </label>
    <button type="submit" class="btn btn-login float-right">Ingresar</button>
  </div>
  
</form>

    </div>
    <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Bienvenidos a Kinder Time</h2>
            <p>La agenda infantil que permite a los padres visualizar en tiempo real las actividades que realizan los mas pequeños en el centro educativo</p>
        </div>  
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>  
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/497848/pexels-photo-497848.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>  
    </div>
  </div>
            </div>     
        
    </div>
  </div>
</div>
</section>
  </body>
</html>
