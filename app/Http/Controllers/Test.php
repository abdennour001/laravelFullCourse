<?php


Class Person {

    private $firstName;
    private $lastName;
    private $age;

    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
        echo 'Value of ' . $name . ' has been set to ' . $value . '.' . "\n";
    }

    public function __get($name)
    {
        echo 'Value of ' . $name . ' has been returned.' . "\n";
        return $this->$name;
    }

    public function displayPerson() {
        return "This is : " . $this->firstName . " " . $this->lastName . ", " . $this->age . " years old."
            . "\n";
    }

    public static function whoami() {
        return "I am a person";
    }

}


$abdou = new Person("Abdennour", "Amokrane", 21);
$a = array(1 => 'a', 2 => 'b', 3 => 'c');

$abdou->displayPerson();