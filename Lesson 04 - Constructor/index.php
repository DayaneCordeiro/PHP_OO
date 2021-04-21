<?php

class Login {
    private $email;
    private $password;
    private $name;

    public function __construct($email, $password, $name) {
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setName($name);
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $valid_email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $valid_email;
    }
    
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function log_into() {
        if ($this->email == "test@test.com" && $this->password == "123456"):
            echo "Logged in successfully.";
        else:
            echo "Invalid data";
        endif;
    }
}

$login1 = new Login("test@test.com", "123456", "Dayane Cordeiro");

$login1->log_into();
echo $logar->getName();