<?php

class BuyersController extends \BaseController {

	public function index()
	{
		//
	}

	public function create()
	{
		//
	}

	public function newBuyer(){
		$data = new Buyers;
		$data->naziv = $_POST['NoviKupac'];
		$data->grad = $_POST['Grad'];
		$data->ulica = $_POST['Ulica'];
		$data->broj = $_POST['Broj'];
		$data->PIB = $_POST['Pib'];
		$data->racun = $_POST['Racun'];		
		$data->save();
		$data->kupac_id = $data->id;
		$data->update();
	      	
		Session::flash('success', AdminOptions::lang(93, Session::get("jezik.AdminOptions::server()")));
	    return View::make('workers', array('pom' => 6));
	}

	public function show($id=1){
		
		return View::make('listOfBuyers');
	}

	public function edit($id)
	{
		//
	}

	public function updateBuyer($id){
		
		$data = Buyers::find($id);
		if ($_POST['naziv']) {
			$data->naziv = $_POST['naziv'];
		}
		if ($_POST['grad']) {
			$data->grad = $_POST['grad'];
		}
		if ($_POST['ulica']) {
			$data->ulica = $_POST['ulica'];
		}
		if ($_POST['broj']) {
			$data->broj = $_POST['broj'];
		}
		if ($_POST['PIB']) {
			$data->PIB = $_POST['PIB'];
		}		
		if ($_POST['racun']) {
			$data->racun = $_POST['racun'];
		}		
		
		$data->update();
		Session::flash('success', AdminOptions::lang(92, Session::get("jezik.AdminOptions::server()")));
		return View::make('workers', array('pom' => 6));
	}

	public function findBuyer($id){

		$data = Buyers::find($id);		
		return View::make("workers", array('data'=> $data, 'pom' => 6));
	}

	public function deleteBuyer($id){
		
		$buyer = Buyers::find($id)->delete();
		Session::flash('success', AdminOptions::lang(91, Session::get("jezik.AdminOptions::server()")));
		return View::make('workers', array('pom' => 6));
	}


}
