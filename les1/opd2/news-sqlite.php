<?php
    $db = new PDO('sqlite:news.db');
    $stmt = $db->prepare('SELECT title, introduction FROM news');
    $stmt->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php while ($article = $stmt->fetchObject()) { ?>
        <article>
            <h1><?php echo $article->title; ?></h1>
            <p><?php echo $article->introduction; ?></p>
        </article>

    <?php } ?>

</body>

</html>