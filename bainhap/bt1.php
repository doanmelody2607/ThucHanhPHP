<!DOCTYPE HTML>
<html>
<style>
table {
    width: fit-content;
    background-color: #FFFF99;
}
</style>

<body>
    <?php 
        $n = $demchan = $demnho = $demam = 0;
        $blank = "";
        if (isset($_POST['submit']))
        {
            $blank = "*Trường này không được bỏ trống";
            $error = "*Nhập sai vui lòng nhập lại";
            $n = $_POST['n'];
            
            (int)$ran = array();
            
            
        }  
    ?>

    <table>
        <form action="" method="post">
            <caption style="background-color: #FF3300;"><b>BÀI TẬP 1<b></caption>


            <tr>
                <td>
                    <label><b>Nhập n: </b></lablel>
                </td>

                <td>
                    <input type="number" name="n" value="<?php 
                    if(isset($_POST["n"])){
                        echo $n;
                    }else echo $n = "";
                 ?>" />
                </td>
                <td>
                    <span style="color: red;"><?php if($n==""){echo $blank;} ?></span>
                </td>                
            </tr>
            
            <tr>
                <td>
                    <label><b>Sinh số ngẫu nhiên: </b></lablel>
                </td>
                <?php
                    for($i = 0; $i<$n; $i++){
                        $ran[] = rand(-1000,1000);
                    }
                ?>
                <td>
                    <?php
                        if(isset($_POST["n"])){
                            for($i = 0;$i<$n;$i++){
                                echo (integer)$ran[$i]." ";
                            }
                        }else echo ""; 
                    ?>
                </td>
                
            </tr>
            <tr>
                <td>
                    <label><b>Đếm số chẵn trong mảng: </b></lablel>
                </td>
                <td>
                    <?php
                        if(isset($_POST["n"])){
                            for($i = 0;$i<$n;$i++){
                                if(is_numeric($ran[$i])){
                                    if($ran[$i] % 2 == 0){
                                        $demchan++;
                                    }
                                }
                            }
                            echo $demchan;
                        }else echo $demchan; 
                    ?>
                </td>
                
            </tr>
            <tr>
                <td>
                    <label><b>Đếm số phần tử trong mảng nhỏ hơn 100: </b></lablel>
                </td>
                <td>
                    <?php
                        if(isset($_POST["n"])){
                            for($i = 0;$i<$n;$i++){
                                if(is_numeric($ran[$i])){
                                    if($ran[$i] <100){
                                        $demnho++;
                                    }
                                }
                            }
                            echo $demnho;
                        }else echo $demnho; 
                    ?>
                </td>
                
            </tr>
            <tr>
                <td>
                    <label><b>Đếm số phần tử trong mảng là số âm: </b></lablel>
                </td>
                <td>
                    <?php
                        if(isset($_POST["n"])){
                            for($i = 0;$i<$n;$i++){
                                if(is_numeric($ran[$i])){
                                    if($ran[$i] <0){
                                        $demam++;
                                    }
                                }
                            }
                            echo $demam;
                        }else echo $demam; 
                    ?>
                </td>
                
            </tr>
            <tr>
                <td>
                    <label><b>Vị trí phần tử có giá trị 0: </b></lablel>
                </td>
                <td>
                    <?php
                        if(isset($_POST["n"])){
                            for($i = 0;$i<$n;$i++){
                                if(is_numeric($ran[$i])){
                                    if($ran[$i] == 0){
                                        echo $i;
                                    }
                                }
                            }
                            
                        }else echo "Không có"; 
                    ?>
                </td>
                
            </tr>   
            <tr>
                <td>
                    <label><b>Sắp xếp mảng: </b></lablel>
                </td>
                <td>
                    <?php
                        if(isset($_POST["n"])){
                            for($i = 0;$i<$n;$i++){
                                if(is_numeric($ran[$i])){
                                    sort($ran);
                                    echo $ran[$i]." ";
                                }
                            }
                            
                        }else echo ""; 
                    ?>
                </td>
                
            </tr>   
            
            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" name="submit" value="Tính" />
                </td>

            </tr>
        </form>
    </table>
</body>

</html>