<?php
//les traits  permettent deviter la duplicaion du code dune methode dans plusieurs classe

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667373-les-traits#/id/r-1670656

/*Enfin, sachez que l'on peut forcer la classe utilisant le trait à implémenter certaines méthodes au moyen de méthodes abstraites. Ainsi, ce code lèvera une erreur fatale :*/
trait A
{
    abstract public function traitA();
}

class MaClasse //on doit forcement implementer la methode traitA() dans cette classe
{
    use A;
}