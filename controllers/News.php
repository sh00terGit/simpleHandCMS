<?php

/* 
*
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */
class News extends Controller {
    
    private $page;


    public function __construct() {
		parent::__construct();
                $this->getPage();
	}
	
	public function index() {
            
            $mapper = new NewsMapper();            
            $this->view->news = $mapper->fetchByPage($this->page);
            $this->view->render('news/index');
	}
        
        
        public function edit() {
            
        }
        
        public function add() {
            
        }
        
        public function View($id) {
             $mapper = new NewsMapper();
             $news = $mapper->fetchById($id);
             var_dump($news);
        }

        

        public function getPage() {
            $this->page = (empty($_GET['page']) ? 1 : intval($_GET['page']));
        }
        
	
}
