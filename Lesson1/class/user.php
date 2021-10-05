<?php
    class user{
        private $user_name;
        private $user_pass;
        private $user_login;
        private $user_bday;
        private $user_pay;
        private $user_maybeBan;
        private $user_statut;

        //Function to Consctruct
        public function __construct($n, $p, $l, $bd, $pay, $ban, $sta){
            $this -> user_name = $n;
            $this -> user_pass = $p;
            $this -> user_login = $l;
            $this -> user_bday = $bd;
            $this -> user_pay = $pay;
            $this -> user_maybeBan = $ban;
            $this -> user_statut = $sta;
        }

        //Function to read
        public function getNom(){
            return $this -> user_name;
        }

        public function getPass(){
            return $this -> user_pass;
        }

        public function getLogin(){
            return $this -> user_login;
        }

        public function getBday(){
            return $this -> user_bday;
        }

        public function getPay(){
            return $this -> user_bday;
        }

        public function getBan(){
            return $this -> user_maybeBan;
        }

        public function getStatut(){
            return $this -> user_statut;
        }

        //Function to Edit
        public function setNom($new_user_name){
            $this -> user_name = $new_user_name;
        }

        public function setPass($new_user_pass){
            $this -> user_pass = $new_user_pass;
        }

        public function setLogin($new_user_login){
            $this -> user_login = $new_user_login;
        }

        public function setBday($new_user_bday){
            $this -> user_bday = $new_user_bday;
        }
        
        public function setPay($new_user_pay){
            $this -> user_pay = $new_user_pay;
        }

        public function setBan($new_user_ban){
            $this -> user_maybeBan = $new_user_ban;
        }

        public function setStatut($new_user_Statut){
            $this -> user_statut = $new_user_Statut;
        }
    }
?>