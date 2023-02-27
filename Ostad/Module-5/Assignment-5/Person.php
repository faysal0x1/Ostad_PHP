<?php 
 class Person
 {
    public $name;
    public $email;


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    // Showing The Data of a person
    public function DisplayPerson() {
        echo "Name of the Person is: {$this->name}\n";
        echo "{$this->name}`s Email is: {$this->email}\n";
        
    }
}

$person1 = new Person();


$person1->setName('Faysal');
$person1->setEmail('faysalk461@gmail.com');
$person1->DisplayPerson();
?>