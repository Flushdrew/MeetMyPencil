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
					<label for="email_membre">Adresse email : </label>
					<input id="email_membre" type="email" placeholder="votre adresse email" name="email_membre" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="confirmation_email_membre">Confirmer l'adresse email : </label>
					<input id="confirmation_email_membre" type="email" placeholder="veuillez confirmer votre adresse email" name="confirmation_email_membre" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="ville">Votre ville : </label>
					<input id="ville" type="text" placeholder="votre ville" name="ville" class="form-control">
				</div>
				
			<button class="pull-right btn btn-danger" id="bouton_inscription" name="bouton_inscription">Envoyer</button>
		</form>

		</div>
	</div>