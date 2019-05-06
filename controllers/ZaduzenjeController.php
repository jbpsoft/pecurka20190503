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
	}

	public function privremena_tabela2(){
		$data = new Privremena_tabela();
			$data->kolicina = $_POST['kolicina'];
			$data->cena = $_POST['Id'];
			$data->zarRad = $_POST['zarRad'];
			$data->proizvod_id = $_POST['Product'];
			$data->save();

			$data1 = DB::table('proizvodi')->where('id', $_POST['Product'])->first();
			$data2 = DB::table('privremena_tabela')->where('radnik', '<>', 0)->first();
			$data3 = DB::table('radnici')->where('radnici_id', $data2->radnik)->first();
			$data4 = DB::table('privremena_tabela')->where('kupac', '<>', 0)->first();
			$data5 = DB::table('kupci')->where('id', $data4->kupac)->first();
			
			return View::make('pages.zaduzenjeRadnika', 
								array('data'=> $data, 'data1'=> $data1, 'data3'=>$data3, 
										'data5'=>$data5));
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
