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
                echo  $news->getTitle()."|".$news->getText()."|".$news->getId();
            }
        }
        
        public function deleteAjax() {
            if (isset($_GET['id'])) {
                $mapper = new NewsMapper();
                $news = $mapper->delete($_GET['id']);
            }
        }
        
        
        public function saveAjax() {
            if($_POST) {   
                $mapper = new NewsMapper();
                $id = $mapper->save($_POST);
                echo $id;
            }
            
        }

}
