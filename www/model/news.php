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
    $a[]=['id'=>1, 'header'=>'Tile1', 'text'=>'Text text text', 'date'=>25/06/2015];
    $a[]=['id'=>2, 'header'=>'Tile2', 'text'=>'Text2 text2 text2', 'date'=>27/06/2015];
    $a[]=['id'=>3, 'header'=>'Tile3', 'text'=>'Text3 text2 text2', 'date'=>24/06/2015];

    return $a;

}

function news_GetByID($id)
{
    $news=news_Get();
    $article=[];

    foreach($news as $key=>$row)
    {
        if(is_array($row))
        {
            if($id==$row['id']) {
                $article=$row;
            }
        }
    }

    return $article;
}

function news_Add($header, $text)
{
    return true;
}