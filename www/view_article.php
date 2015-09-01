<?php
require_once __DIR__.'/model/news.php';
$id=$_GET['id'];
$article=news_GetByID($id);
var_dump($article);
include_once __DIR__.'/view/view_article.php';