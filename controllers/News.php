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
            $news = $mapper->fetchByPage($this->page);
            $this->view->news =$news;
            $this->view->countPages = floor( (($mapper->getCountNews()-1) / LIMIT_VALUE) ) + 1; 
            $this->view->page = $this->page;
            $this->view->render('news/index');
	}
        
        public function view($id) {
             $newsMapper = new NewsMapper();
             $this->view->news= $newsMapper->fetchById($id);
             $commentMapper = new CommentsMapper();
             $this->view->comments = $commentMapper->fetchByNewsId($id);
             $this->view->render('news/view');             
             
        }
        public function commentAjax() {
            if($_POST) {
                $commentMapper = new CommentsMapper();
                $commentMapper->insert($_POST['newsId'], $_POST['text']);
            }
        }

        

        public function getPage() {
            $this->page = (empty($_GET['page']) ? 1 : intval($_GET['page']));
        }
        

        
	
}
