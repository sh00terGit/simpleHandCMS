<?php

/*
 *
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */

class Error extends Controller {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Render error page
     */
    public function index() {
        $this->view->msg = 'This page doesnt exist';
        $this->view->render('error/index');
    }

}
