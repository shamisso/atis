<?php

require_once('core/db.php');

class NewsModel extends Model {
    
    public function get_all($limit = '200') {
        $query = "SELECT * FROM `news` ORDER BY `id` LIMIT {$limit};";
        $link = mysqli_connect('localhost', 'root', '', 'atis');
        $result = mysqli_query($link, $query);
        $data_all = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data_all[] = $row;
        }
        mysqli_close($link);
        for($i = 0; $i < count($data_all); $i++) {
            $data_all[$i]['href'] = $this->translit($data_all[$i]['title']);
        }
        return $data_all;

    }
    
    public function get_one($id) {
        $query = "SELECT * FROM `news` WHERE `id` = {$id} LIMIT 1;";
        $link = mysqli_connect('localhost', 'root', '', 'atis');
        $result = mysqli_query($link, $query);
        if(!$result) {
            return false;
        }
        $row = mysqli_fetch_assoc($result);
        mysqli_close($link);
        return $row;
    }
    public function translit($s) {
        $s = (string) $s;
        $s = strip_tags($s);
        $s = str_replace(array("\n", "\r"), " ", $s);
        $s = preg_replace("/\s+/", ' ', $s);
        $s = trim($s);
        $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s);
        $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
        $s = preg_replace("/[^0-9a-z-_ ]/i", "", $s);
        $s = str_replace(" ", "-", $s); 
        return $s; 
    }
}