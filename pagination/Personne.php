<?php
    namespace namespace2;
    class Personne{

        public $nom;
        public $prenom;

        public function __construct($nom,$prenom){
            $this->nom=$nom;
            $this->prenom=$prenom;
        }
         
        public function affiche():void{

            print("nom: ".$this->nom." prenom: ".$this->prenom);
        }
    }