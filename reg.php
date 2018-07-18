<?php
require "db.php";
$data=$_POST;
if(isset($data['reg_submit']))
{
    //здесь регистрируем
    //$errors=array();
    if(trim($data['login'])=='')
    {
       $errors[] ='Введите логин';
    }
    if(trim($data['email'])=='')
    {
        $errors[] ='Введите email';
    }
    if(($data['password'])=='')
    {
        $errors[] ='Введите пароль';
    }
    if($data['password_2']!=$data['password'])
    {
        $errors[] ='Повторный пароль введен не верно';
    }

    //проверка что такой логин и email уже существует
    if(R::count('users',"login=?",array($data['login']))>0)
    {
        $errors[]='Пользователь с таким логином уже существует';
    }

    if(R::count('users',"email=?",array($data['email']))>0)
    {
        $errors[]='Пользователь с таким email уже существует';
    }


    if(empty($errors))
    {
     //все хорошо регистрируем
      $user= R ::dispense('users');
      $user->login=$data['login'];
      $user->email=$data['email'];
      $user->password=password_hash($data['password'],PASSWORD_DEFAULT);
      $user->join_data=time();
      R ::store($user);
      header('location://localhost/redbean/regInfo.php');
     // echo'<div style="color: green;" > Вы успешно зарегистрировались </div><br>';



      }else
        {
         echo'<div style="color:red;">'. array_shift($errors).'</div><br>';
        }
}

?>

































<!---->
<!--<form action="reg.php" method="POST">-->
<!--    <p>-->
<!--    <p><strong>Ваш логин</strong></p>-->
<!--    <input type="text" name="login" value="--><?php //echo @$data['login'];?><!--">-->
<!--    </p>-->
<!---->
<!--    <p>-->
<!--    <p><strong>Ваш email</strong></p>-->
<!--    <input type="email" name="email" value="--><?php //echo @$data['email'];?><!--">-->
<!--    </p>-->
<!---->
<!--    <p>-->
<!--    <p><strong>Ваш пароль</strong></p>-->
<!--    <input type="password" name="password">-->
<!--    </p>-->
<!---->
<!--    <p>-->
<!--    <p><strong>Ваш пароль еще раз</strong></p>-->
<!--    <input type="password" name="password_2">-->
<!--    </p>-->
<!---->
<!--    <p>-->
<!--        <button type="submit" name="reg_submit"> Зарегистрироваться</button>-->
<!--    </p>-->
<!---->
<!--</form>-->

