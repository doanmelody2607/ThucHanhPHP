<!doctype html>
<html lang="en">
  <head>
    <title>Bài 9</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  <!-- Nav tabs -->
  <ul class="nav navbar-expand-sm bg-dark navbar-dark">
      
      <li class="nav-item active">
          <a href="index.php?id=1"  class="nav-link active">Trang chủ</a>
      </li>

      <li class="nav-item">
          <a href="index.php?id=2" class="nav-link active">Giới thiệu</a>
      </li>

      <li class="nav-item">
          <a href="index.php?id=3" class="nav-link active">Tin tức</a>
      </li>

      <li class="nav-item">
          <a href="index.php?id=4" class="nav-link active">Liên hệ</a>
      </li>

      <li class="nav-item">
          <a href="index.php?id=5" class="nav-link active">Diễn đàn</a>
      </li>
  </ul>

    <div>  
    <?php 
        
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            switch($id)
            {
                case 1: include('trangchu.php'); break;
                case 2: include('gioithieu.php'); break;
                case 3: include('tintuc.php'); break;
                case 4: include('lienhe.php'); break;
                case 5: include('diendan.php'); break;
            }
        }
    ?>
    </div>
    

</html>