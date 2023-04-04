<?php

// TRAIT

class Persona
{

    use Fisiological, Abbigliamento;

    public $name; 
    public $surname; 
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

}

class Animal {

    use Fisiological, Abbigliamento;

    public $name;
    public $verso;

    public function __construct($_name, $_verso) 
    {
        $this->name = $_name;
        $this->verso = $_verso;
    }

    public function faiVerso() {
        echo "!!!!! ".$this->verso." !!!!";
    }

}

// vorrei delle funzioni in comune tra Animal e Person -> mangia(), dormi(), respira()

// quando  voglio dare delle funzionalità comuni a più classi posso usare il trait


trait Fisiological {

    public function eat(){
        echo "Mangio!";
    }

    public function sleep()
    {
        echo "Dormo!";
    }

    public function breathe()
    {
        echo "Respiro!";
    }


}

$persona2 = new Persona("Ugo", "Fantozzi", 60);

$persona2->eat();

$animal1 = new Animal("Bobbi", "BAuBau");

$animal1->eat();

trait Abbigliamento {

    public function vestiti($who){
        if($who == 'person') {
            echo "Mi vesto da solo";
        } else {
            echo "Mi veste il mio padrone";
        }
    }

}

$persona2->vestiti('person');

$animal1->vestiti('asdjkf');

?>