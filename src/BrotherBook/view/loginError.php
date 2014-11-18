<div id="block_identifiant">
	<div>
		<?php if(isset($_SESSION['identifiant'])) {
			echo $_SESSION['identifiant'];
		} else {
			echo "<div id=\"connection\">Se Connecter</div>";
		} ?>		
	</div>
	<div id="form_identification">
		<form method="POST">
			<div id="error_message">
				<?php 
				echo $context->error;
				?>
			</div>
			<div class="field" id="id">
				<label for="idUser">Identifiant </label><input type="text" name="idUser" />
			</div>
			<div class="field" id="pass">
				<label for="passUser">Mot de passe</label><input type="password" name="passUser" />
			</div>
			<input type="submit" value="Login"/>
		</form>
	</div>
</div>