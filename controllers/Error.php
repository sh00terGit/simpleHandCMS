<?php

/* 
*
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */
class Error extends Controller {
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->msg = 'This page doesnt exist';
		$this->view->render('error/index');
	}
}

