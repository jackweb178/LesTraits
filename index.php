<?php
//les traits  permettent deviter la duplicaion du code dune methode dans plusieurs classe

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667373-les-traits#/id/r-1670645
/*
 *
Au même titre que les classes, les traits peuvent eux aussi utiliser des traits. La façon de procéder est la même qu'avec les classes, tout comme la gestion des conflits entre méthodes. Voici un exemple :
 * */
trait A
{
    public function traitA()
    {
        echo 'je suis le trais A';
    }
}

trait B
{
    use A;
    public function traitB()
    {
        echo '<br>je suis le trais B';
    }
}
class MaClasse
{
    use B;
}

$m= new MaClasse();
$m->traitA();//affiche je suis le trait A
$m->traitB();//affiche je suis le traits B
