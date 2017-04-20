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

    /**
     * Render test task and discription of site
     * @return view
     */
    function index() {
        $this->view->render('index/index');
    }

}
