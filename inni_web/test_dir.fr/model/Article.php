<?php

// require_once("../app/Model.php");

class Article extends Model
{

    public function __construct()
    {
        $this->table = "posts";

        $this->getConnection();
    }
    public function findBySlug(string $slug)
    {

        $sql = "SELECT * FROM " . $this->table . " WHERE slug ='" . $slug . "'";

        $query = $this->_connexion->prepare($sql);

        $query->execute();


        return $query->fetch();
    }

    public function printAll()
    {
        echo "\n list printing\n\n";
        $this->query_data = $this->getAll();
        foreach ($this->query_data as $row) {
            echo ">>" . implode("--", array_unique($row)) . "\n";
        }
    }
}

/**
 * todo: test2 class Article with Model abtraction
 */
// $arti = new Article();
// $arti->__construct();
// $return  = $arti->getAll();
// // echo "\nALL ITEM IN TABLE\n";
// // foreach ($return as $row) {
// //     echo ">>" . implode("--", array_unique($row)) . "\n";
// // }
// echo "\nFIND ITEM WITH SLUG\n";
// $found_data = $arti->findBySlug("web");
// echo ">>" . implode("--", array_unique($found_data)) . "\n";

// echo "\nFIND ITEM WITH SLUG\n";
// $found_data = $arti->findBySlug("web");
// echo ">>" . implode("--", $found_data) . "\n";
