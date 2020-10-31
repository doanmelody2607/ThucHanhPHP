<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        if(isset($_GET["submit"]))
        {
            echo "Tu khoa de nhap la".$_GET["name"];
        }
    ?>

    <form action="" method="get">
        Tu khoa: <input type="text" name="tukhoa"> <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>