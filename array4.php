<!DOCTYPE html>
<html>
<body>

<?php
 $x = array(1, 2, 3, 4, 5);
 unset($x[2]);
 sort($x);
 print_r($x);
?>

</body>
</html>