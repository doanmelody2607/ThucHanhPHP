<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table style ="border:1px solid red">
<tr>
<?php
for($i = 1; $i < 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>
</body>
</html>