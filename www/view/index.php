<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>
    <?php
        foreach ($news as $key=>$value) {
        if (is_array($value)) { ?>
            <h3><?php echo $value['header'];?></h3>
            <p><?php echo $value['text'];?></p>
    <?php
        }
    }
    ?>
</body>
</html>
