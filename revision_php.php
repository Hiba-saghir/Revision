
<?php
//1
/* echo "Q1: <br>";
$tab = array ("nom" => "Hiba" , "prenom" => "SAGHIR" , "matricule" => "20002_SH");
foreach($tab as $key => $v)
{
    echo $key." : ".$v."<br>";
}
echo "<hr>"; */


//2
/* echo "<br>Q2: <br>";
$tab = array ("nom" => "Hiba" , "prenom" => "SAGHIR" , "matricule" => "20002_SH","note"=>18);
$tab["note"]=20;
foreach($tab as $key => $v)
{
    echo $key." : ".$v."<br>";
}
echo "<hr>"; */



//3
/* echo "<br>Q3: ";
$produits = ["produit1" => ["nom" =>"iphone 15 pro" , "prix" =>"90000"],
             "produit2" => ["nom" =>"samsung A72" , "prix" =>"4000"],
             "produit3" => ["nom" =>"iphone 11" , "prix" =>"3000"]];

foreach($produits as $key => $value)
{   
    echo "<br>".$key." : " ;
    foreach($value as  $k => $v)
    {
     echo "<br>";
     echo $k." : ".$v;
    }
}
echo "<hr>"; */


//4
/* echo "<br> Q4: <br>";

$scores = array (19,10.5,18,7.5,16);
$s=0;
foreach($scores as $v)
{
        $s += $v; 
    
    
}
echo "la moyenne : ".$s/5;
echo "<hr>"; */


//5
/* echo "<br> Q5: <br>";

$pays = ['Maroc' => 36000000,
          'france' => 67000000,
          'Espagne' => 47000000];
echo "<br>tableau normale : <br>";
foreach($pays as $key => $value)
{
      echo "<br>";
      echo $key." : ".$value ;
}

rsort($pays);
echo " <br><br> tableau en ordre decroissant : <br>";

foreach($pays as $key => $value)
{
      echo "<br>";
      echo $key." : ".$value ;
} */

/* echo "<hr>"; */


/* //6
echo "Q6:<br>";
if(isset($_POST["submit"]))
{
    echo "Bienvenue, ".$_POST["nom"].", vous avez ".$_POST["age"]."ans!";
}

echo "<hr>";


//7
echo "Q7:<br>";

if(isset($_POST["submit"]))
{
    //Pour convertir la valeur en int
    $age = (int)$_POST["age"]; 
    if( is_int($age) && $_POST["age"]>0 )
    {
        echo "Bienvenue, ".$_POST["nom"].", vous avez ".$_POST["age"]."ans!";
    }
    else
    {
        echo "La validation echoue" ;
    }
} */

/* echo "<hr>"; */


//8
/* echo "Q8:<br>";

if(isset($_POST['submit']))
{
    echo "Votre couleur préférée est : ".$_POST['select'];
}

echo "<hr>";
 */


//9
/* echo "Q9:<br>";

if(isset($_GET['button']))
{
  echo "la somme : ".$_GET['num1']+$_GET['num2'];
}

echo "<hr>"; */


//10
/* echo "Q10:<br>";

if(isset($_POST['button10']))
{
    echo "Bienvenue ".$_POST['choix'];
}
 */
?>