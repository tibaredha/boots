<?php

class Dashboard extends Controller {
     
	public $controleur="dashboard";
	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: ../login');
			exit;
		}
		$this->view->js = array('dashboard/js/default.js');	
	}
	function index() 
	{
	    $this->view->title = 'dashboard';
		$this->view->render($this->controleur.'/index');
	}
	function logout()
	{
		Session::destroy();
		header('location: ' . URL .  'login');
		exit;
	}
	
	
	function xhrInsert()
	{
		$this->model->xhrInsert();
	}
	
	function xhrGetListings()
	{
		$this->model->xhrGetListings();
	}
	
	function xhrDeleteListing()
	{
		$this->model->xhrDeleteListing();
	}
	
}