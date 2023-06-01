<?php

class User
{
    public $name;
    public $email;
    public $password;

    public function __construct($constArgName, $constArgEmail, $constArgPass)
    {
        $this->name = $constArgName;
        $this->email = $constArgEmail;
        $this->password = $constArgPass;
    }

    public function setName($argName)
    {
        $this->name = $argName; // NOTE: that I am NOT using the $name in here, but just name
    }

    public function getName()
    {
        return $this->name;
    }
}

class User2 extends User
{
    public $title;

    public function __construct($constArgName, $constArgEmail, $constArgPass, $constArgTitle)
    {
        parent::__construct($constArgName, $constArgEmail, $constArgPass);
        $this->title = $constArgTitle;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

$user1 = new User('Dmitri', 'abc@mail.com', 12345);

$user2 = new User2('MahMan', 'his@email.com', 1111, 'Manager');

echo $user2->getTitle();
