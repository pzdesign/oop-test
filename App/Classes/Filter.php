<?php
namespace App\Classes;

use App\Classes\Helpers;


class Filter
{
private $text;
    function __construct($string)
    {
        $this->string = $string;
    }

	public function lower()
	{
		return strtolower($this->string);
	}

	public function upper()
	{
		return strtoupper($this->string);
	}

	public function slug()
	{
		return Helpers::slugify($this->string);
	}

}