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
						if (!empty($_POST['pseudo']) && !empty($_POST['pass']) && !empty($_POST['confirmer_pass']) && !empty($_POST['email_membre']) && !empty($_POST['ville']) && $_POST['pass']==$_POST['confirmer_pass'] && $_POST['email_membre']==$_POST['confirmation_email_membre'] ) 
							{	
					?>	
					
						<div class="col-md-offset-3 col-md-6">
	
							<legend>Vos informations</legend>
								<label>Pseudo : </label> 
									<?php echo $_POST['pseudo'] ; ?></br>
								<label>Email : </label>
									<?php echo $_POST['email_membre'] ; ?></br>
								<label>Ville : </label>
									<?php echo $_POST['ville'] ; ?></br>
						</div>
	
					<?php
							}
						else 
							{
					?>	
													
							<div class="container">
	
								<div class"row">	
									<div class="alert alert-danger text-center col-md-offset-3 col-md-6">
										<strong>Le formulaire n'est pas valide , veuillez recommencer.</strong>	
									</div>
								</div>
		
								<div class="row">		
						
									<form method="post" action="validation_inscription.php" class="col-md-offset-3 col-md-6 ">
			
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
												<label for="email_membre">Adresse email : </label>
													<input id="email_membre" type="email" placeholder="votre adresse email" name="email_membre" class="form-control">
											</div>
											<div class="form-group">
												<label for="ville">Votre ville : </label>
													<input id="ville" type="text" placeholder="votre ville" name="ville" class="form-control">
											</div>
											<button class="pull-right btn btn-success">Envoyer</button>
					
									</form>
								</div>	
							</div>
	
					<?php 
						}
					?>
	
		</body>
	</div>
</html>
	
	