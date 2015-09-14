<?php

interface Login
{
	public function setId($id) ;
        
        public function getId(); 
        
        public function getName();

	public function setName($name);

	public function getEmail() ;

	public function setEmail($email) ;
   
    
}
class User implements Login
    

{
       
        protected $id;
	protected $name;

	protected $email;
    
      

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}public function setId($id){
}

    public function getId() {
        
    }

}
class User1 implements Login
    

{
         protected $id;

	protected $name;

	protected $email;
    
      
	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

    public function getId() {
        
    }

    public function setId($id) {
        
    }

}
$u1 =new User1();
$u =new User();
    

$u->setName("shyam");
$u1->setName("shyam");
echo $u->getName();
echo "\n";
  echo $u1->getName();     
?>