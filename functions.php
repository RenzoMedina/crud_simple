<?php


function view($path, $params=[]){
	 require "App/View/{$path}.view.php";
}


function dd($variable){

	return die(var_dump($variable));
}
