<?php
//les traits  permettent deviter la duplicaion du code dune methode dans plusieurs classe

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667373-les-traits#/id/r-1670601
trait HTMLFormater //declaration du trait
{
    public function format($text)
    {
        return '<p> Date : '.date('d/m/y').'</p>'."\n".'<p>'.nl2br($text).'</p>';
    }
}
class Writer
{
    use HTMLFormater;
    public function write($text)
    {
        file_put_contents('fichier.html' , $this->format($text));
    }
}

class  Mailer
{
    use HTMLFormater;
    public function send($text)
    {
        mail('login@gmail.com', 'test avec les traits', $this->format($text));
    }
}

$w=new Writer;
$w->write('hello word !');

$m = new Mailer;
$m->send('hello word !');