<?php
    namespace namespace2;
    class Livre{

        public $titre;
        public $author;

        public function __construct($titre,$author){
            $this->titre=$titre;
            $this->author=$author;
        }
         
        public function affiche():void{

            print("titre: ".$this->titre.", author: ".$this->author);
        }
    }