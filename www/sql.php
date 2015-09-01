<?php

function connection()
{
    mysql_connect('localhost', 'root', '' );
    mysql_select_db('news_bd');

}

/**
 * @param $query
 */

function news_exec($query)
{
    connection();
    $result=mysql_query($query);

    $a=[];

    while(!false==($row=mysql_fetch_array($result))) {

    }


}

function news_GetAll() {

}