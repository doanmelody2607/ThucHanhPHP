<?php
    $errBK = $bankinh = $chuvi = $dientich = "";
    if(isset($_POST['submit']))
    {
        //Kiểm tra bán kính
        if(empty($_POST['bankinh']))
            $errBK = "* Chưa nhập vào bán kính";
        else
        {
            $bankinh = $_POST['bankinh'];
            if(!is_numeric($bankinh))
                $errBK = "* Chỉ cho phép nhập vào số";
            else if($bankinh <= 0)
                $errBK = "* Bán kính phải lớn hơn 0";
        }

        //Tính diện tích và chu vi
        if(empty($errBK))
        {
            define('PI','3.14');
            $dientich = PI*pow($bankinh,2);
            $chuvi = 2*PI*$bankinh;
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>DIỆN TÍCH và CHU VI HÌNH TRÒN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bai2.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <div class="form-bt">

    <div class="form-bt-title"> 
        <h2>DIỆN TÍCH và CHU VI HÌNH TRÒN</h2>
    </div>
    
    <form class="form-tinhtoan" action="bai2.php" method="post" style="width:70%; margin-left:90px" >
        <div class="form-group">
          <label for="">Bán kính</label>
          <div style="width:76%">
            <input type="text" name="bankinh" class="form-control" value="<?php echo $bankinh ?>">
            <small><?php echo $errBK ?></small>
          </div>  
        </div>

        <div class="form-group">
          <label for="">Chu vi</label>
          <input type="text" name="dientich" readonly class="form-control" value="<?php echo $chuvi?>">
        </div>

        <div class="form-group">
          <label for="">Diện tích</label>
          <input type="text" name="dientich" readonly class="form-control" value="<?php echo $dientich?>">
        </div>

        <button name="submit" class="btn btn-dark submit">Tính</button>
    </form>
    
  </div>
  </body>
</html>