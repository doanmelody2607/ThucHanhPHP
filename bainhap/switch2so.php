<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table style ="border:1px solid red">
<tr>
<?php
    function doicho(&$x,&$y){
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
    function sort_3so(&$x,&$y,&$z){
        if($x<$y) doicho($x,$y);
        else{
            if($x<$z) doicho($x,$z);
                else if($y<$z) doicho($y,$z);
        }
    }
    $a = 5;
    $b = 6;
    $c = 1;
    sort_3so($a,$b,$c);
    echo $a." ".$b." ".$c;
?>
</tr>
</table>
</body>
</html>