<?php 
    $errDayso = $errSocantim = "";
    $dayso = $mang = $socantim = "";
    $arr = array();
    $total = 0;

    function timKiem($arr, $x)
    {
      $kq='';
      for ($i=0; $i < count($arr); $i++) { 
        # code...
        if($arr[$i] == $x)  $kq .= ($i+1) . " ";
      }
      return $kq;
    }

    if(isset($_POST['submit']))
    {
        //Kiểm tra dãy số đã được nhập vào hay chưa
        if(empty($_POST['dayso']))
        {
            $errDayso = "* Chưa nhập vào dãy số";
        }
        else
        {
           $dayso = $_POST['dayso'];
           $socantim = $_POST['socantim'];
           $arr = explode("," , $dayso);
           for ($i=0; $i < count($arr); $i++) { 
             # code...'
             $mang .= $arr[$i] . ", ";
           }
           if(timKiem($arr, $socantim)!="") $total = "Đã tìm thấy " .$socantim. " ở vị trí ".timKiem($arr, $socantim);
           else $total = "Không tìm thấy";
        }
    }
?>

<!doctype html>
<html lang="en">

  <head>
    <title>TÌM KIẾM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="form.css">

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
        <h2>TÌM KIẾM</h2>
    </div>
    
    <form class="form-tinhtoan" action="index.php" method="post" style="width:80%; margin-left:80px" >
        <div class="form-group">
          <label for="">Nhập mảng</label>
          <div style="width:76%">
            <input type="text" name="dayso" class="form-control" value="<?php echo $dayso?>">
            <small><?php echo $errDayso ?></small>
          </div>
        </div>

        <div class="form-group" style="width:250px">
          <label for="">Nhập số cần tìm</label>
          <div style="width:76%">
            <input type="text" name="socantim" class="form-control" value="<?php echo $socantim?>">
            <small><?php echo $errSocantim ?></small>
          </div>
        </div>

        <button name="submit" class="btn btn-dark submit">Tìm kiếm</button>

        <div class="form-group" style="margin-top: 20px">
          <label for="">Mảng</label>
          <div style="width:76%">
            <input type="text" name="mang" readonly class="form-control" value="<?php echo $mang?>">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px">
          <label for="">Kết quả tìm kiếm</label>
          <input type="text" name="total" readonly class="form-control" value="<?php echo $total?>">
        </div>
    </form>
    
  </div>
    
  </body>
</html>