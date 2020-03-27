<?php
//les traits  permettent deviter la duplicaion du code dune methode dans plusieurs classe

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667373-les-traits#/id/r-1670619
trait HTMLFormater //declaration du trait
{
    public function formatText($text)
    {
        return '<p> Date : '.date('d/m/y').'</p>'."\n".'<p>'.nl2br($text).'</p>';///nl2br =<br>
    }
}

trait TextFormater
{
    public function formatText($text)
    {
        return 'Date : '.date('yy/m/d')."\n\n".nl2br($text);
    }
}

class Writer
{
    use HTMLFormater, TextFormater
    {
        HTMLFormater::formatText insteadof TextFormater;//la methode formatText() du trait HTMLFormater écrasera la méthode du même nom du trait TextFormater(si elle y est définie)
    }
    public function write($text)
    {
        file_put_contents('fichier.html' , $this->formatText($text));
    }
}

$w=new Writer;
$w->write('hello word !');
