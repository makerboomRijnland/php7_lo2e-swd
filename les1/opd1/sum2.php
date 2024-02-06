<?php
        if(isset($_POST['getal1']) && isset($_POST['getal2'])) {
            $som = (int)$_POST['getal1'] + (int)$_POST['getal2'];
            ?>

            <?php
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($som)) {
            ?>
            
            <p>
                <span><?php echo $_POST['getal1']; ?></span>
                +
                <span><?php echo $_POST['getal2']; ?></span>
                =
                <span><?php echo $som; ?></span>
            </p>

            <?php
        }
    ?>

    <form action="sum2.php" method="post">
        <p>
            <label for="getal1">Getal1</label>
            <input type="number" name="getal1" id="getal1" value="<?php echo $_POST['getal1']; ?>">
        </p>
        <p>
            <label for="getal2">Getal2</label>
            <input type="number" name="getal2" id="getal2">
        </p>
        <p>
            <button type="submit">Optellen</button>
        </p>
    </form>
</body>
</html>