<?php
require_once "lingkaran.php";
    class Tabung extends Lingkaran{
        private $tinggi;

        public function set_tinggi($tinggi){
            $this->tinggi = $tinggi;
        }

        public function volume(){
            return $this->phi*$this->jari*$this->jari*$this->tinggi;
        }
    }
?>