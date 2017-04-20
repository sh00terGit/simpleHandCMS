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

    /**
     * index page render content
     * @return view 
     */
    public function index() {
        $mapper = new NewsMapper();
        $news = $mapper->fetchAll();
        $this->view->news = $news;
        $this->view->render('admin/index');
    }

    /**
     * Service method non view! Action use AJAX via XMLHttpRequest.
     * @param id news     
     * @return string news object
     */
    public function selectAjax() {
        if (isset($_GET['id'])) {
            $mapper = new NewsMapper();
            $news = $mapper->fetchById($_GET['id']);
            echo $news->getTitle() . "|" . $news->getText() . "|" . $news->getId();
        }
    }

    /**
     * Service method non view! Action use AJAX via XMLHttpRequest.
     * @param  id news
     * @return void
     */
        public function deleteAjax() {
        if (isset($_GET['id'])) {
            $mapper = new NewsMapper();
            $news = $mapper->delete($_GET['id']);
        }
    }

    /**
     *Service method non view! Action use AJAX via XMLHttpRequest.
     * @param $_POST array
     * @return id news
     */
        public function saveAjax() {
            $type = urldecode($_POST['type']);
            $text = urldecode($_POST['text']);
            $title = urldecode($_POST['title']);
            $id = urldecode($_POST['id']);
            $mapper = new NewsMapper();
            $id = $mapper->save($type,$text,$title,$id);
        
    }

}
