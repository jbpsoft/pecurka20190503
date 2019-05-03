<?php	
	class Proizvodi extends Eloquent {

    protected $guarded = [];
	
	protected $table = 'proizvodi';

    protected $primaryKey = 'id';
/*
    public function proizvodi(){

        return $this->hasMany('grupa_proizvoda', 'grupa_proizvoda_id');
    }*/
}