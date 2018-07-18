<?php
require "./db.php";


$data=$_POST;
if(isset($data['login_submit']))
{
    $errors=array();
    $user=R::findOne('users','login=?',array($data['login']));

     if($user)
     {
          //логин существует
         if( password_verify($data['password'],$user->password))
         {

             //все хорошо,логиним пользовыателя
             $_SESSION['logged_user']=$user;
             header('location://localhost/redbean/index.php');

             echo'<div style="color:green;"><p>Вы авторизованы, Можете перейти в личный кабинет</p>
                <a href="profil_user.php">Личный кабинет</a><br>
                <a href="index.php">Главная</a>

                </div>';




         }else
             {
                 $errors[]='Пароль введен не верно';
             }


     }else
     {
         $errors[]='Пользователь с таким логином не найден';
     }
     if(!empty($errors))
     {
         echo'<div style="color:red;">'. array_shift($errors).'</div><br>';
     }
}





