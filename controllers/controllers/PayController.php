<?php

class payController

{
    public function  actionShowInfo()
    { // просто одна страница
        echo 'это acton showInfo, из pay';
      // и подкл. вьюшку:
        include_once 'views/viewForPayController/view.php';
    }


}