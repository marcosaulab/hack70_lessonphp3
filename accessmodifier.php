<?php

// ACCESS MODIFIER

// gli access modifier indicano la visibilità di un attributo o di un metodo


class Persona {

    private $name; // ! non verrà ereditato rimane all'interno della definizione di classe (non posso avere accesso in r/w all'esterno)
    protected $surname; // ! verra ereditato (non posso avere accesso in r/w all'esterno)
    public $age;

    public function __construct($_name, $_surname, $_age)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
    }

    public function sayHello()
    {
        echo "Ciao sono " . $this->name . " " . $this->surname . " ed ho " . $this->age . " anni \n";
    }

    public function getName(){
        return $this->name;
    }

}

$persona1 = new Persona("Leo", "Di Caprio", 48);

// echo $persona1->name."\n";

// $persona1->name = "Giovanni";

// echo $persona1->name."\n";

echo $persona1->getName();



class Student extends Persona {

    public $average;

    public function __construct($_name, $_surname, $_age, $_average)
    {
        parent::__construct($_name, $_surname, $_age);
        $this->average = $_average;
    }

    public function stampaCognome()
    {
        echo $this->surname;
    }

}

$studente = new Student("Mario", "Rossi", 34, 8);

$studente->stampaCognome();

var_dump($studente);

?>