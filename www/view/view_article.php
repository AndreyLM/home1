<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View article</title>
</head>
<body>
    <h3><?php echo $article->news_GetByID($id)[0]['header']; ?></h3>
    <p><?php echo $article->news_GetByID($id)[0]['article_text']; ?> </p>
    <p>Publication date: <?php echo $article->news_GetByID($id)[0]['created_date']; ?></p>
    <p><a href="<?php echo '/home/www/index.php'; ?>">Back to all news</a></p>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 31.08.2015
 * Time: 9:28
 */