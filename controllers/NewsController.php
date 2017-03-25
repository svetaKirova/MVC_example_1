<?php
include 'models/News2.php';
class newsController

{
    public function  actionList()
    { // просматриваем страницу новостей
        echo 'это acton List, детка';
        //получить список из бд
       $list = News2::getList();
        // и подкл. вьюшку:
       include_once 'views/viewForNewsController/view.php';
    }

    public function  actionNext()
    { // просматриваем страницу новостей
        echo 'это acton Next, детка';
    }

    public function  actionOne()
    { // просматриваем одну новость
        echo 'это acton One, детка';
    }
}