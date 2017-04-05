<?php

class singleton {

    private $PDOinstance = null;

    private static $instance = null;

    private function __construct(){
        $this->PDOinstance = new PDO('mysql:host=localhost;dbname=ecommerce', "dev", "dev");
    }

    /*	-------------------------- *\
            return PDOinstance
    \* --------------------------- */

    public static function getInstance(){
        if (is_null(self::$instance)){
            self::$instance = new singleton();
        }

        return self::$instance;
    }

    public function query ($query){
        return $this->PDOinstance->query($query);
    }

    public function addArticle ($cat, $name, $price){

        $sql = "INSERT INTO produit (categorieId    , nom   , prix)
                            VALUES  (:categorie     , :name , :prix);";

        $req = $this->PDOinstance->prepare($sql);

        $req->execute(array(
            "categorie"     => $cat,
            "name"          => $name,
            "prix"          => $price
        ));
    }

    public function delArticle ($id){
        $sql = "DELETE FROM produit
                WHERE id = ". $id .";";

        $this->PDOinstance->exec($sql);
    }

    public function uptdArticle ($cat, $name, $price, $id){
        $sql = "UPDATE produit
                SET categorieId = ". $cat .",
                    nom         = '". $name ."',
                    prix        = ". $price ."
                WHERE id = ". $id .";";

        echo $sql;

        $this->PDOinstance->exec($sql);
    }
}

?>