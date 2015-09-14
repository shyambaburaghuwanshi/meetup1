<?php
/*
* Interface nameInterface
* to get user name and to set user name
*/
interface nameInerface{
public function setName($name);

public function getName($name);

}

/*
* Interface emailInerface
* to get user email and to set user email
*/
interface emailInerface{
public function setEmail($email);

public function getEmail($email);

}
/*
* Interface passwordInerface
* to get user password and to set user password
*/
interface passwordInerface{
public function setpassword($pass);

public function getpassword($pass);

}

class user implements nameInerface,  emailInerface,  passwordInerface
{
    public function getName($name) {
          return $user->name;
    }
        
    public function setName($name) {
         $this->name = $name;
    }
    
    public function getEmail($email) {
          return $email->email;
    }
        
    public function setEmail($email) {
         $this->email = $email;
    }
    
     public function getpassword($pass) {
         return $pass->pass;
         } 
         public function setpassword($pass) {
              $this->pass = $pass;
         }
}
?>

