<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FileController extends Controller {

	 public function __construct()
    {
        $this->middleware('auth');
    }

	public function getReport($filename)
    {
        return response()->download(storage_path().'/reports/'.$filename, null, [], null);
    }

}
