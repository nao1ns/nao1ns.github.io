<!DOCTYPE html>
<html>
  <meta charset="UTF-8"/>
  <link href="nn.CSS" rel="stylesheet" type="text/CSS"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <body background="фон..JPG">

<div class="container mt-4" >
<h1 >Peгестрация</h1>
<form action="рег.php" method="post">
  <input type="text" class="from-control" name="имя"
 id="имя" placeholder="ведитте имя"><br>
<input type="text" class="from-control" name="login"
 id="login" placeholder="ведите логин"><br>
<input type="text" class="from-control" name="pasw"
ы id="pasw" placeholder="пароль"><br>
<button class="btn btn-success"
type="submit"> зарегистрирвать</button>
 
<?php
 $login = $_POST['login'];
 echo $login;
?>

</form>
</div>
  </body>
</html>