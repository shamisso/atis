<?php

class Controller {    
    function __construct($url = NULL) {
            if($url[2] == '' && !isset($url[3])) {
                $this->page1 = 'index';
                $this->page2 = NULL;
            }
            else {
                $this->page1 = $url[2];
                $this->page2 = (isset($url[3])) ? $url[3] : NULL;
            }
    }
    function result() {
        $page1 = $this->page1;
        $page2 = $this->page2;
        if($page1 == 'index') {
            $news = new NewsModel;
            $news_data = $news->get_all('6');
            $result = new View;
            return $result->render($page1, $page2, $news_data);
        }
        else {
            $result = new View;
            return $result->render($page1, $page2);
        }
    }
    
    public function e404()
    {
            $result = new View;
            return $result->e404();
    }

    public function __call($method, $data)
    {
        $this->e404($method);
    }
}