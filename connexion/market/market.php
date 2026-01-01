<?php
session_start();
$name=$_SESSION['user'];
?>
<html>
    <head><link rel="stylesheet" href="market.css"></head>
    <body>
        <?php
        include("entete.html");
        echo "bonjour $name";
        ?>
    <div id="vide"></div>
<?php
//echo"<h1>bienvenu mr $name</h1>";
?>
<div class="photos"><img class="img1" src="images/fashion-set-young-boy.jpg"> </div></div>
<div class="photos"><img class="img1" src="images/top-view-composition-different-traveling-elements.jpg"> </div>
<div id="a"><p id="p1">click moi -_-</p></div>
 <div class="photosolo"><img class="img1" src="images/top-view-composition-different-traveling-elements.jpg"> </div>
<div class="photos"><img class="img1" src="images/bel-homme-portant-lunettes-soleil-debout-mur-gris_171337-14983.jpg"> </div>
<div class="photos"><img class="img1" src="images/fashion-portrait-young-beautiful-man.jpg"> </div>
      <?php
        include("help.html");
        ?>
</body>
</html>
