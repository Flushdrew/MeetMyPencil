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

	<div class="container-fluid">
	
  <body data-spy="scroll" data-target=".navbar">

	
    <header>

      <!-- Navigation
      ================================================== -->
	<nav class="navbar navbar-inverse navbar-fixed-top"> 
		<div class="container">	
			<div class="navbar-header"> 
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
		<a id="titre_site" class="navbar-brand" href="http://localhost/MeetMyPencil2/">MeetMyPencil</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#accueil">Accueil</a></li>
					<li><a href="#qui">	Partagez vos dessins</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
		<form class="navbar-form navbar-right inline-form">
			<div class="form-group">
				<a href"#" class="btn btn-danger">S'inscrire</a>
			</div>
			<div class="form-group">
				<a href"#" class="btn btn-danger">Connexion</a>
			</div>
		</form>
				
	</div>
	</div>
	</nav>

 

    </header>
	
	
	<div class="container"</div>
	
	<div class"row">	
		<form method="post" action="validation_inscription.php" class="col-md-offset-3 col-md-6" >
			<legend>Inscription :</legend>
			
				<div class="form-group">
					<label for="pseudo">Pseudo : </label>
					<input id="pseudo" placeholder="votre pseudo" type="text" name="pseudo" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="pass">Mot de passe : </label>
					<input id="pass" type="password" placeholder="votre mot de passe" name="pass" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="confirmer_pass">Confirmer mot de passe : </label>
					<input id="confirmer_pass" placeholder="veuillez confirmer le mot de passe" type="password" name="confirmer_pass" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="email">Adresse email : </label>
					<input id="email" type="email" placeholder="votre adresse email" name="email" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="select">Age : </label>
					<select id="select" class="form-control">
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
					</select>
				</div>
				
			<button class="pull-right">Envoyer</button>
		</form>

		</div>
	</div>
	