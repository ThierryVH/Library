<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataRepository;

class IndexController extends Controller
{

	private $repository;

	public function __construct(DataRepository $repository)
	{
			$this->repository = $repository;
	}

	public function index(DataRepository $repository)
	{
			//return View::make('career.index')->with('data', $this->repository->getData());
			//
			$data = $this->repository->getData();
			$dataBook = $data['books'];
			$dataUser = $data['users'];

			return view('/home')->with(['dataUser' => $dataUser]);
	}

}
