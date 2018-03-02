@extends('layouts.app')

@section('content')
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="img/user.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Ma Bibliothèque</b></h4>
  </div>
  <div class="w3-bar-block">
		<a href="{{ route('home') }}" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Livres</a>
		@include('includes.logout')
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

	<div id="books" class="w3-container" style="display: block">

  <!-- Header -->
  <div>
    <a href="#"><img src="img/user.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1 class="w3-center"><b>Ma Bibliothèque</b></h1>

		@include('includes.add_book')
    </div>

  </div>

	<div class="w3-container w3-row">
	  <h2>Détails du livre</h2>

		<a href="{{ route('home') }}" class="w3-button w3-black">Retour</a>

		<div class="w3-row w3-margin-top">
			<p>État: Disponible / Emprunté par Mr Blabla</p>
		</div>

		<div class="w3-row">
			<img src="img/mco-carton.png" alt="" class="w3-col m4">
			<p class="w3-col m8"><b>Titre :</b> <br>azertyuiopmlkjhgf</p>
			<p class="w3-col m8"><b>Auteur :</b> <br>Toto</p>
			<p class="w3-col m8"><b>Date de parution :</b> <br>15 janvier 1986</p>
			<p class="w3-col m8"><b>Genre :</b> <br>Fantastique</p>
			<p class="w3-col m8"><b>Résumé :</b> <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<div class="w3-row">
			<div class=" w3-padding-16 w3-section w3-row">
				<form class="w3-row w3-margin-bottom" action="index.html" method="post">
					<input type="hidden" name="id" value="">
					<input type="text" name="user_id" placeholder="identifiant de l'utilisateur" class="w3-input w3-col m3">
					<input type="submit" name="borrow" value="Emprunter le livre" class="w3-button w3-black w3-col m2">
				</form>
				<form class="w3-row" action="index.html" method="post">
					<input type="hidden" name="id" value="">
					<input type="submit" name="return" value="Restituer" class="w3-button w3-black w3-col m2">
				</form>
			</div>
			<div class=" w3-section w3-row">
				<!-- MODAL AJOUT BOOK -->
				<button onclick="document.getElementById('editBook').style.display='block'" class="w3-col m2 l2 w3-button w3-black">Modifier</button>
				<form action="" method="post">
					<input type="hidden" name="id" value="">
					<input type="submit" name="delete" value="Supprimer le livre" class="w3-button w3-red w3-col m2 w3-margin-left">
				</form>
			</div>

			@include('includes.edit_book')
		</div>

	</div>

		</div>


    </div>

@endsection
