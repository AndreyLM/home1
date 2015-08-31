<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 28.08.2015
 * Time: 11:14
 */
require_once __DIR__.'/../sql.php';

function news_Get() {
    $a=[];
    $a[]=['header'=>'Tile1', 'text'=>'Text text text', 'date'=>'25.06.2015'];
    $a[]=['header'=>'Tile2', 'text'=>'Text2 text2 text2', 'date'=>'26.06.2015'];
    $a[]=['header'=>'Tile3', 'text'=>'Text3 text2 text2', 'date'=>'26.06.2015'];

    return $a;

}