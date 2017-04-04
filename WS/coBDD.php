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
}

?>