<div id="editBook" class="w3-modal">
	<div class="w3-modal-content">
		<span onclick="document.getElementById('editBook').style.display='none'"
		class="w3-button w3-display-topright">&times;</span>
		<h3 class="w3-center">Modifier les informations</h3>
		<form class="w3-container w3-section" action="" method="post">
			<label for="title">Titre du livre</label>
			<input id="title" class="w3-input w3-border w3-margin-bottom" type="text" name="title" value="" required>
			<label for="author">Auteur</label>
			<input id="author" class="w3-input w3-border w3-margin-bottom" type="text" name="author" value="" required>
			<label for="date">Date de parution</label>
			<input id="date" class="w3-input w3-border w3-margin-bottom" type="date" name="date" value="" required>
			<label for="resume">Résumé du livre</label>
			<textarea id="resume" class="w3-input w3-border w3-margin-bottom" type="text" name="resume" value="" required></textarea>
			<label for="image">Ajouter une image</label>
			<input id="image" class="w3-input w3-margin-bottom" type="file" name="file" value="Sélectionner une image">
			<input type="hidden" name="id" value="">
			<input class="w3-input w3-margin-bottom w3-grey" type="submit" name="addBook" value="Enregistrer">
		</form>
	</div>
</div>
