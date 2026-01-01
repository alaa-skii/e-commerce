<?php
session_start();
$name=$_SESSION['user'];
?>
<html>
<head><link rel="stylesheet" href="contacter.css"></head>
    <body>
<?php
if(isset($_POST['submit']))
{
    $com=$_POST['commenter'];
    include("testeconexion.php");
    $sql=("INSERT INTO commenteur(nom,commenter)VALUES('$name','$com')");
    $res=$con->query($sql);
}
?>

    <div id="diventete">
    <h1>bonjour mr <?php echo"$name" ?>merci pour la visite de cite &#128512; </h1>
    <h1>mon numero telephone: 0781864573</h1>
    <h1>mon prenom: mohammed alaa</h1>
    <form method="post" action="">
    <p>entrer votre commentaire sur le site  : &#8595;&#8595;&#8595;</p>
    
    <textarea rows="10" cols="60" id="commenter" name="commenter" placeholder="commenter"></textarea>
    <input type="submit" name="submit" value="envoyer" id="submit">
    
</form>

<img src="Engage Social Media GIF.gif">

</div>
</body>
</html>