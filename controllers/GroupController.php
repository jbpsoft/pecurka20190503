<?php

class GroupController extends \BaseController {

	public function index()
	{
		//
	}

	public function create()
	{
		//
	}

	public function saveGroup(){
		
		$data = new Grupa_proizvoda;
		$data->naziv_grupe = $_POST['NovaGrupa'];
		$data->save();
		$data->grupa_id = $data->id;
		$data->update();

		Session::flash('success', AdminOptions::lang(100, Session::get("jezik.AdminOptions::server()")));
	    return View::make('workers', array('pom' => 7));
	}

	public function findGroup($id){

		$data = Grupa_proizvoda::find($id);		
		return View::make("workers", array('data'=> $data, 'pom' => 7));
	}

	public function showGroup(){
		$data = DB::table('Grupa_proizvoda')->get();
		return View::make("workers", array('pom' => 7));
	}

	public function updateGroup($id){

		$data = Grupa_proizvoda::find($id);
		if ($_POST['naziv_grupe']) {
			$data->naziv_grupe = $_POST['naziv_grupe'];
			$data->update();

			Session::flash('success', AdminOptions::lang(102, Session::get("jezik.AdminOptions::server()")));
			return View::make("workers", array('pom' => 7));
		}
		else {
			return Redirect::back();
		}
	}

	public function deleteGroup($id){
		
		$data = Grupa_proizvoda::find($id)->delete();

		Session::flash('success', AdminOptions::lang(101, Session::get("jezik.AdminOptions::server()")));
		return View::make('workers', array('pom' => 7));
	}

}
