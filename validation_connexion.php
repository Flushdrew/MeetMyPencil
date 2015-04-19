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
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	
	</head>
	<style type="text/css">
  body { padding-top: 70px; }
</style>


	<div class="container-fluid">
	
		<?php include("menu_navigation_presentation.php") ?>
		
		<?php 
		try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=meetmypencil;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
						}
							catch(Exception $e)
						{
							die('Erreur : '.$e->getMessage());
						}
		
			// Hachage du mot de passe
				$pass_hache = sha1($_POST['pass']);

			// Vérification des identifiants
					$req = $bdd->prepare('SELECT id FROM membres WHERE pseudo = :pseudo AND password = :pass');
					$req->execute(array(
					'pseudo' => $_POST['pseudo'],
					'pass' => $pass_hache));

					$resultat = $req->fetch();

					if (!$resultat)
						{
						
						?>
						
							<div class="container">
								<div class="row">
									<div class="alert alert-danger text-center col-md-offset-3 col-md-6">
										<strong><p>Les identifiants sont incorrects</br></p></strong>	
									</div>
								</div>
							</div>
						<?php
						include("inc_formulaire_connexion.php") ;
						}
					else
						{
						session_start();
						$_SESSION['id'] = $resultat['id'];
						$_SESSION['pseudo'] = $_POST['pseudo'];
						header('Location: index.php');
						}
						?>
		