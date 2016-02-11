<?php

namespace App\Controllers;

class RenderApp {
	public $container;
	public function render()
	{
		$data = new NewsController();
		$container = $data->getData();
		return $container;
	}

}