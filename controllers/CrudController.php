<?php

class CrudController extends \BaseController {

	public function index()
	{
		//
	}

	public function create()
	{
		//
	}

	public function store()
	{
		$data = new Ulazna_stavka;
		$data->ulazna_stavka = Input::get('NovaStavka');
		$data->ulazna_stavka_nabavna_cena = Input::get('NabavnaCena');
		$data->ulazna_stavka_porez = Input::get('Porez');
		$data->ulazna_stavka_zaracunata_marza = Input::get('Marza');
		$data->ulazna_stavka_dobavljac = Input::get('Dobavljac');
		$data->save();

		Session::flash('success', AdminOptions::lang(94, Session::get("jezik.AdminOptions::server()")));
		return View::make("workers", array('pom' => 3));

	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		
	}

	public function update($id)
	{
		$data = Ulazna_stavka::find($id);
		if ($_POST['stavka']) {
			$data->ulazna_stavka = $_POST['stavka'];
		}
		if ($_POST['nabavna_cena']) {
			$data->ulazna_stavka_nabavna_cena = $_POST['nabavna_cena'];
		}
		if ($_POST['porez']) {
			$data->ulazna_stavka_porez = $_POST['porez'];
		}
		if ($_POST['marza']) {
			$data->ulazna_stavka_zaracunata_marza = $_POST['marza'];
		}
		if ($_POST['dobavljac']) {
			$data->ulazna_stavka_dobavljac = $_POST['dobavljac'];
		}
		$data->update();

		Session::flash('success', AdminOptions::lang(95, Session::get("jezik.AdminOptions::server()")));
		return View::make("workers", array('pom' => 3));
	}

	public function destroy($id){	
		$item = DB::table('ulazna_stavka')->where('ulazna_stavka_id', $id)->delete();

		Session::flash('success', AdminOptions::lang(96, Session::get("jezik.AdminOptions::server()")));
		return View::make('workers', array('pom' => 3 ));
	}

	public function finding($id)
	{
		$data = Ulazna_stavka::find($id);		
		return View::make("workers", array('data'=> $data, 'pom' => 3));
	}

}
