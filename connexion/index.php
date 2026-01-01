<?php  session_start();  ?>
<html>
    <head><link rel="stylesheet" href="connexion.css"></head>
    <body>
        <?php
        $test=false;
        if(isset($_POST["connexion"]))
        {
            $email=$_POST["email"];
            $password=$_POST["password"];

            include("testeconexion.php");
            $res=$con->query("SELECT * FROM connexion ");
            while($row=$res->fetch_assoc())
            {
if($row["email"]==$email && $row["password"]==$password)
{
 $_SESSION["user"]=$row["user"]; 
    $test=true;
  header("Location:market/market.php") ; 
  exit();
}
            }
            if($test==false)
            {
echo"<h3>email ou mot de pass incorecte</h3>";
            }
        }
        ?>
<h1>market e-commerce</h1>
<form method="post" action="">
<div id="connexion">
    <h2>connexion</h2>
    <div class="emailAndPassword"><p class="email">email:</p> <input type="email" placeholder="entrer votre email" class="email" name="email"></div>
    <div class="emailAndPassword"><p class="password">mot de pass:</p> <input type="password" placeholder="entrer votre mot de pass" class="password" name="password"></div>
    <p ><input type="submit" class="buttons" value="connexion" name="connexion"> <a href="nouvelleConnexion/nouvelleConnexion.php"><button class="buttons">nouvelle connexion</button></a></p>
    
</div>
</form>
    </body>
</html>