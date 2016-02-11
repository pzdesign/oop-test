<?php
namespace App;

use App\Controllers\RenderApp;
use App\Classes\ReadDB;
use App\Classes\Filter;
use App\Classes\View;
use App\Classes\User;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/App/Database/Connect.php';



$read = new ReadDB($pdo);
$news = $read->select()
        ->from('users')
        ->where('id > 0')
        ->order('id','ASC')

        ->result();


$user = new User($pdo);
$user->create('patrik2','emai@email.com','1');


/*
foreach ($news as $new) {

	$title = $new['title'];
	$view->title = $title;

	/*$filter = new Filter($title);
	echo $filter->slug()."<br>";

}
*/
 


?>
