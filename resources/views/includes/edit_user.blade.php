<div class="w3-row">
	<div class=" w3-padding-16 w3-section w3-row">
		<!-- MODAL EDIT USER -->
		<button onclick="document.getElementById('editUser').style.display='block'" class="w3-col m2 l2 w3-button w3-black">Modifier</button>
		<form class="w3-col m1 w3-margin-left" action="" method="post">
			<input type="hidden" name="id" value="">
			<input type="submit" name="delete" value="Supprimer l'utilisateur" class="w3-button w3-red">
		</form>
	</div>

	<div id="editUser" class="w3-modal">
		<div class="w3-modal-content">
			<span onclick="document.getElementById('editUser').style.display='none'"
			class="w3-button w3-display-topright">&times;</span>
			<h3 class="w3-center">Modifier les informations</h3>
			<form class="w3-container w3-section" action="" method="post">
				<label for="last_name">Nom</label>
				<input id="last_name" class="w3-input w3-border w3-margin-bottom" type="text" name="last_name" value="" required>
				<label for="first_name">Prénom</label>
				<input id="first_name" class="w3-input w3-border w3-margin-bottom" type="text" name="first_name" value="" required>
				<input class="w3-input w3-margin-bottom w3-grey" type="submit" name="addUser" value="Enregistrer">
			</form>
		</div>
	</div>
</div>
