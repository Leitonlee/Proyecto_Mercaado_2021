<!--Pagina de login-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viwport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "estilos.css">
	  <title>Ingreso</title>
</head>
<body class="bodyIndex">
    <div class="alert alert-danger" role="alert">
    <h1>Mercado Central</h1>
    </div>
      <div class="contenedor">
        <div class="card" style="width: 18rem;">
        <h3>Inicio de Sesión</h3>
        <img src="imagenes/MercadoLogo.jpg" class="car-img-top" /><br>
          <div class="card-body1">
              <form name="login" action="validar.php" method="POST">
       			  Usuario: <input type="text" name="usuario"><br><br>
       			  Clave: <input type="password" name="clave"><br><br>
       			  <input type="submit" name="ingresar" value="Ingresar">
       		  </form>
          </div>
        </div>
        <div clas="contenedor-fotoPortada">
          <img src="imagenes/fotoPortada.jpg" height="600" width="800"/>
        </div>
      </div>   
</body>
</html>