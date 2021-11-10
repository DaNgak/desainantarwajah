<?php 
    class Contoler{
        private $destinasiTampil = "../app/mengtampil/";
        private $destinasiModel = "../app/mengmodel/";
        private $ekstensiPhp = ".php";
        public function view($dataView, $data = []){
            require_once $this->destinasiTampil . $dataView . $this->ekstensiPhp;
        }

        public function model($dataModel){
            require_once $this->destinasiModel . $dataModel . $this->ekstensiPhp;
            return new $dataModel;
        }
    }
?>