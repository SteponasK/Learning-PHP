<?php

class Article
{
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }
    public function publish()
    {
        $this->published = true;
    }
    public function isPublished()
    {
        return $this->published;
    }
}
$article1 = new Article('Alpha', 'Good');
$article2 = new Article('Beta', 'Bad');

$article1->publish();

// echo $article1->isPublished() . '<br>' . $article2->isPublished();
var_dump($article1->isPublished());
var_dump($article2->isPublished());
