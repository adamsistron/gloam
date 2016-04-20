<!-- Latest compiled and minified CSS -->
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"-->

<!-- Optional theme -->
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"-->

<!-- Latest compiled and minified JavaScript -->
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script-->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Bootstrap</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("css/bootstrap.min.css");?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="contenedor-fluido">
            <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        Sistema de Gestión GLOAM
      </a>
    </div>
  </div>
</nav>
           
		<div class="row">
			<div class="col-md-3 col-md-offset-4">
<form>
    <div class="form-group">
        <label for="usuario">Usuario</label>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    
            </span>
            <input type="text" class="form-control" placeholder="Usuario" aria-describedby="basic-addon1" id="usuario">
        </div>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">
                <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                    
            </span>
            <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2" id="password">
        </div>
    </div>
    <button type="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atrás</button>
    <button type="submit" class="btn btn-success">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Entrar</button>
</form>
                            
                        </div>
                </div>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("js/jquery.min.js");?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script-->
    <script src="<?php echo base_url("js/bootstrap.min.js");?>"></script>
  </body>
</html>
