// Part 1: Charlie Bites Your Finger

<?php
function isBitten() {
    return rand(0, 1) == 1;
}
?>

//Part 2: Generate Webpage

?>
<!DOCTYPE html>
<html>
<head>
    <title>Charlie Bites</title>
</head>
<body>
    <h1>
        <?php
        if (isBitten()) {
            echo "Charlie bit your finger!";
        } else {
            echo "Charlie did not bite your finger!";
        }
        ?>
    </h1>
</body>
</html>

