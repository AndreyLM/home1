<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 28.08.2015
 * Time: 11:14
 */
require_once __DIR__.'/../sql.php';

function news_GetAll() {
    $arr=news_GetAll_sql();
    if(empty($arr)) {
        return false;
    }

    return $arr;
}

function news_GetByID($id)
{
    $news=news_GetById_sql($id);
    if (empty($news)) {
        return false;
    }

    return $news;
}

function news_Add($header, $text)
{
    return news_Add_sql($header, $text);
}