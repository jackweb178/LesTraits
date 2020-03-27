<?php
//les traits  permettent deviter la duplicaion du code dune methode dans plusieurs classe

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667373-les-traits#/id/r-1670642
/*
 *
Nous avons vu que les traits servaient à isoler des méthodes afin de pouvoir les utiliser dans deux classes totalement indépendantes. Si le besoin s'en fait sentir, sachez que vous pouvez aussi définir des attributs dans votre trait. Ils seront alors à leur tour importés dans la classe qui utilisera ce trait. Exemple :
 * */
trait MonTrait
{
    protected  $attribut = "Hello !";
    public function showAttribut()
    {
        echo $this->attribut;
    }
}

class MaClasse
{
    use MonTrait;
}

$m= new MaClasse();
$m->showAttribut();
