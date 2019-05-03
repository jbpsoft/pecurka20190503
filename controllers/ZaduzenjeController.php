<?php

class ZaduzenjeController extends \BaseController {

	public function zaduzenje_radnika(){
		$data = DB::table('proizvodi')->get();
		$grupe = DB::table('Grupa_proizvoda')->get();
		return View::make('pages.zaduzenjeRadnika', array('articles' => $data, 'grupe' => $grupe));
	}

	public function privremena_tabela(){
		$data = new Privremena_tabela();
			$data->radnik = $_POST['radnik'];
			$data->kupac = $_POST['kupac'];
			$data->save();
		
		//$data->proizvod_id = $_POST['proizvod_id'];
		

		//$data1 = Radnici::zaduzeniRadnik($_POST['radnik']);
		//$data2 = Buyers::zaduzeniKupac($_POST['kupac']);
		Session::flash('success', 'success');
		
		//return View::make('pages.zaduzenjeRadnika', array('data1' => $data1, 'data2' => $data2));

	}

	public function privremena_tabela2(){
			/*$data->kolicina = $_POST['Kolicina'];
			$data->marza = $_POST['Cena'];
			$data->zarRad = $_POST['zarRad'];
			$data->update();*/
			Session::flash('success', 'success');
	}
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
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
