<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Tipo;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
class TipoController extends Controller
{
  public function __construct(){


  }
  public function index(){

  	return view('uncurity.tipo.index');
	}
 
  
}
class RfiController extends Controller
{
  public function __construct(){


  }
  public function index(){

  	return view('uncurity.tipo.rfi.index');
	}
 
  
}
class XssController extends Controller
{
  public function __construct(){


  }
  public function index(){

  	return view('uncurity.tipo.xss.index');
	}
 
  
}