<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        function timsole($n){
            if($n%2!=0){
                return 1;
            }
            else return 2;
        }
        for ($i=0; $i <=100; $i++) { 
            if(timsole($i) == 1) echo $i . " ";
        }
    ?>
</body>
</html>