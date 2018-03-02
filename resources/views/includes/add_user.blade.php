<div class="w3-bottombar w3-padding-16 w3-section">
	<!-- MODAL AJOUT BOOK -->
	<button onclick="document.getElementById('addUser').style.display='block'" class="w3-button w3-black">Ajouter un utilisateur</button>
</div>

<div id="addUser" class="w3-modal">
<div class="w3-modal-content">
	<span onclick="document.getElementById('addUser').style.display='none'"
	class="w3-button w3-display-topright">&times;</span>
	<h3 class="w3-center">Ajouter un utilisateur</h3>
	<form class="w3-container w3-section" action="{{ route('users.store') }}" method="post">
		@csrf
		<div>
			<label for="last_name">Nom</label>
			<input id="last_name" class="w3-input w3-border w3-margin-bottom" type="text" name="last_name" value="{{ old('last_name') }}" required>
			@if ($errors->has('last_name'))
					<span class="invalid-feedback">
							<strong>{{ $errors->first('last_name') }}</strong>
					</span>
			@endif
		</div>
		<div>
			<label for="first_name">Prénom</label>
			<input id="first_name" class="w3-input w3-border w3-margin-bottom" type="text" name="first_name" value="{{ old('first_name') }}" required>
			@if ($errors->has('first_name'))
					<span class="invalid-feedback">
							<strong>{{ $errors->first('first_name') }}</strong>
					</span>
			@endif
		</div>
		<input class="w3-input w3-margin-bottom w3-grey" type="submit" name="addUser" value="Ajouter l'utilisateur">
	</form>
</div>
</div>
