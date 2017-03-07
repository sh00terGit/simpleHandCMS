<?php

/* 
*
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */

class Index extends Controller {
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->render('index/index');
	}
	
}