<?php


// * EREDITARIETA' - (Inheritance)


// SCUOLA
// ? -> Docenti
// ? -> Studenti


abstract class Person {

    public $name;
    public $surname;
    public $age; 

    public function __construct($_name, $_surname, $_age)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
    }

    abstract public function sayHello();
    abstract public function doRiunioni();

}

// Docente ha uno stipendio
// Studente ha una media voti

// Scriviamo la classe che eredita attributi e metodi dalla classe Person per creare una nuova classe
// con i propri attributi e metodi

/*
? class Student_ extends Person { // keyword extends
?                               // Student è figlia della classe Person ed eredita tutti i suoi attributi
?                               // e tutti i suoi metodi
?     public $average;
? }
*/

abstract class Teacher extends Person {
    
    public $salary;

    public function __construct($_name, $_surname, $_age, $_salary)
    {
        $this->salary = $_salary;
        parent::__construct($_name, $_surname, $_age);
    }

    abstract public function sayHello();

    abstract public function doRiunioni();

}

// $teacher1 = new Teacher("Prof Giulio", "Bianchi", 48, 100);

/*
class Student extends Person
{

    public $average;

    public function __construct($_name, $_surname, $_age, $_average)
    {
        $this->average = $_average;
        parent::__construct($_name, $_surname, $_age);
    }

    public function sayHello()
    {
        echo "Ciao sono lo studente: " . $this->name . " " . $this->surname . " ed ho " . $this->age . " anni, la mia è di " . $this->average . " \n";
    }

    public function doRiunioni()
    {
        echo "Faccio le riunioni in sala studenti";
    }
}

$student1 = new Student("Andrea", "Neri", 23, 8);
*/

// echo $student1->name;

// $student1->sayHello();

// $teacher1->sayHello();

// $person1 = new Person("Andrea", "Rossi", 23);

// Docente di ruolo

// Docente supplente


class DocenteDiRuolo extends Teacher {

    public $subjects;

    public function __construct($_name, $_surname, $_age, $_salary, $_subjects)
    {
        $this->subjects =  $_subjects;
        parent::__construct($_name, $_surname, $_age, $_salary);
    }

    public function sayHello() {
        echo "Ciao sono un Prof di Ruolo: " . $this->name . " " . $this->surname . " ed ho " . $this->age . " anni, il mio slario è di " . $this->salary . " e insegno ".$this->subjects."  \n";
    }

    public function doRiunioni() {
        echo "Faccio le riunioni tra i docenti di ruolo \n";
    }
}

class DocenteSupplente extends Teacher {
   
    public $days;

    public function __construct($_name, $_surname, $_age, $_salary, $_days)
    {
        $this->days =  $_days;
        parent::__construct($_name, $_surname, $_age, $_salary);
    }

    public function sayHello() {
        echo "Ciao sono un Prof Supplente: " . $this->name . " " . $this->surname . " ed ho " . $this->age . " anni, il mio slario è di " . $this->salary . " e i giorni di insegnamento sono " . $this->days . "  \n";
    }

    public function doRiunioni() {
        echo "Faccio le riunioni solo nei giorni: ".$this->days;
    }

}


$docenteDiRuolo1 = new DocenteDiRuolo("Mario", "Rossi", 45, 150, "Italiano, Matematica");

$docenteDiRuolo1->sayHello();

$docenteDiRuolo1->doRiunioni();

$docenteSupplente1 = new DocenteSupplente("Anna", "Verdi", 44, 180, "Lunedì, Giovedì");

$docenteSupplente1->sayHello();

$docenteSupplente1->doRiunioni();




abstract class Student extends Person {

    public $average;

    public function __construct($_name, $_surname, $_age, $_average)
    {
        $this->average = $_average;
        parent::__construct($_name, $_surname, $_age);
    }

    abstract public function sayHello();

    abstract public function doRiunioni();
}

// Studente -> matricola
// Studente -> ultimoAnno

class Matricola extends Student{

    public $serial;

    public function __construct($_name, $_surname, $_age, $_average, $_serial){

        parent::__construct($_name, $_surname, $_age, $_average);

        $this->serial = $_serial;

    }

    public function sayHello()
    {
        echo "Ciao sono lo studente: " . $this->name . " " . $this->surname . " ed ho " . $this->age . " anni, la mia è di " . $this->average . " e la mia matricola è ".$this->serial." \n";
    }

    public function doRiunioni()
    {
        echo "Faccio le riunioni con le altre matricole";
    }

    
}


$matricola1 = new Matricola("Ugo", "Fantozzi", 60, 5, "123123");

$matricola1->sayHello();


class StudenteUltimoAnno extends Student
{

    public $examinationDay;

    public function __construct($_name, $_surname, $_age, $_average, $_examinationDay)
    {

        parent::__construct($_name, $_surname, $_age, $_average);

        $this->examinationDay = $_examinationDay;
    }

    public function sayHello()
    {
        echo "Ciao sono lo studente: " . $this->name . " " . $this->surname . " ed ho " . $this->age . " anni, la mia è di " . $this->average . " e farò l'esame il " . $this->examinationDay . " \n";
    }

    public function doRiunioni()
    {
        echo "Faccio le riunioni con le altre matricole";
    }
}

$studenteUltimoAnno = new StudenteUltimoAnno("Ugo", "Fantozzi", 60, 5, "12 Luglio");

$studenteUltimoAnno->sayHello();



?>