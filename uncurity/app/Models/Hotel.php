<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function getNameAttribute($value){
    	try
    	{
    		return decrypt($value);
    	}
    	catch(DecrypException $e)
    	{
    		return $value;
    	}

    }
    public function setNameAttribute($value){
    	$this->attributes['name']= encrypt($value);
    }
}
