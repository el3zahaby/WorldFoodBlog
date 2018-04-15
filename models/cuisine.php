<?php

class Cuisine {

    // we define 3 attributes
    public $id;
    public $name;


    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
       
    }
     public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM cuisine');
        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $post) {
            $list[] = new Cuisine($post['id'], $post['name']);
        }
        return $list;
    }

}