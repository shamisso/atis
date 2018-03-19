<?php
class NewsController extends Controller {
    public $id;
    public $publish_date;
    public $title;
    public $subtitle;
    public $content;
    public $img;
    public $topic;
    
    function __construct($url) {
        $this->url = $url;
    }
    
    function result() {
        $topic_content = NULL;
        if($this->url[2] === 'news' && isset($this->url[3]) && $this->url[3] !== '') {
            $topic = new NewsModel;
            $topic_content = $topic->get_one($this->url[3]);
            if(!$topic_content) {
                $this->e404();
                exit();
            }
        }
        $data = $this->display_all();
        $view = new View;
        $view->news_view($data, $topic_content);
    }
    
    
    public function create() {
        requre_once('templates/index.php');
    }
    public function display_one() {
    }
    
    public function display_all() {
         $var = new NewsModel;
         return $var->get_all();
    }
    public function edit() {}
    public function delete() {}
    
}