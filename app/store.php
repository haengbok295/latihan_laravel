<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
	//define the table
    protected $table = 'store';

    //primary key
    protected $primaryKey = 'store_id';

    //disable created_at and update_at
    public $timestamps = false;

    public function customer(){
    	return $this->hasMany(\App\SakilaModel::class,'store_id','store_id')
    }
}
