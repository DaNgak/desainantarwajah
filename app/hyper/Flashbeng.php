<?php 

    class Flashbeng{
        public static function setFlash($pesan, $aksi, $tipe){
            $_SESSION["flash"]["pesan"] = $pesan;
            $_SESSION["flash"]["aksi"] = $aksi;
            $_SESSION["flash"]["tipe"] = $tipe;
        }

        public static function cetakFlash(){
            if ( isset($_SESSION["flash"]) ){
                $alert = '<div class="mb-5 alert alert-' . $_SESSION["flash"]["tipe"] .  ' alert-dismissible fade show" role="alert">
                    Proses ' . $_SESSION["flash"]["aksi"] .  ' <strong>' . $_SESSION["flash"]["pesan"]  .  '</strong> '  .  '.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                unset($_SESSION["flash"]);
                echo $alert;
                return true;
            }
        }

    }