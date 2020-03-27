<?php
//les traits  permettent deviter la duplicaion du code dune methode dans plusieurs classe

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667373-les-traits#/id/r-1670627
/*
 *Si une classe déclare une méthode et qu'elle utilise un trait possédant cette même méthode, alors la méthode déclarée dans la classe l'emportera sur la méthode déclarée dans le trait. Exemple :
 * */
trait MonTrait
{
    public function sayHello()
    {
        echo 'Hello trait !';
    }
}

class MaClasse
{
    use MonTrait;
    public function sayHello()
    {
        echo  "Bonjours classe";
    }
}

$m= new MaClasse;
$m->sayHello();
