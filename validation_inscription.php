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
				<?php
					include("menu_navigation_presentation.php") ;
				?>
			</header>
	
	
			<div class="container">
				<div class="row">
	
					<?php
					try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=meetmypencil;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
						}
							catch(Exception $e)
						{
							die('Erreur : '.$e->getMessage());
						}
					
							 /*$_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
							 $_POST['pass'] = htmlspecialchars($_POST['pass']);
							 $_POST['confirmer_pass'] = htmlspecialchars($_POST['confirmer_pass']);
							 $_POST['email_membre'] = htmlspecialchars($_POST['email_membre']);
							 $_POST['ville'] = htmlspecialchars($_POST['ville']);
							 $pass_hache = sha1($_POST['pass']);*/
					
							
							if(isset($_POST['bouton_inscription'])) //Si le formulaire a été soumis
							{ 
							$errors = [];
					
							if (!empty($_POST['pseudo']) && !empty($_POST['pass']) && !empty($_POST['confirmer_pass']) && !empty($_POST['email_membre']) && !empty($_POST['ville'])) 
							 
								{
							 /*
								* vérification pseudo
									*/
								if( strlen($_POST['pseudo']) < 5 ){
								$errors[] = '5 caractères minimums pour le pseudo !';
								}
 
								/*
								* vérification des deux mot de passe
								*/
								if ($_POST['pass'] != $_POST['confirmer_pass']) {
								$errors[] = 'les deux mot de passe sont différents !';
								}
 
								/*
								* Tu fais pareil pour tous les vérifications email, mot de passe...
								*/
 
								}else {
								$errors[] = 'veuillez remplir tous les champs';
								}
							
							if (count($errors) > 0){ // S'il y a des erreurs on les affiches
								foreach ($errors as $error) 
								{
								?>
								<div class="container">
									<div class="alert alert-danger text-center col-md-offset-3 col-md-6">
										<strong><?php echo '<p>' .$error. '</br></p>';?></strong>	
									</div>
								</div>
									
								<?php	
								}include("inc_formulaire_inscription.php") ;
								}else{ //Sinon c'est parfait ; )
								$_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
								$_POST['pass'] = htmlspecialchars($_POST['pass']);
								$_POST['confirmer_pass'] = htmlspecialchars($_POST['confirmer_pass']);
								$_POST['email_membre'] = htmlspecialchars($_POST['email_membre']);
								$_POST['ville'] = htmlspecialchars($_POST['ville']);
								$_POST['pass'] = sha1($_POST['pass']);
 
							 
							$req = $bdd->prepare('INSERT INTO membres (pseudo, password, email, ville, date_inscription) VALUES(?, ?, ?, ?,Now())');
							$req->execute(array($_POST['pseudo'],$_POST['pass'],$_POST['email_membre'],$_POST['ville']));
							
								header('Location: index.php');
								}
								}
								?>
		</body>
	</div>
</html>
	
	