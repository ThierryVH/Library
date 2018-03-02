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

		<div class="w3-container">
			<!-- Header -->
		  <div>
		    <a href="#"><img src="img/user.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
		    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
		    <div class="w3-container">
			    <h1 class="w3-center"><b>Les utilisateurs</b></h1>

					@include('includes.add_user')

					<div class="w3-container w3-row">
				 				<h2>Détails de l'utilisateur</h2>

								<a href="{{ route('home') }}" class="w3-button w3-black">Retour</a>

								<div class="w3-row">
									<p class="w3-col"><b>Nom :</b> <br>Dupont</p>
									<p class="w3-col"><b>Prénom :</b> <br>Toto</p>
									<p class="w3-col"><b>Identifiant :</b> <br>1234567890</p>
									<p class="w3-col"><b>Nombre d'emprunts :</b> <br>2</p>
									<p class="w3-col"><b>Livres empruntés :</b> <br>Barbie OUI-OUI Où est charlie</p>
								</div>
					</div>
				</div>

		  </div>


			@include('includes.edit_user')

		</div>


</div>
@endsection
