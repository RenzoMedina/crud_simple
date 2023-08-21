<?php

namespace App\Controller;
use Core\Database\Connection;

class PostController{
	
	public function index(){

	return view("index");
	}

	public function store(){
	
		return view("post");
	}

	public function update($id){
	
	}

	public function delete($id){
	
	}
}

