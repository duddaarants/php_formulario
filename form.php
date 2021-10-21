<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body style="background-color: rgb(128, 195, 197);">

<div  class="container">
    <img  src="https://cdn.pixabay.com/photo/2014/12/16/12/59/login-570317_960_720.jpg" width="350" height="205" />
</div>
<h2 style="background-color: rgb(94, 165, 187); ">Welcome</h2>
 <?php 

 echo $_GET["nome"]; ?>
 
 <br>
<h3 style="background-color: rgb(94, 165, 187); ">Your email address is: </h3>

<?php echo $_GET["email"]; ?>

</body>
</html>
