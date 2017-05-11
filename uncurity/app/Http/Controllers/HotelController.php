<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use\Illuminate\Support\Facades\Lang;
use App\Models\Hotel;
use Illuminate\Support\Facades\Route;
use App\Services\HotelServices;
class HotelController extends Controller
{

    public static function rules(){
        $rules=['name'=>'required|max:255'];
        return $rules;
    }
    public function add(Request $request)
    {
        $validator=Validator::make($request->all(),HotelController::rules());
        if($validator->fails()){
            return($validator->errors());
        }

        Log::debug("Init delete".implode($request->all()));
    	$name=$request->input('name');
        if( HotelServices::add($name))
            return Lang::get("app.save_ok");
        else
            return Lang::get("app.save_error");

    }
    public function delete(Request $request){



        Log::debug("Init delete".implode($request->all()));
    	$id=$request->input('id');
        HotelServices::delete($id);
        return HotelServices::listALL();

    }

    public function update(Request $request){

        $validator=Validator::make($request->all(),HotelController::rules());
       if($validator->fails()){
            return($validator->errors());
        }

        
        Log::debug("Init update(".implode($request->all()).")");
        $id=$request->input('id');
    	$name=$request->input('name');
        $active=$request->input('active');
        if(HotelServices::update($id,$name,$active))
            return Lang::get("app.save_ok");
        else
             return Lang::get("app.save_error");
    }

    public function listALL(Request $request){

        Log::debug("Init listALL".implode($request->all()));
        return HotelServices::listALL();

    }

    public function lista(Request $request){
    	Log::debug("Init lista".implode($request->all()));
        return HotelServices::lista();

    }

    public function save(Request $request){
        Log::debug("Init lista".implode($request->all()));
        if ($request->input('d')) {
            return $this->update($request);
        }
        else
            return $this->add($request);

    }

    public static function routes(){
        Route::get('/hotels/add', 'HotelController@add')->middleware('checkAuth');
        Route::post('/hotels/add', 'HotelController@add')->middleware('checkAuth');
        Route::get('/hotels/delete', 'HotelController@delete')->middleware('checkAuth');
        Route::post('/hotels/delete', 'HotelController@delete')->middleware('checkAuth');
        Route::get('/hotels/update', 'HotelController@update')->middleware('checkAuth');
        Route::post('/hotels/update', 'HotelController@update')->middleware('checkAuth');
        Route::get('/hotels/listALL', 'HotelController@listALL')->middleware('checkAuth');
        Route::post('/hotels/listALL', 'HotelController@listALL')->middleware('checkAuth');
        Route::get('/hotels/list', 'HotelController@lista')->middleware('checkAuth');
        Route::get('/hotels/getlist', 'HotelController@getlist');
        Route::post('/hotels/save', 'HotelController@add')->middleware('checkAuth');

    }

    public function getlist(){
        return view('hotel.list');
    }

    public function test(Request $request){
        Log::debug("Init teste(" . implode($request->all()).")");
        $name=$request->input('name');
        $hotel=HotelServices::add($name);
        $hotel->name="CHANGE";
        $hotel=HotelService::update($hotel->id,$hotel->name,false);
        $list=HotelServices::listALL();
        HotelServices::delete($hotel->id);
        return $list;
    }

 

    /*  Log::emergency($message);
       Log::alert($message);
        Log::critical($message);
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
*/
}



