<html>
    <head><link rel="stylesheet" href="payement.css"></head>
    <body>
       
        <?php
$id_produite=$_GET['id'];
include("testeconexion.php");
$res=$con->query("SELECT * FROM produite WHERE id_produite=$id_produite");
$produit=$res->fetch_assoc();
$prix=$produit['prix_prod'];
?>

 <?php
        if(isset($_POST["envoyer"]))
        {
            if(empty($_POST["number"])||empty($_POST["nom"])||empty($_POST["prenom"])||empty($_POST["adress"])||empty($_POST["tel"])||empty($_POST["wilaya"]))
            {
                echo "<p id='failed'>complet les champ</p>";
            }
            else{
                $quantity=$_POST["number"];
                $nom=$_POST["nom"];
                $prenom=$_POST["prenom"];
                $adress=$_POST["adress"];
                $tel=$_POST["tel"];
                $wilaya=$_POST["wilaya"];

                include("testeconexion.php"); 
                $res=$con->query("INSERT INTO client(nom,prenom,adress,tel,wilaya) VALUES('$nom','$prenom','$adress','$tel','$wilaya')");

$id_client=$con->insert_id;
$somme=$prix*$quantity;
$r=$con->query("INSERT INTO commande(id_client,id_produite,prixTotale) VALUE('$id_client','$id_produite','$somme')");
echo "<p id='success'>evoyer de commande success</p>";
            }
            
        }
        ?>

<h1>payement</h1>
<form method="POST" action="">
<div id="produite">
<div id="photo">
<img src="imagesVetements/<?php echo $produit['image'] ?>">
</div>
<div id="produitInformation">
<p id="nom"><?php echo $produit['nom_prod'] ?></p>
<p id="prix">prix: <?php echo $produit['prix_prod'] ?>DA</p>
<p id="quantity">quantity: <input id="compteur" type="number" name="number"></p>
<p id="somme">somme: 0 DA</p>
</div>
</div>

<div id="clientInformation">
    <h2>entrer votre information</h2>
<p class="informationClient">nom: <input class="inputInformationClient" type="text" name="nom"></p>
<p class="informationClient">prenom: <input class="inputInformationClient" type="text" name="prenom"></p>
<p class="informationClient">adress: <input class="inputInformationClient" type="text" name="adress"></p>
<p class="informationClient">num-tel: <input class="inputInformationClient" type="text" name="tel"></p>
<p class="informationClient">la wilaya: <select id="wilaya" name="wilaya">
  <option value="">Choisissez votre wilaya </option>
  <option value="01">01 - Adrar</option>
  <option value="02">02 - Chlef</option>
  <option value="03">03 - Laghouat</option>
  <option value="04">04 - Oum El Bouaghi</option>
  <option value="05">05 - Batna</option>
  <option value="06">06 - Béjaïa</option>
  <option value="07">07 - Biskra</option>
  <option value="08">08 - Béchar</option>
  <option value="09">09 - Blida</option>
  <option value="10">10 - Bouira</option>
  <option value="11">11 - Tamanrasset</option>
  <option value="12">12 - Tébessa</option>
  <option value="13">13 - Tlemcen</option>
  <option value="14">14 - Tiaret</option>
  <option value="15">15 - Tizi Ouzou</option>
  <option value="16">16 - Alger</option>
  <option value="17">17 - Djelfa</option>
  <option value="18">18 - Jijel</option>
  <option value="19">19 - Sétif</option>
  <option value="20">20 - Saïda</option>
  <option value="21">21 - Skikda</option>
  <option value="22">22 - Sidi Bel Abbès</option>
  <option value="23">23 - Annaba</option>
  <option value="24">24 - Guelma</option>
  <option value="25">25 - Constantine</option>
  <option value="26">26 - Médéa</option>
  <option value="27">27 - Mostaganem</option>
  <option value="28">28 - M'Sila</option>
  <option value="29">29 - Mascara</option>
  <option value="30">30 - Ouargla</option>
  <option value="31">31 - Oran</option>
  <option value="32">32 - El Bayadh</option>
  <option value="33">33 - Illizi</option>
  <option value="34">34 - Bordj Bou Arréridj</option>
  <option value="35">35 - Boumerdès</option>
  <option value="36">36 - El Tarf</option>
  <option value="37">37 - Tindouf</option>
  <option value="38">38 - Tissemsilt</option>
  <option value="39">39 - El Oued</option>
  <option value="40">40 - Khenchela</option>
  <option value="41">41 - Souk Ahras</option>
  <option value="42">42 - Tipaza</option>
  <option value="43">43 - Mila</option>
  <option value="44">44 - Aïn Defla</option>
  <option value="45">45 - Naâma</option>
  <option value="46">46 - Aïn Témouchent</option>
  <option value="47">47 - Ghardaïa</option>
  <option value="48">48 - Relizane</option></select></p>
</select>
</div>
<p id="buttoncenter"><input type="submit" value="envoyer la commande" name="envoyer" id="envoyer"></p>
</form>
    </body>
    <script>
    let prix=<?php echo $produit['prix_prod'] ?>;
    let quantity=document.getElementById("compteur");
    let sommePrix=document.getElementById("somme");
quantity.addEventListener("input",function(){
let somme=parseInt(quantity.value)*prix;

sommePrix.textContent="somme: "+somme+" DA";
})

    </script>
    </html>
