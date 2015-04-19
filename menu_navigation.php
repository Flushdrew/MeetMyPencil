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
					<li><a href="#accueil">accueil</a></li>
					<li><a href="#qui">	Partagez vos dessins</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
		<form class="navbar-form navbar-right inline-form">
			<div class="form-group">
				<a href="profil.php" class="btn btn-danger"><i class="fa fa-user"> <?php echo $_SESSION['pseudo']?></i></a>
			</div>
			<div class="form-group">
				<a href="upload_dessin.php" class="btn btn-danger"><i class="fa fa-upload"></i> Uploader un dessin</a>
			</div>
			<div class="form-group">
				<a href="deconnexion.php" class="btn btn-danger"><i class="fa fa-power-off"></i></a>
			</div>
		</form>
				
	</div>
	</div>
	</nav>