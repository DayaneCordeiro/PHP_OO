<?php

class Login {
    private $email;
    private $password;

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

    public function log_into() {
        if ($this->email == "test@test.com" && $this->password == "123456"):
            echo "Logged in successfully.";
        else:
            echo "Invalid data";
        endif;
    }
}

$login1 = new Login();

$login1->setEmail("test@test.com");
$login1->setPassword("123456");
$login1->log_into();
echo "<br>";
echo $login1->getEmail();