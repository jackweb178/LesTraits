<?php
//les traits  permettent deviter la duplicaion du code dune methode dans plusieurs classe

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667373-les-traits#/id/r-1670626
/*
 *À l'inverse, si une classe utilise un trait possédant une méthode déjà implémentée dans la classe mère de la classe utilisant le trait, alors ce sera la méthode du trait qui sera utilisée (la méthode du trait écrasera celle de la méthode de la classe mère). Exemple :
 * */
trait MonTrait
{
    public function speak()
    {
        echo 'je suis un trait !';
    }
}

class Mere
{
    public function speak()
    {
        echo  "je suis la classe mere !";
    }
}

class Fille extends Mere
{
    use MonTrait;
}

$m= new Fille();
$m->speak();//affiche je suis un trait
