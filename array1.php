<!DOCTYPE html>
<html>
<body>

<?php

$colors=array('white', 'green', 'red');
sort($colors);
echo "<ul>";
foreach($colors as  $data){
echo "<li>$data</li>";
}
echo "</ul>";

?> 

</body>
</html>