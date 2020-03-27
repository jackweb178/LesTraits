<?php
//les traits  permettent deviter la duplicaion du code dune methode dans plusieurs classe

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667373-les-traits#/id/r-1670651

trait A
{
    public function traitA()
    {
        echo 'je suis le trais A <br>';
    }
}

class MaClasse
{
    use A
    {
        traitA as protected traitB;//renommer trait A a trait B
    }
}

$m= new MaClasse();
$m->traitA();//affiche je suis le trait A
$m->traitB();//levera une erreur fatal car l'alias est une methode proteger
