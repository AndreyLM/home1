<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 26.08.2015
 * Time: 16:54
 */
require_once __DIR__.'/model/news.php';

if(isset($_POST['submit'])) {
    if(empty($_POST['header']) || empty($_POST['text'])) {
        echo 'You must enter all fields';
    }
    if(false!==news_Add($_POST['header'], $_POST['text']))
    {
       echo 'Your article is successfully added.';
    }
    else {
        echo 'Error adding article. Plese try again.';
    }
    echo '<br>Return to the <a href="/home/www/index.php">main page</a>';
    exit;
}


include_once __DIR__.'/view/add_news.php';