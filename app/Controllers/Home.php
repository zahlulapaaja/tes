<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function selamat_datang()
	{

		return view('selamat_datang');
	}


	//--------------------------------------------------------------------

}
