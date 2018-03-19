<?php

class View {
    public $layout;
    public $page;
    
    public function render($page1, $page2, $data = NULL) {
        $title = "ATIS | ГЛАВНАЯ";
        if($page2 !== NULL) {
            $append = '/'.$page2;
        }
        else $append = '';
        if(file_exists('templates/layouts/'.$page1.$append.'.php')) {
            ob_start();
            require_once 'templates/layouts/'.$page1.$append.'.php';
            $main = ob_get_contents();
            ob_end_clean();
            require_once('templates/main.php');
        }
        else {
            $this->e404();
        }
    }
    public function news_view($data, $topic = NULL){
        if(!$topic) {
            $title = "ATIS | НОВОСТИ";
        }
        else $title = $topic['title'];
        ob_start();
        require_once('templates/layouts/news.php');
        $main = ob_get_contents();
        ob_end_clean();
        require_once('templates/main.php');
    }
    public function e404() {
        ob_start();
        require_once 'templates/layouts/page404.php';
        $main = ob_get_contents();
        ob_end_clean();
        require_once('templates/main.php');
    }
}