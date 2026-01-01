<?php
 include("testeconexion.php");
$res=$con->query("SELECT * FROM produite");
$produits=[];
while($row=$res->fetch_assoc())
{
  $produits[]=[
    'id'=>$row["id_produite"],
     'nom'   => $row['nom_prod'],
        'prix'  => $row['prix_prod'],
        'image' => $row['image']
  ];
 
}
        header('Content-Type: application/json');
echo json_encode($produits);           
            ?>
