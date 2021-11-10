<?php 
    class Home_model{
        private $objdatabase;
        public function __construct()
        {
            $this->objdatabase = new Database();
        }

        public function tambahDataUser($data){
            $phonenumber = $data["phonenumber"];
            $firstname = $data["firstname"];
            $lastname = $data["lastname"];
            $email = $data["email"];
            $password = $data["password"];

            $query = "INSERT INTO user VALUES ( 
                :phonenumber, :firstname, :lastname, :email, :password
            )";

            $this->objdatabase->query($query);
            $this->objdatabase->bind(':phonenumber', $phonenumber);
            $this->objdatabase->bind(':firstname', $firstname);
            $this->objdatabase->bind(':lastname', $lastname);
            $this->objdatabase->bind(':email', $email);
            $this->objdatabase->bind(':password', $password);
            $this->objdatabase->execute();

            return $this->objdatabase->affectedRow();
        }
    }

?>