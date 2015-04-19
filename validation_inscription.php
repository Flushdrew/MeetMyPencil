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
								$errors[] = 'Les deux mot de passe sont différents !';
								}
 
								/*
								* Tu fais pareil pour tous les vérifications email, mot de passe...
								*/
 
								}else {
								$errors[] = 'veuillez remplir tous les champs';
								}
								
								/*
								* vérification si le pseudo est disponible
								*/
								
								$pseudo_Exist = $bdd->prepare("SELECT pseudo FROM membres WHERE pseudo = :pseudo");
								//On recupère les pseudos de la base ou les pseudos sont egaaux au pseudo passé par le formulaire
								$pseudo_Exist->bindValue('pseudo', $_POST['pseudo'], PDO::PARAM_STR);
								$pseudo_Exist->execute();
								//on exécute la requête
								$pseudoINbdd = $pseudo_Exist->rowCount();
								//Rowcount permet de sortir le nombre de valeur que ta requête renvoi, que l'on rentre dans la variable pseudoINbdd (ou autre )
								if($pseudoINbdd == 1)
								//Si la requête renvoi 0, le pseudo n'existe pas dans la base, sinon le pseudo existe.
								{
								$errors[] = 'Ce pseudo est déja pris' ;
								}
								$pseudo_Exist->closeCursor();
								
								/*
								* vérification si l'adresse email est déja utilisée
								*/
								
								$email_Exist = $bdd->prepare("SELECT email FROM membres WHERE email = :email_membre");
								//On recupère les emails de la base ou les emails sont egales à l'email passée par le formulaire
								$email_Exist->bindValue('email_membre', $_POST['email_membre'], PDO::PARAM_STR);
								$email_Exist->execute();
								//on exécute la requête
								$emailINbdd = $email_Exist->rowCount();
								//Rowcount permet de sortir le nombre de valeur que ta requête renvoi, que l'on rentre dans la variable pseudoINbdd (ou autre )
								if($emailINbdd == 1)
								//Si la requête renvoi 0, l'email n'existe pas dans la base, sinon l'email existe.
								{
								$errors[] = 'Cette email est déja utilisée' ;
								}
								$email_Exist->closeCursor();
							
							if (count($errors) > 0){ // S'il y a des erreurs on les affiche
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
							
							$req->closeCursor();
								header('Location: index.php');
								}
								}
								?>
		</body>
	</div>
</html>
	
	