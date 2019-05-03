<?php

class ProductController extends \BaseController {

	
	public function index()
	{
		//
	}


	public function create()
	{
		//
	}


	public function newProduct(){

		$data = new Proizvodi;
		$data->naziv_proizvoda = $_POST['naziv_proizvoda'];
		$data->grupa_proizvoda = $_POST['grupa_proizvoda'];
		$data->cena_proizvoda = $_POST['cena_proizvoda'];
		$data->save();
		$data->proizvodi_id = $data->id;
		$data->update();

		Session::flash('success', AdminOptions::lang(106, Session::get("jezik.AdminOptions::server()")));
	    return View::make('workers', array('pom' => 8));
	}

	public function listProduct(){

		$data = DB::table('proizvodi')->get();
		return View::make("workers", array('pom' => 8));
	}


	public function findProduct($id){

		$data = Proizvodi::find($id);		
		return View::make("workers", array('data'=> $data, 'pom' => 8));
	}


	public function updateProduct($id){
		
		$data = Proizvodi::find($id);
		if ($_POST['naziv_proizvoda']) {
			$data->naziv_proizvoda = $_POST['naziv_proizvoda'];
		}
		if ($_POST['grupa_proizvoda']) {
			$data->grupa_proizvoda = $_POST['grupa_proizvoda'];
		}
		if ($_POST['cena_proizvoda']) {
			$data->cena_proizvoda = $_POST['cena_proizvoda'];
		}

		$data->update();

			Session::flash('success', AdminOptions::lang(108, Session::get("jezik.AdminOptions::server()")));
			return View::make("workers", array('pom' => 8));
		}


	public function deleteProduct($id){
		
		$data = Proizvodi::find($id)->delete();

		Session::flash('success', AdminOptions::lang(107, Session::get("jezik.AdminOptions::server()")));
		return View::make('workers', array('pom' => 8));
	}


}
