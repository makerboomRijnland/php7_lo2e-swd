<?php
    $db = mysqli_connect('127.0.0.1', 'root', 'root', 'news');
    $articles = $db->query('SELECT title, introduction FROM news');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php while ($article = $articles->fetch_object()) { ?>

        <article>
            <h1><?php echo $article->title; ?></h1>
            <p><?php echo $article->introduction; ?></p>
        </article>


</body>

</html>