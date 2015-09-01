<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>
    <?php
        foreach ($news as $key=>$value) {
        if (is_array($value)) { ?>
            <p><?php echo $value['header'];?>
            <a href="<?php echo '/home/www/view_article.php?id='.$value['id']; ?>">Read article</a></p>
    <?php
        }
    }
    ?>
</body>
</html>
