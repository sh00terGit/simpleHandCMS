<?php

/* 
*
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */
class Admin extends Controller {
    public function __construct() {
		parent::__construct();
	}
	
	public function index() {
             $news = new NewsModel();
	}
	
}