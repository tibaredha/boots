<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		//echo Hash::create('sha256', 'jesse', HASH_PASSWORD_KEY);
		//echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);
		// $this->view->title = sujet;
		$this->view->render('index/index');
	}
	
	function details() {
		$this->view->render('index/index');
	}
	
}