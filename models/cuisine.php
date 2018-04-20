<?php

require_once ('models/post.php');

class Cuisine {

    // we define 3 attributes
    public $id;
    public $name;
    public $image;

//    public $title;

    public function __construct($id, $name, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM cuisine');
        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $cuisine) {
            $list[] = new Cuisine($cuisine['id'], $cuisine['name'], $cuisine['image']);
        }
        return $list;
    }

   public static function find($id) {
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('select * from cuisine where id = :id; ');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $result = $req->fetch();
        if ($result) {
            return new Cuisine($result['id'], $result['name'], $result['image']);
        } else {
            //replace with a more meaningful exception
            //post with that id not found
            throw new Exception('A real exception should go here');
        }
    }
   
}
