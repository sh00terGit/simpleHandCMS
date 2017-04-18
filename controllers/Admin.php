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
            $mapper = new NewsMapper();
            $news = $mapper->fetchAll();
            $this->view->news = $news;
             $this->view->render('admin/index');
            
	}
        
        public function selectAjax() {
            if (isset($_GET['id'])) {
                $mapper = new NewsMapper();
                $news = $mapper->fetchById($_GET['id']);
                echo  $news->getTitle()."|".$news->getText();
            }
        }

}
