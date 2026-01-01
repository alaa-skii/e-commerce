<?php session_start(); ?>
<html>
<head><link rel="stylesheet" href="verification.css"></head>
<body>
<h1>la verification</h1>
<div id="div1">
<?php

$test=false;
$email=$_POST['email'];
$mtps=$_POST['mtps'];
include("testeconexion.php");
include("selecte.php");
if($res->num_rows>0)
{
    while($table=$res->fetch_assoc())
    {
        if($table['email']==$email && $table['password']==$mtps )
        {

$test=true;
$_SESSION['user'] = $table['nom'];/////////////////////////////////////////////////////////////////////////////////////////////////////mohima
        $_SESSION['id']=$table['id'];
        }
    }
}else{
    die("<span> desoler nous avons pauser le travailler maintenant</span>");
    
}
if($test==false)
{
echo(" <span>vieulliez creer un compte </span>");
}else{
    $name=$_SESSION['user'];
    echo("<span> BONJOUR <span> $name clicker a cette lien pour acceder a votre cite:");
    echo'<br><a href="home.php"> go</a>';
}
?>
</div>
</body>
</html>