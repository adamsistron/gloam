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
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    
    <?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
        
        
  </head>
  <body>
      <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">GLOAM</a>
          </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
<!--        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
        <li id="clientes"><a href="<?php echo site_url('examples/customers_management')?>">Clientes</a></li>
        <li id="ordenes"><a href="<?php echo site_url('examples/orders_management')?>">Ordenes</a></li>
        <li id="productos"><a href="<?php echo site_url('examples/products_management')?>">Productos</a></li>
        <li id="usuarios"><a href="<?php echo site_url('examples/usuarios_management')?>">Usuarios</a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right ">
        <li><button type="button" class="btn btn-danger navbar-btn">Salir</button></li>
      </ul>
    </div><!-- /.navbar-collapse -->
           </nav>

       <div class="container">

      <div class="starter-template">
        <h3><?php echo $titulo; ?></h3>
        <p class="lead"><?php echo $descripcion; ?>.</p>
        <?php echo $output; ?>
      </div>

    </div><!-- /.container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="<?php //echo base_url("js/jquery.min.js");?>"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script-->
    <link href="<?php echo base_url("css/bootstrap.min.css");?>" rel="stylesheet">
    <script src="<?php echo base_url("js/bootstrap.min.js");?>"></script>
    <script>
        $("#<?php echo $menu;?>").addClass("active");
        </script>
  </body>
</html>
