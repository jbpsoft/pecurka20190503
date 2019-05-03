<?php	
	class Radnici extends Eloquent {

    protected $guarded = [];
	
	protected $table = 'radnici';

    protected $primaryKey = 'id';

    public function radnici(){

        return $this->belongsTo('Ovlascenja');
    }

    public static function zaduzeniRadnik($radnik_id){

    	$data = DB::table('radnici')->where('radnici_id', $radnik_id)->first();
    	return $data;
    }

}