<html>
    <head><link rel="stylesheet" href="nouvelleConnexion.css"></head>
    <body>

    <?php
if(isset($_POST["registrer"]))
{
    if(empty($_POST["email"])|| empty($_POST["password"])|| empty($_POST["user"])|| empty($_POST["date"]))
    {
        echo"<h3 >champ vide !</h3>";
    }else{
      $email= $_POST["email"];
        $password= $_POST["password"];
        $user= $_POST["user"];
        $date= $_POST["date"];
        include("testeconexion.php");
        $res=$con->query("INSERT INTO connexion(email,password,user,date) VALUES('".$email."','".$password."','".$user."','".$date."')");
    }
}
    ?>
    <h1>market e-commerce</h1>
<form method="post" action="">
<div id="nouvelleConnexion">
    <h2>nouvelle connexion</h2>
    <div class="emailAndPasswordAndUserName"><p class="email">email:</p> <input type="email" placeholder="entrer votre email" class="email" name="email"></div>
    <div class="emailAndPasswordAndUserName"><p class="password">mot de pass:</p> <input type="password" placeholder="entrer votre mot de pass" class="password" name="password"></div>
    <div class="emailAndPasswordAndUserName"><p class="user">user name:</p> <input type="text" placeholder="entrer user name" class="user" name="user"></div>
     <div class="emailAndPasswordAndUserName"><p class="date">date de naissance:</p> <input type="date"  class="date" name="date"></div>
    <p ><input type="submit" id="button" value="registrer" name="registrer"> </p>
</div>
</form>
    </body>
</html>