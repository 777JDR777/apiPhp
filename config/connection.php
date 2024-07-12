<?php
    class Connect{
        protected $db;

        protected function connection(){
            try {
                $connect = $this->db = new PDO("mysql:local=localhost;dbname=apirest","root","");
                return $connect;
            } catch (Exception $e) {
                print "¡Error DB!: ".$e->getMessage()."<br/>";
                die();
            }
        }

        public function setNames(){
            return $this->db->query("SET NAMES 'utf8'");
        }

    }





?>