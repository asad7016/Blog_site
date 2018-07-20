<?php

namespace asad\Http\Controllers;


class AdminController extends Controller
{

    public function dashboard()
    {
    	return view('welcome');
    }
    public function services()
    {
    	$data = array('title' =>'services' ,
    	'services'=>['web design','graphic design','SEO'] );
    	return view('services')->with($data);
    }
}
   ?>