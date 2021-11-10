<?php 
    class App{
        protected $contoler = "home";
        protected $method = "index";
        protected $data = [];
        private $destinasiContoler = "../app/contoler/";
        private $ekstensiPhp = ".php";
        
        public function __construct(){
            $url = $this->clearURLdariheker();
            if ( isset($url[0]) ){
                if (file_exists($this->destinasiContoler($url[0]))) {
                    $this->contoler = $url[0];
                    unset($url[0]);
                }
            }

            require_once $this->destinasiContoler($this->contoler);
            $this->contoler = new $this->contoler();

            if ( isset($url[1]) ){
                if (method_exists($this->contoler, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }

            if (!empty($url)) {
                $this->param = array_values($url);
            }

            call_user_func_array([$this->contoler, $this->method], $this->data);
        }

        public function clearURLdariheker(){
            if ( isset($_GET["url"]) ){
                $url = rtrim($_GET["url"], "/");
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode("/", $url);
                return $url;
            }
        }

        private function destinasiContoler($destinasi){
            return $this->destinasiContoler . $destinasi . $this->ekstensiPhp;
        }
    }

?>