<?php
        if(isset($_GET['getal1']) && isset($_GET['getal2'])) {
            $som = (int)$_GET['getal1'] + (int)$_GET['getal2'];
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
            $getal1 = $_GET['getal1'];

            echo "<span class='getal'>" . $getal1 . "</span>"

            ?>
            
            <p>
                <span class='getal'><?php echo $_GET['getal1']; ?></span>
                +
                <span><?php echo $_GET['getal2']; ?></span>
                =
                <span><?php echo $som; ?></span>
            </p>

            <?php
        }
    ?>

    <form action="sum2.php" method="get">
        <p>
            <label for="getal1">Getal1</label>
            <input type="number" name="getal1" id="getal1" value="<?php echo $_GET['getal1'] ?? ""; ?>">
        </p>
        <p>
            <label for="getal2">Getal2</label>
            <input type="number" name="getal2" id="getal2" value="<?php echo $_GET['getal2'] ?? ""; ?>">
        </p>
        <p>
            <button type="submit">Optellen</button>
        </p>
    </form>
</body>
</html>