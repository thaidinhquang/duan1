<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .binhluan {
        width: 100%;
    }

    .binhluan td:nth-child(1) {
        width: 50%;
    }

    .binhluan td:nth-child(2) {
        width: 20%;
    }

    .binhluan td:nth-child(3) {
        width: 30%;
    }
</style>

<body>

    <div class="panel panel-default mt-4">
        <h1 class="card-title">Bình Luận</h1>
        <div class="list-group">
            <table class="binhluan mb-4">
                <?php
                foreach ($dsbl as $ds) {
                    extract($ds);
                    echo '<tr><td>' . $noidung . '</td>';
                    echo '<td>' . $iduser . '</td>';
                    echo '<td>' . $ngay_bl . '</td></tr>';
                }
                ?>
            </table>



        </div>
        <div class="">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
<div class="row">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="text" name="noidung" id="" class="col-sm-8 col-form-label form-control">
                <input type="submit" name="guibinhluan" class="btn btn-primary  " value="Gửi Bình Luận">
            </form>
            </div>
        </div>

        <div>
            <?php
                if (isset($_SESSION['user'])) {
            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
             
                    $noidung = $_POST['noidung'];
                    $iduser = $_SESSION['user']['id'];
                    $idpro = $_POST['idpro'];
                    $ngay_bl = date('Y-m-d H:i:s');


                    insert_binhluan($noidung, $iduser, $idpro, $ngay_bl);
                    header("Location: " . $_SERVER['HTTP_REFERER']);
                    
                 
                }
            } else {
                echo '<div class = text-center>bạn cần phải <a href="#login" data-toggle="modal" data-target="#login" class="text-primary mt-4"> Đăng nhập </a></div>';
        
                    
            }
               

           
            ?>
        </div>
    </div>
</body>

</html>
