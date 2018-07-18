<?php
//?>
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<style>-->
<!--    .log{-->
<!---->
<!--        display: flex;-->
<!--        justify-content: space-around;-->
<!--        margin-bottom: 50px;-->
<!--    }-->
<!---->
<!---->
<!--    .log_form{-->
<!--        width: 400px;-->
<!--        height: 300px;-->
<!--         background: #F5F5F5;-->
<!--        border: 2px solid silver;-->
<!--        border-radius: 10px;-->
<!--    }-->
<!--    .log_form p{-->
<!--        color: #1b6d85;-->
<!--       margin: 15px;-->
<!--    }-->
<!--    .log_form input{-->
<!--        width: 80%;-->
<!--        margin-left: 15px;-->
<!--    }-->
<!--    .log_submit{-->
<!--        width: 100px;-->
<!--        height: 35px;-->
<!--        margin-top: 20px;-->
<!--        background:forestgreen ;-->
<!--        color: white;-->
<!--        border-radius: 7px;-->
<!--        outline: 0 !important;-->
<!--    }-->
<!--    .enter{-->
<!--        margin-top: 40px;-->
<!--        font-size:22px ;-->
<!--        text-align: left;-->
<!---->
<!--    }-->
<!--    .enter p{-->
<!--        color: #1b6d85;-->
<!--        max-width: 400px;-->
<!--        margin: auto;-->
<!---->
<!--    }-->
<!--    .enter_info{-->
<!--        background:#D8E7F5 ;-->
<!--        border: 1px solid #b9def0;-->
<!--        text-align: center;-->
<!--        max-width: 400px;-->
<!--        margin:30px auto;-->
<!--       min-height: 50px;-->
<!---->
<!--    }-->
<!--     .enter_info p{-->
<!--         margin-top: 15px;-->
<!--         text-align: left;-->
<!--         padding-left: 10px;-->
<!--         color: #1b6d85;-->
<!--     }-->
<!--</style>-->
<?php
//include "header.php";?>
<?php
//include "mayk.php";?>
<!---->
<!---->
<!--<div class="container ">-->
<!---->
<!--            <div >-->
<!--                    <div class="enter ">-->
<!--                        <p> Вход:</p>-->
<!--                    </div>-->
<!--                    <div class="enter_info ">-->
<!--                         <p> Введите парполь/логин или <a><b>зарегистрируйтесь:</b></a></p>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="log">-->
<!---->
<!--                <div class="log_form">-->
<!---->
<!---->
<!--                    <form action="v_login.php" method="POST">-->
<!---->
<!--                        <p>-->
<!--                        <p><strong> Логин* </strong></p>-->
<!--                        <input type="text" name="login" value="--><?php //echo @$data['login'];?><!--">-->
<!--                        </p>-->
<!---->
<!--                        <p>-->
<!--                        <p><strong> Пароль*</strong></p>-->
<!--                        <input type="password" name="password">-->
<!--                        </p>-->
<!---->
<!--                        <p >-->
<!--                            <button class="log_submit" type="submit" name="login_submit"> Войти</button>-->
<!--                        </p>-->
<!---->
<!---->
<!--                    </form>-->
<!---->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--</div>-->
<!---->
<?php
//include "footer.php";
//?>
<!---->















<!DOCTYPE html>
<html lang="en">
<title>Логин</title>
<style>
    .log{

        display: flex;
        justify-content: space-around;
        margin-bottom: 70px;
    }


    .log_form{
        width: 400px;
        height: 300px;
        background: #F5F5F5;
        border: 2px solid silver;
        border-radius: 10px;
    }
    .log_form p{
        color: #1b6d85;
        margin: 15px;
    }
    .log_form input{
        width: 70%;
        margin-left: 15px;
    }
    .login_submit{
        width: 100px;
        height: 35px;
        margin-top: 20px;
        background:forestgreen ;
        color: white;
        border-radius: 7px;
        outline: 0 !important;
    }
    .enter{
        margin-top: 20px;
        font-size:22px ;
        text-align: left;

    }
    .enter p{
        color: #1b6d85;
        max-width: 400px;
        margin: auto;

    }
    .enter_info{
        background:#D8E7F5 ;
        border: 1px solid #b9def0;
        text-align: center;
        max-width: 400px;
        margin:30px auto;
        min-height: 50px;

    }
    .enter_info p{
        margin-top: 15px;
        text-align: left;
        padding-left: 10px;
        color: #1b6d85;
    }
</style>

<div class="container ">

    <div >
        <div class="enter ">
            <p> Вход:</p>
        </div>
        <div class="enter_info ">
            <p> Введите парполь/логин или <a href="http://localhost/redbean/views/registration.php"><b>зарегистрируйтесь:</b></a></p>
        </div>

    </div>

    <div class="log">

        <div class="log_form">


            <form action="../login.php" method="POST">

                <p>
                <p><strong> Логин* </strong></p>
                <input type="text" name="login" value="<?php echo @$data['login'];?>">
                </p>

                <p>
                <p><strong> Пароль*</strong></p>
                <input type="password" name="password">
                </p>

                <p >
                    <button class="login_submit" type="submit" name="login_submit"> Войти</button>
                </p>


            </form>


        </div>
    </div>
</div>


