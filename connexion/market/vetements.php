<html>
    <head> <link rel="stylesheet" href="vetements.css"></head>
    <body>
        <?php include("entete.html");?>
        <?php
        include("testeconexion.php");
        ?>
        <div id="container"></div>
          <script>
            let produits={};
            fetch("getVetements.php")
            .then(function(res)
        {
            return res.json();
        })
        .then(data=>{
            produits=data;
            container=document.getElementById("container");
            container.innerHTML="";
            for(let i=0;i<produits.length;i++)
            {
let p=produits[i];
container.innerHTML=container.innerHTML+`<a href='payement.php?id=${p.id}' class='div1'>
                    <img id='imgdiv' src='imagesVetements/${p.image}'>
                    <p id='p1'>${p.nom}</p>
                    <p id='p2'>${p.prix} DA</p>
                    </a>`
            }
        })
        .catch(err => console.error("Erreur fetch:", err));
            </script>
        <?php
include("help.html");
?>
</body>
    </html>