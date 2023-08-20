<?php

namespace App\Controller;
use Core\Database\Connection;

class PostController{
	
	public function index(){

	return view("index");
	}

	public function store(){
		$conn = Connection::start();
		dd($conn);

	}

	public function update($id){
	
	}

	public function delete($id){
	
	}
}

