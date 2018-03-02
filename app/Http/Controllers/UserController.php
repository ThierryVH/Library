<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$last_name = $request->get('last_name');
			$first_name = $request->get('first_name');
			// Valider les infos du formulaire
			$data = [
				'last_name' => $last_name,
				'first_name' => $first_name,
			];

			// Liste des validations : Available Validation Rules.
			$rules = [
				'last_name' => 'required | alpha_dash',
				'first_name' => 'required | alpha_dash',
			];

			// On utilise la façade Validator, disponible à la racine, dans le namespace global
			$validation = Validator::make($data, $rules);
			// LA méthode validate() nous renvoie à la page précédente si la validation ne passe pas.
			$validation->validate();


			// Vérifier si l'utilisateur existe déjà
			$user = User::where('last_name', $last_name)->first();

			if($user && $user->first_name == $first_name){
				// Si l'utilisateur existe déjà, on renvoie la page avec un message d'erreur
			}


			// Créer un nouvel Utilisateur
			$newUser = User::create([
				'last_name' => $last_name,
				'first_name' => $first_name,
				'identifiant' => User::getUniqueIdentifiant(),
				'nb_book' => 0
			]);

			if($newUser){
				//return view('home')->withUser($newUser);
			}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user');
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
