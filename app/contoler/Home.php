<?php 
    class Home extends Contoler{
        public function index(){
            $this->view("template/bagianatas");
            $this->view("home/index");
            $this->view("template/bagianbawah");
        }

        public function tambah(){
            if ( isset($_POST["submit"]) ){
                if($this->model("Home_model")->tambahDataUser($_POST) > 0){
                    Flashbeng::setFlash("Berhasil", "Registrasi", "success");
                    var_dump($_POST);
                    header("Location: " . BASEURL);
                    exit;
                } else {
                    Flashbeng::setFlash("Gagal", "Registrasi", "danger");
                    header("Location: " . BASEURL);
                    exit;
                }
            } else {
                header("Location: " . BASEURL);
                exit;
            }
        }
        
    }

    
?>