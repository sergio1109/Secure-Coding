<?php

namespace App\Services;

use App\Models\Hotel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
class HotelServices 
{
    public static function add($name)
    {
        Log::debug("Init add(". $name . ")");
    	$hotel= new Hotel;
    	$hotel->name= $name;
    	try{
            $hotel->save();
        }
        catch(QueryException $e){
            $hotel=null;
            Log::warning($e->getMessage());
        }
        finally{
            Log::debug("Return add".$hotel );
        }
        return $hotel;

    }
    public static function delete($id){

        Log::debug("Init delete(" . $id .")");
    	$hotel= Hotel::find($id);
    	try{
            $hotel->delete();
        }
        catch(QueryException $e){
            $hotel=null;
            Log::warning($e->getMessage());
        }
        finally{
            Log::debug("Return delete".$hotel );
        }
        return $hotel;

    }

    public static function update($id,$inname,$inactive){
        
        Log::debug("Init update(" . $id ."," . $inname ."," .$inactive .")");
    	$hotel= Hotel::find($id);
    	$hotel->name= $inname;
        if($active)
            $hotel->$active=$inactive;

    	try{
            $hotel->save();
        }
        catch(QueryException $e){
            $hotel=null;
            Log::warning($e->getMessage());
        }
        finally{
            Log::debug("Return update".$hotel );
        }
        return $hotel;
    }

    public static function listALL(){

        Log::debug("Init listALL()");
        
        try{
            $list =Hotel::orderBY('name','asc')->get(); #Si quiero obtener algun campo en especifico lo meto dentro del get como un arreglo= ejemplo:get(['id'] 
        }
        catch(Exception $e){
            $list=null;
            Log::warning($e->getMessage());
        }
        
        finally{
            Log::debug(" Return ListAll= ".$list );
        }
        
    	return $list;

    }

   /* public static function lista(){
    	 Log::debug("Init lista()");
         try{
            $list=Hotel::where('active','=','t');
            ->orderBy('name','asc')->get();
         }
         catch(Exception $e){
            $list=null;
            Log::waring($e->getMessage());

         }
         finally{
            Log::debug(" Return Lista ".$list );
         }
         return $list;

    }*/

    

 

    /*  Log::emergency($message);
       Log::alert($message);
        Log::critical($message);
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
*/
}



