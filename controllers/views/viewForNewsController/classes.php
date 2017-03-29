<?php
class News
{
    public $title;
    public $date;
    public $type;

    public function printInfo()
    {
        //return '<h6>' . $this->title . '</h6>';
    }
}
class Top extends News
{
    public function printInfo()
    {
        include 'templates/top.php';
    }
}
class Regular extends News
{
    public function printInfo()
    {
        include 'templates/regular.php';
    }
}
class Usual extends News
{
    public function printInfo()
    {
        include 'templates/usual.php';
    }
}
