<?php

// TIPI DI DATO

// * è l'insieme dei valori che questo può avere e delle funzioni con cui posso
// * manipolare quei valori


// Interi
// [ - inf / + inf ] | + , -, *, /

// Array
// valori => [ elementi (omogenei) / (eterogenei) ]
// funzioni => push(), shift(), pop()


$persona1_ = [
    "nome" => "Mario",
    "cognome" => "Rossi",
    "eta" => 34,
];

$persona2_ = [
    "nome" => "Giulia",
    "cognome" => "Bianchi",
    "eta" => 28,
];

$persona3_ = [
    "nome" => "Anna",
    "cognome" => "Verdi",
    "eta" => 58,
];

function stampaPersona($persona) {
    echo "Ciao sono ". $persona["nome"]." ".$persona["cognome"]." ed ho ".$persona["eta"]." anni";
}

// stampaPersona($persona1);


// ! CLASSE -> un insieme di proprietà (di dati) e funzioni (metodi) che possiamo usare sulle proprietà stesse

class Person {

    //proprietà o attributi, variabili istanza
    public $name;
    public $surname;
    public $age;
    public static $counter = 0;

    // E' il metodo che ha il compito di GENERARE gli oggetti della classe
    // inizializzando le varibili istanza, cioè gli attributi
    public function __construct($_name, $_surname, $_age)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
        self::$counter++;
    }

    // metodi
    public function sayHello() {
        // ! codice per stampare una persona
        echo "Ciao sono ".$this->name." ".$this->surname." ed ho ".$this->age." anni \n";
    }

    public static function countPerson() {
        echo "Persone create fino a questo momento: ".self::$counter."\n";
    }

}

// come faccio a creare un oggetto -> un'istanza della classe -> rappresentazione con valori reali

$persona1 = new Person("Taylor", "Otwell", 48);

$persona2 = new Person("Tony", "Stark", 50);

$persona3 = new Person("Mario", "Rossi", 34);


$persona1->sayHello();

$persona2->sayHello();

$persona3->sayHello();

/*
class Animal {

    public $name;
    public $type;
    public $place;
    public $verso;

    public function __construct($_name, $_type, $_place, $_verso)
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->place = $_place;
        $this->verso = $_verso;
    }

    public function faiIlTuoVerso(){
        echo "!!! ".$this->verso." !!!!";
    }

}

$animal1 = new Animal("Tigre", "Felino", "Giungla", "ROOOAR");

$animal1->faiIlTuoVerso();
*/

// ATTRIBUTI e METODI STATICI

// per creare un attributo statico uso la parola chiave static

// ? public static $counter = 0;

// all'interno del costruttore opero su di esso richiamandolo con la parola chiave self

// ? self::$counter++;

// * Posso accedere all'attributo statico senza istanziare un oggetto ma utilizzando direttamente
// * la definizione di classe

// echo Person::$counter." \n"; // stampo counter

$persona4 = new Person("John", "Lennon", 40);  

$persona5 = new Person("Ringo", "Starr", 60);


// echo Person::$counter;

Person::countPerson();

?>