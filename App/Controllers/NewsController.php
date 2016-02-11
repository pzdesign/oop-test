<?php

namespace App\Controllers;

use App\Database\Database; 


class NewsController extends Controller {

	
	private $data = 'TEST';

	public function setData($data)
	{
		$this->data = $data;
	}

	public function getData()
	{

	}	

}