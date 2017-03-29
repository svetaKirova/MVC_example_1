<?php
include 'views/viewForNewsController/classes.php';
class News2
{
    // таблица соотв. классу
    // т.е. таблица сопоставл. с классом, а объект с одной записью в этой таблице
    // getList() тянет все записи из базы
    public static function getList()
    {
        global $connection;
//        echo "<pre>";
//         print_r($connection);
//        echo "</pre>";
        $sql = "SELECT * FROM news";
        $result = mysqli_query($connection, $sql);

        $list = [];
        while ($element = mysqli_fetch_assoc($result)) {
            $item = new $element['type'];
            $item->title = $element['title'];
            $item->date = $element['date_created'];
            $item->type = $element['type'];

           $list[] = $item;
//            $list[] = [
//                'title' => $element['title'],
//                'date' => $element['date_created'],
//                'type' => $element['type'],
//            ];
        }
        include_once 'views/viewForNewsController/view.php';
        return $list;
    }
}