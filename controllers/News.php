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

    /**
     * Action render 5 news per page
     * @return view
     */
    public function index() {
        $mapper = new NewsMapper();
        $news = $mapper->fetchByPage($this->page);
        $this->view->news = $news;
        $this->view->countPages = floor((($mapper->getCountNews() - 1) / LIMIT_VALUE)) + 1;
        $this->view->page = $this->page;
        $this->view->render('news/index');
    }

    /**
     * Action render content by news and list of comments related to this news.
     */
    public function view($id) {
        $newsMapper = new NewsMapper();
        $this->view->news = $newsMapper->fetchById($id);
        $commentMapper = new CommentsMapper();
        $this->view->comments = $commentMapper->fetchByNewsId($id);
        $this->view->render('news/view');
    }

    /**
     * Service function for adding comments (addition AJAX via XMLHttpRequest)
     */
    public function commentAjax() {
        if ($_POST) {
            $commentMapper = new CommentsMapper();
            $commentMapper->insert($_POST['newsId'], $_POST['text']);
        }
    }

    /**
     * Service method getting page number by GET-string
     * @param $_GET['page']
     */
    public function getPage() {
        $this->page = (empty($_GET['page']) ? 1 : intval($_GET['page']));
    }

}
