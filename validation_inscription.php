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
	include("menu_navigation.php") ;
	?>
	</header>
	
	
	<div class="container">
	<div class="row">
	
	<?php
	if (isset($_POST['pseudo']) AND isset($_POST['pass']) AND isset($_POST['confirmer_pass']) AND isset($_POST['email']) AND isset($_POST['ville']) AND ($_POST['pass'] === $_POST['confirmer_pass']) ) 
		
	{	
	?>	
		<div class="col-md-offset-3 col-md-6">
	
			<legend>Vos informations</legend>
				<label>Pseudo : </label> 
					<?php echo $_POST['pseudo'] ; ?></br>
				<label>email : </label>
					<?php echo $_POST['email'] ; ?></br>
	
		</div>
	</div>
	</div>
	
	<?php
	}
	
	else 
		{
		echo 'il y a une erreur dans le formulaire , veuillez recommencer' ;
		echo $_POST['pass'] ;
		echo $_POST['confirmer_pass'] ;
		}
	?>
	
	</body>
	</html>
	
	