<form class="w3-margin-top" action="{{ route('logout') }}" method="post">
	@csrf
	<input class="w3-bar-item w3-button w3-padding" type="submit" name="logout" value="Me déconnecter">
</form>
