<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    echo "The reset() function moves the internal pointer to the first element of the array.<br>";
    echo "Write a PHP script to get the first element of the above array.<br>";
    $color = array(4 => 'white', 6 => 'green', 11=> 'red');
	echo reset($color);

    ?>
</body>
</html>