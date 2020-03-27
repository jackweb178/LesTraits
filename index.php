<?php
//les traits  permettent deviter la duplicaion du code dune methode dans plusieurs classe

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667373-les-traits#/id/r-1670651

trait A
{
    public function traitA()
    {
        echo 'je suis le trais A';
    }
}

class MaClasse
{
    use A
    {
        traitA as protected;
    }
}

$m= new MaClasse();
$m->traitA();//levera une erreur car on tente d'acceder a une mehode proteger
