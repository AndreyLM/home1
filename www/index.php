<?php
require_once __DIR__ . '/model/news.php';

$news=news_Get();

include_once __DIR__.'/view/index.php';