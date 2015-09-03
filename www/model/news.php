<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 28.08.2015
 * Time: 11:14
 */
require_once __DIR__ . '/../mySql.php';

class News
{
    private $news=[];
    private $provider;

    public function _construct()
    {
        $this->provider=new MySql_provider();
    }

    public function news_GetAll() {
        $this->news=news_GetAll_sql();

        if(empty($this->news)) {
            return false;
        }

        return $this->news;
    }

    public function news_GetByID($id)
    {

        $this->news=news_GetById_sql($id);
        if (empty($this->news)) {
            return false;
        }

        return $this->news;
    }

    static public function news_Add($header, $text)
    {
        return news_Add_sql($header, $text);
    }
}

