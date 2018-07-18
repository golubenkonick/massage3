


<style>
    .reg_form{


    }
    .form{
        margin: auto;

       max-width: 400px;
        height: 450px;
        background: #F5F5F5;
        border: 2px solid silver;
        border-radius: 10px;

    }
    .reg_info{
        background:#D8E7F5 ;
        border: 1px solid #b9def0;
        text-align: center;
        max-width: 400px;
        margin:30px auto;
        min-height: 50px;
    }
    .reg_info p{
        margin-top: 15px;
        text-align: left;
        padding-left: 10px;
        color: #1b6d85;
    }

    .form p{
        color:#1b6d85 ;
       padding-left: 15px;
        margin-top: 20px;
    }
    .form input{
        width: 70%;
        margin-left: 15px;
      height: 30px;
    }
    .reg_submit{
        width: 170px;
        height: 35px;
        margin-top: 20px;
        background:forestgreen ;
        color: white;
        border-radius: 7px;
        outline: 0 !important;
    }
</style>

<div class="container ">
    <div class="reg_form">

        <div class="reg_info">

            <p> Зарегистрируйтесь или  <a href="http://localhost/redbean/views/autorization.php"><b>/авторизируйтесь</b></a></p>
        </div>
        <div class="form">
        <form action="http://localhost/redbean/reg.php" method="POST">
            <p>
            <p><strong>Ваш логин*</strong></p>
            <input type="text" name="login" value="<?php echo @$data['login'];?>">
            </p>

            <p>
            <p><strong>Ваш email*</strong></p>
            <input type="email" name="email" value="<?php echo @$data['email'];?>">
            </p>

            <p>
            <p><strong>Ваш пароль*</strong></p>
            <input type="password" name="password">
            </p>

            <p>
            <p><strong>Ваш пароль еще раз*</strong></p>
            <input type="password" name="password_2">
            </p>

            <p>
                <button class="reg_submit" type="submit" name="reg_submit"> Зарегистрироваться</button>
            </p>

        </form>
        </div>
    </div>

</div>







<?php
//include "../views/footer.php";
//?>
<!---->
<!--<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="../js/libs/bootstrap.min.js"></script>-->


<!--<form action="../reg.php" method="POST">-->
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