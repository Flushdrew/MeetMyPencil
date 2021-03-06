<?php
session_start();
?>

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
	<link rel="stylesheet" href="mmp.css" >
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	</head>
	
	<div class="container-fluid">
	
		<?php include("menu_navigation.php");?>
					
	
		<body class="container">
			<div class="row">
			
				<div class="col-md-4 profil">
				<?php
					$image = imagecreatefrompng("img/heisenberg.png");
					imagepng($image);
				?>
				<p>image de profil</p>
				</div>	
			
				
				
				<?php
					try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=meetmypencil;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
						}
							catch(Exception $e)
						{
							die('Erreur : '.$e->getMessage());
						}
						
					$reponse = $bdd->prepare('SELECT pseudo,ville,email FROM membres WHERE id = :id');
					$reponse->execute(array(
					'id' => $_SESSION['id']));		
					
					$donnees = $reponse->fetch() ;
								{
				?>
				
					<div class="col-md-offset-1 col-md-6 profil">
						<strong> Pseudo : </strong> <?php echo $donnees['pseudo'] ;?></br>
						<strong> Email  : </strong> <?php echo $donnees['email'] ;?></br>
						<strong> Ville  : </strong> <?php echo $donnees['ville'] ;?></br>
					</div>
				
				<?php
							}	
				$reponse->closeCursor();
				?>
				
			</div>
			
			<div class="row">
				<div>
					<!-- affichage des dessins par date --> 
				</div>
			</div>
		</body>
	</div>	
</html>