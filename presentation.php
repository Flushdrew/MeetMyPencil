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
	<link rel="stylesheet" href="mmp.css" >
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  

  </head>

	<div class="container">
	<div class="row bloc_accueil">
	
  <body data-spy="scroll" data-target=".navbar">

	
    <header>

	<!--Menu de navigation-->
     <?php include("menu_navigation_presentation.php") ?>

 
    </header>

    <!-- Caroussel
    ================================================== -->
	
	
	<div id="carousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
	<li data-target="#carousel" data-slide-to="3"></li>
  </ol>
	<div class="carousel-inner">
    <div class="item active"><img src="img/dessinenmusiquegrand2.jpg" alt="bd">
		<h1 class="carousel-caption">Partagez votre passion...</h1></div>
    <div class="item"><img src="img/pochettecrayongrand2.jpg" alt="Architecture">
		<h1 class="carousel-caption">...votre matériel...</h1></div>
    <div class="item"><img src="img/dessinpontgrand3.jpg" alt="Architecture">
		<h1 class="carousel-caption">...vos réalisations...</h1></div>
	<div class="item"><img src="img/sketch2.jpg" alt="Architecture">
		<h1 class="carousel-caption">...et meme vos croquis !</h1></div>
    </div>
	<a class="left carousel-control" href="#carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
	
	</div>
	
	<div class="container" id="accueil">
	
	<!-- 1er bloc
    ================================================== -->
	<div class="jumbotron" >
    <h1 class="text-center">Bienvenue sur MeetMyPencil</h1>
		<div class="row">
			<div class="col-md-6">
				<img src="img/personnage.jpg" alt="Accueil" class="img-thumbnail">
			</div>    
			<div class="col-md-6">
				<p> Venez partager avec nous vos créations du jour ou tout simplement 
				parcourir celle des membres.</br>Venez apprivoiser des
				techniques de dessins et le matériel adéquat !</p>
			</div>
		</div>	
	</div>	
	
	<!-- 2eme bloc
    ================================================== -->
	<div class="jumbotron" id="qui">
    <h1 class="text-center">Ne travaillez plus seul </h1>
		<div class="row">
			<div class="col-md-6">
				<p>Vous recherchez un scénariste ou un dessinateur ? Venez partager vos projets ici !</br>
					Vous pouvez protéger certaines de vos créations et ne les partager qu'avec les personnes avec qui vous souhaitez travailler.
					</p>
			</div>
			<div class="col-md-6">
				<img class="img-thumbnail" class="pull-right"  src="img/bd.jpg" alt="Equipe" >            
			</div>
		</div>
	</div>		
	
	<!-- 3eme bloc
    ================================================== -->
	<div class="jumbotron" id="inspiration">
    <h1 class="text-center">Un manque d'inspiration ? </h1>
		<div class="row">
		<div class="col-md-6">
				<img class="img-thumbnail" class="pull-right"  src="img/pasdidee.jpg" alt="idee" >            
			</div>
			<div class="col-md-6">
				<p>Venez chercher des idées de dessin en parcourant les profils de nos membres.</br>
					Vous pouvez également parcourir nos themes ou rechercher ceux qui vous interessent.
					</p>
			</div>
		</div>
	</div>		
	
	<!-- Formulaire
    ================================================== -->
	<div class="jumbotron" id="contact">
    <h1 class="text-center"> Un message pour nous ?</h1>
	
		<div class="row"
			
				<form role="form">
				<div class="col-md-6">
				<input type="email" class="form-control" placeholder="Votre email">
				</div>
				<div class="col-md-6">
				<textarea rows="3" class="form-control" placeholder="Votre message"></textarea>
				</div>
				<div class"row">
				<div class="col-md-12">
				<button class="pull-right btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok-sign"> Envoyer</button>
				</div>
				</div>
				</form>
					</div>
			</div>
		</div>	
	</div>	

	
		
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<script>
	$(function () {
  $('li>a').on('click', function(e) {
    e.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000, function(){
      window.location.hash = hash;
    });
  });
});
	</script>
	
  </body>
  </div>
</div>

<footer class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-3">
			<p>MeetMyPencil 2015</p>
			</div>		
			<div class="col-md-offset-2 col-md-3 text-center" >
				<a class="btn btn-default" href="#"><i class="fa fa-twitter "></i></a>
				<a class="btn btn-default" href="#"><i class="fa fa-facebook fa-2x"></i></a>
				<a class="btn btn-default" href="#"><i class="fa fa-google-plus fa-2x"></i></a>
				<a class="btn btn-default" href="#"><i class="fa fa-flickr fa-2x"></i></a>
			</div>
		</div>
	</div>	
</footer>
</html>