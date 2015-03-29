<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MeetMyPencil.com</title>
    <meta name="description" content="Le site de la maison de l'architecture">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
	<style type="text/css">
  body { padding-top: 70px; }
</style>



	</head>

	<?php include("menu_navigation_presentation.php") ?>
	
		<div class="container"</div>
	
	<div class"row">	
		<form method="post" action="validation_inscription.php" class="col-md-offset-3 col-md-6" >
			<legend>Connexion :</legend>
			
				<div class="form-group">
					<label for="pseudo">Pseudo : </label>
					<input id="pseudo" placeholder="votre pseudo" type="text" name="pseudo" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="pass">Mot de passe : </label>
					<input id="pass" type="password" placeholder="votre mot de passe" name="pass" class="form-control">
				</div>
				<button class="pull-right btn btn-success">Se connecter</button>
		</form>	
  
		</body>
	</div>
</html>