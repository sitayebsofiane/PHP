<?php

namespace namespace1;
use PDO;
class Connect{
    private $_bdd;
    public function __construct(){     
            try{
                $this->_bdd = new PDO("pgsql:host=localhost;dbname=php_test","postgres","as122014");
            }catch(PDOException $e){
                die('Erreur : ' . $e->getMessage());
            }
            }

            public function getBdd(){
                return $this->_bdd;
            }
    
}