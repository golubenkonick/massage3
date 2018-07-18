<?php
//require 'db.php';
//require './controller/c_anketa.php';
//
//?>
<!-- <br>-->
<!--<br>-->
<!--<br>-->
<!--<div class="container">-->
<?php //if(isset($_SESSION['logged_user'])): ?>
<!--    Авторизован!<br>-->
<!--    Привет --><?php //echo $_SESSION['logged_user']->login; ?><!--!-->
<!---->
<!--    <a href="logout.php">Выйти</a><br>-->
<!--    <a href="profil_user.php">Личный кабинет</a>-->
<?php //else : ?>

<!--    <a href="./views/autorization.php">АВТОРИЗАЦИЯ</a><br><br>-->
<!--    <a href="./views/registration.php">РЕГИСТРАЦИЯ</a>-->
<!---->
<?php //endif ; ?>

<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>индекс</title>-->
<!--</head>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Выше 3 Мета-теги ** должны прийти в первую очередь в голове; любой другой руководитель контент *после* эти теги -->
    <link href="http://localhost/redbean/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/redbean/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="http://localhost/redbean/css/style.css" rel="stylesheet"> 
</head>
<body>

<?php
include "./controller/c_anketa.php";
include "./views/header.php"; 
include "./views/v_mayk.php"; 

echo'
<div class="container">
    <div class="col-md-12" >
     



        <div class=" col-md-9 ">
';
include "./views/v_search.php";
include "./views/v_page.php"; 
include "./views/v_search_result.php";

echo '</div>   									<!-- end  col-md-9     -->';


include "./views/v_sidebar.php"; // + 
echo ' 
    </div>    									<!--  end  col-md-12    -->
    <div class="clearfix"></div>
</div>
';
include "./views/v_pagination.php"; 

include "./views/footer.php"; // + 
?>
</body>
</html>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./js/libs/bootstrap.min.js"></script>

