<?php

class MySql_provider
{

    public function _construct()
    {
        connection();
    }

    private function connection()
    {
        mysql_connect('localhost', 'root', '' );
        mysql_select_db('news_bd');

    }

    private function news_exec($query)
    {
        connection();
        $result=mysql_query($query);

        $a=[];

        while(!false==($row=mysql_fetch_assoc($result))) {
            $a[]=$row;
        }
        //var_dump($a);
        return $a;
    }

    private function news_update($query)
    {
        connection();
        return mysql_query($query);
    }

    public function news_GetAll_sql() {
        $query='SELECT * FROM articles';
        return news_exec($query);
    }

    public function news_GetById_sql($id)
    {
        $query='SELECT * FROM articles WHERE id='.$id;
        return news_exec($query);
    }

    public function news_Add_sql($header, $text)
    {
        $query='INSERT INTO articles (header, article_text) VALUES ("'.$header.'", "'. $text.'")';
        news_update($query);

    }

}

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

    while(!false==($row=mysql_fetch_assoc($result))) {
       $a[]=$row;
    }
    //var_dump($a);
    return $a;
}

function news_update($query)
{
    connection();
    return mysql_query($query);
}

function news_GetAll_sql() {
    $query='SELECT * FROM articles';
    return news_exec($query);
}

function news_GetById_sql($id)
{
    $query='SELECT * FROM articles WHERE id='.$id;
    return news_exec($query);
}

function news_Add_sql($header, $text)
{
    $query='INSERT INTO articles (header, article_text) VALUES ("'.$header.'", "'. $text.'")';
    news_update($query);

}