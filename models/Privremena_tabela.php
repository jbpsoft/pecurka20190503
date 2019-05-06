<?php	
	class Privremena_tabela extends Eloquent {

    protected $guarded = [];
	
	protected $table = 'privremena_tabela';

    protected $primaryKey = 'id';

    public static function citac_privremene_tabele($id){

    	DB::table('privremena_tabela')->where('proizvod_id', $id)->first();
    	
    }

}