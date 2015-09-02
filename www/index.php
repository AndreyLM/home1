<?php
require_once __DIR__ . '/model/news.php';

$news=news_GetAll();
$articles=new News();
$n=$articles->news_GetAll();

include_once __DIR__.'/view/index.php';