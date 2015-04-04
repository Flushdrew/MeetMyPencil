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
    <div class="item active"><img src="img/dessinenmusiquegrand.jpg" alt="bd">
		<h1 class="carousel-caption">Un design époustouflant</h1></div>
    <div class="item"><img src="img/pochettecrayongrand.jpg" alt="Architecture">
		<h1 class="carousel-caption">Une structure incroyable</h1></div>
    <div class="item"><img src="img/dessinpontgrand.jpg" alt="Architecture">
		<h1 class="carousel-caption">Un architecture hors norme</h1></div>
	<div class="item"><img src="img/magasincrayongrand.jpg" alt="Architecture">
		<h1 class="carousel-caption">Des résultats magnifiques</h1></div>
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
			<div class="col-md-5">
				<img src="img/personnage.jpg" alt="Accueil" class="img-thumbnail">
			</div>    
			<div class="col-md-7">
				<p> Venez partager avec nous vos créations du jour ou tout simplement 
				parcourir celle des membres.Venez apprivoiser des
				techniques de dessins et le matériel adéquat !</p>
			</div>
		</div>	
	</div>	
	
	<!-- 2eme bloc
    ================================================== -->
	<div class="jumbotron" id="qui">
    <h1 class="text-center">Ne travaillez plus seul </h1>
		<div class="row">
			<div class="col-md-7">
				<p>Vous recherchez un scénariste ou un dessinateur ? Venez partager vos projets ici !</br>
					Vous pouvez protéger certaines de vos créations et ne les partager qu'avec les personnes avec qui vous souhaitez travailler.
					</p>
			</div>
			<div class="col-md-5">
				<img class="img-thumbnail" class="pull-right"  src="img/bd.jpg" alt="Equipe" >            
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
				<button class="pull-right" type="submit">Envoyer</button>
				</div>
				</div>
				</form>
					</div>
			</div>
		</div>	
	</div>	

		<div class"row">
    <footer class="col-md-offset-3 col-md-6 text-center" >
      <a class="btn btn-default" href="#"><i class="fa fa-twitter fa-2x"></i></a>
      <a class="btn btn-default" href="#"><i class="fa fa-facebook fa-2x"></i></a>
      <a class="btn btn-default" href="#"><i class="fa fa-google-plus fa-2x"></i></a>
      <a class="btn btn-default" href="#"><i class="fa fa-flickr fa-2x"></i></a>
      <a class="btn btn-default" href="#"><i class="fa fa-spotify fa-2x"></i></a>
    </footer>
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
</html>