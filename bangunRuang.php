<?php
    class Persegi{
        private $panjang, $lebar;

        public function setPanjang($panjang){
            $this->panjang = $panjang;
        }

        public function setLebar($lebar){
            $this->lebar = $lebar;
        }

        public function luas()
        {
            return $this->panjang*$this->lebar;
        }
    }
    
    class Balok extends Persegi{
        private $tinggi;

        public function setTinggi($tinggi)
        {
            $this->tinggi = $tinggi;
        }

        public function volume()
        {
            return $this->luas()*$this->tinggi;
        }
    }

    
?>