<?php
    class Lingkaran{
        protected $phi=3.14;
        protected $jari;

        public function set_jari($jari){
            $this->jari = $jari;
        }
        public function luas(){
            return $this->phi*$this->jari*$this->jari;
        }

    }
    
?>