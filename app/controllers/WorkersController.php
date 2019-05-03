<?php

class WorkersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	public function storeWorker()
	{
		$data = new Worker;
		$data->ime = Input::get('ime');
		$data->prezime = Input::get('prezime');
		$data->grad = Input::get('grad');
		$data->ulica = Input::get('ulica');
		$data->broj = Input::get('broj');
		$data->jmbg = Input::get('jmbg');
		$data->brlk = Input::get('brlk');
		$data->pu = Input::get('pu');
		$data->nacin_zarade = Input::get('nacin_zarade');
		$data->status = Input::get('status');
		$data->rola = Input::get('rola');
		$data->save();


		Session::flash('success', AdminOptions::lang(88, Session::get("jezik.AdminOptions::server()"))); 
		return View::make("workers", array('pom'=>4));

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id){

		$data = Worker::find($id);
		if ($_POST['ime']) {
			$data->ime = $_POST['ime'];
		}
		if ($_POST['prezime']) {
			$data->prezime = $_POST['prezime'];
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
		if ($_POST['jmbg']) {
			$data->jmbg = $_POST['jmbg'];
		}		
		if ($_POST['brlk']) {
			$data->brlk = $_POST['brlk'];
		}		
		if ($_POST['pu']) {
			$data->pu = $_POST['pu'];
		}		
		if ($_POST['nacin_zarade']) {
			$data->nacin_zarade = $_POST['nacin_zarade'];
		}		
		if ($_POST['status']) {
			$data->status = $_POST['status'];
		}
		$data->update();
		Session::flash('success', AdminOptions::lang(89, Session::get("jezik.AdminOptions::server()")));
		return View::make('workers', array('pom' => 4));
	}

	public function finding($id){

		$data = Worker::find($id);		
		return View::make("workers", array('data'=> $data, 'pom' => 4));
	}


	public function destroy($id)
	{
		$worker = Worker::find($id)->delete();
		Session::flash('success', AdminOptions::lang(90, Session::get("jezik.AdminOptions::server()")));	
		return View::make('workers', array('pom' => 4));
	}

	public function workers()
	{
		return View::make('workers');
	}

	public function workers1()
	{
		return View::make('workers', array('pom' => 4));
	}

	public function workers2()
	{
		return View::make('workers', array('pom' => 3));
	}

	public function workers3()
	{
		return View::make('workers', array('pom' => 6));
	}

}
