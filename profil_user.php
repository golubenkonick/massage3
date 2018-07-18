<?php
require "db.php";
?>


<title>Profil_user</title>
<!DOCTYPE html>
<html lang="en">

<br>
<br>
<br>
<div class="container">
 <p>Личный кабинет</p>
    <?php if(isset($_SESSION['logged_user'])): ?>
    Привет <?php echo $_SESSION['logged_user']->login; ?>!
  <br>
    <a href="logout.php">ВЫЙТИ</a>
<?php else : ?>




<?php endif ; ?>
</div>


 <?php
 include "./views/header.php";?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
include "./views/footer.php";?>


