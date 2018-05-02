<?php
require_once ('myperson.php');

class Post

{
    const MAX_LENGHT = "20";
    private $title = "My title";
   private $content = "My content";
   private $author = "My author";



public function setTitle($title)
{
    $this->title=$title;
}
public function getTitle()
{
    return $this->title;
}

public function setContent($content)
{
        $this->content=$content;
        if (strlen($content) > self::MAX_LENGHT)
        {
            echo "Max lenght is " .self::MAX_LENGHT;
    }
    else
        {
            echo $this->content;
        }

}
public function getContent()
{
    return $this->content;
}
public function setAuthor(Person $person)
{
    //$this->author=$author;
    $this->author= $person;

}
public function getAuthor()
{
    return $this->author;
}

}

//$post = new Post();
//echo $post->setContent(300);

$post = new Post();
$post->setTitle("My titile");
$post->setContent("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s");
//Kodel man meta klaida, kad setAuthor yra neapibrezta?
$post->setAuthor ($person);


?>