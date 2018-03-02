@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<a href="{{ route('index') }}">Index</a> -->

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="img/user.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Bonjour {{ Auth::user()->name }}</b></h4>
  </div>
  <div class="w3-bar-block">
		<button onclick="accordion('books','users')" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Livres</button>
		<button onclick="accordion('users','books')" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Utilisateurs</button>
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
		<a href="{{ route('index') }}">index</a>

		@include('includes.add_book')
    </div>

  </div>

	<div class="w3-container w3-row">
	  <h2>Liste des livres</h2>

		<div class="w3-section w3-padding-16 w3-hide-small">
			<span class="w3-margin-right">Filtre:</span>
			<form class="" action="" method="post">
				<input class="w3-button w3-black" type="submit" name="filter" value="Toutes catégories">
				<input class="w3-button w3-white" type="submit" name="filter" value="Thriller">
				<input class="w3-button w3-white" type="submit" name="filter" value="Science fiction">
				<input class="w3-button w3-white" type="submit" name="filter" value="Aventures">
				<input class="w3-button w3-white" type="submit" name="filter" value="Amour">
			</form>
		</div>

		<div class="w3-section w3-padding-16 w3-hide-medium w3-hide-large">
			<span class="w3-margin-right">Filtre:</span>
			<form class="w3-row" action="" method="post">
				<select class="w3-button w3-border w3-white w3-col s12 w3-margin-bottom" name="filter">
					<option value="Toutes catégories">Toutes catégories</option>
					<option value="Thriller">Thriller</option>
					<option value="Science fiction">Science fiction</option>
					<option value="Aventures">Aventures</option>
					<option value="Amour">Amour</option>
				</select>
				<input class="w3-button w3-black w3-col s12" type="submit" name="" value="Rechercher">
			</form>
		</div>

	  <div class="w3-col s12 m4 l3 w3-padding">
			<a href="{{ route('books.show', ['id' => 1])}}">
				<div class="w3-card-4">
					<img src="img/mco-carton.png" alt="Norway" style="width:100%">
					<div class="w3-container w3-center">
						<p>Titre du livre</p>
					</div>
				</div>
			</a>
	  </div>





	</div>





		</div>

		<div id="users" class="w3-container" style="display: none;">
			<!-- Header -->
		  <div>
		    <a href="#"><img src="img/user.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
		    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
		    <div class="w3-container">
		    <h1 class="w3-center"><b>Les utilisateurs</b></h1>

				@include('includes.add_user')

	<div class="w3-container w3-row">
 				<h2>Liste des utilisateurs</h2>

				<div class="w3-margin-bottom">

					<button onclick="accordionSearch('search')" class="w3-button w3-padding w3-black">Rechercher</button>

					<div id="search" class="w3-section w3-padding-16" style="display: none;">
						<span class="w3-margin-right">Recherche:</span>
						<form class="w3-row" action="" method="post">
							<input type="text" name="name" value="" class="w3-input w3-margin-bottom w3-col s12 m6" placeholder="Entrez un nom ou un identifiant" required>
							<input type="submit" name="search_by_name" class="w3-button w3-grey w3-margin-left w3-col m2 w3-hide-small" value="Par nom">
							<input type="submit" name="search_by_id" class="w3-button w3-grey w3-margin-left w3-col m2 w3-hide-small" value="Par identifiant">
							<input type="submit" name="search_by_name" class="w3-button w3-grey w3-margin-bottom w3-col w3-hide-medium w3-hide-large" value="Par nom">
							<input type="submit" name="search_by_id" class="w3-button w3-grey w3-margin-bottom w3-col w3-hide-medium w3-hide-large" value="Par identifiant">
						</form>
						<form class="w3-row" action="index.html" method="post">
								<input type="submit" name="all" class="w3-button w3-black w3-col s12 m6" value="Tous les utilisateurs">
						</form>
					</div>

				</div>

				<table class="w3-table-all w3-hoverable w3-card-4">
					<tr>
					      <th>Nom</th>
					      <th>Prénom</th>
								<th>N° Identifiant</th>
								<th>Livres empruntés</th>
								<th></th>
					    </tr>
@if(isset($dataUser))
@foreach($dataUser as $data)
					    <tr>
					      <td>{{ $data->first_name}}</td>
					      <td>{{ $data->last_name}}</td>
								<td>{{ $data->identifiant}}</td>
								<td>{{ $data->nb_book}}</td>
					      <td><a href="{{ route('users.show',['id' => $data->id]) }}">détails</a></td>
					    </tr>
@endforeach
@endif

				</table>



		    </div>
			</div>

		  </div>
		</div>


    </div>
@endsection
