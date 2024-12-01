<?php

//1

/*  
$tab = array(
'EMP1' => array('nom'=>'Ahmed','poste' => 'Développeur web' ,'salaire'=> 3500 ),
'EMP2' => array('nom'=>'Ali','poste' => 'Chef de projet' ,'salaire'=> 5000 ),
'EMP3' => array('nom'=>'Ghita','poste' => 'Responsable marketing' ,'salaire'=> 3800 ),
'EMP4' => array('nom'=>'Oussama','poste' => 'Designer graphique ' ,'salaire'=> 3700 ),
'EMP5' => array('nom'=>'Hiba','poste' => 'Analyste des données' ,'salaire'=> 4000 )
); */

/* foreach($tab as $key => $value)
{
    echo " <br>$key :";
    foreach($value as $k => $v)
    {
        echo " <br> $k = $v .";
    }
}
 */
/* function moyen($tab)
{
   $somme = 0;

   foreach($tab as $emp)
   {
    $somme += $emp['salaire'];
   }
   return $somme;
}
 */
//echo '<br>le salaire moyen est :'. moyen($tab)/5 ;


//2

/* if(isset($_POST['submit']))
{
    $cpt = 0;
    foreach($tab as $value)
    {   
        if($_POST['emp'] == $value['nom'] )
        {
            $cpt++;
            foreach($value as $key => $v)
            {
                echo " <br>$key = $v";
            }
        }
    }
    if($cpt == 0){echo "<br>Employé n'existe pas" ;}
}
 */

//3

/*$ users = [
    [
        'email' => 'hiba@gmail.com',
        'password' => 'hiba123'
    ],
    [
        'email' => 'salma@gmail.com',
        'password' => 'salma123'
    ],
    [
        'email' => 'othmane@gmail.com',
        'password' => 'othmane123'
    ],
    [
        'email' => 'oussama@gmail.com',
        'password' => 'oussama123'
    ],
    [
        'email' => 'nouhaila@gmail.com',
        'password' => 'nouhaila123'
    ]
];

if(isset($_POST['button']))
{
    $cpt = 0;
    foreach($users as $user)
    {
        if($_POST['email'] == $user['email'] && $_POST['password'] == $user['password'])
        { 
            $cpt++;
                echo "Utilisateur enregistré !!" ;
        }
    }
    if($cpt == 0)
    {
        echo "Utilisateur n'est pas enregistré !!" ;
    }
} */


//4

/*  session_start();

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = []; 
}
if(isset($_POST['total']))
{

    $_SESSION['panier'][] = [
        'nom' => trim($_POST['nom']),
        'quantite' => $_POST['quantite'] ,
        'prix' => $_POST['p']
    ];

  $somme = 0;
  foreach($_SESSION['panier'] as $value)
  {
    $somme += $value['prix']*$value['quantite'];
  }

echo 'le total du panier :'. $somme; 

} */
 
 //5

/* session_start();

if (!isset($_SESSION['commentaires'])) {
    $_SESSION['commentaires'] = []; 
}

if(isset($_POST['submit']))
{
    $cmt = trim($_POST['cmt']);//pour enlevez les espaces debut et fin
    $horodatage = date('d-m-Y H:i:s');
     
    $_SESSION['commentaires'][] = [
        'commentaire' => $cmt ,
        'horodatage' => $horodatage 
    ];
    
}

/*   foreach($_SESSION['commentaires'] as $key => $value)
{
    foreach($value as $k => $v)
    {
         echo "<br> $k : $v";
    }
}   */

/* foreach ($_SESSION['commentaires'] as $v) {
    echo 'Commentaire : ' . $v['commentaire'] . '<br>';
    echo 'Horodatage : ' . $v['horodatage'] . '<br><br>';
} 
  */

//6

/* $meteo = [
    [
        'ville' => 'Casablanca',
        'temperature' => 23
    ],
    [
        'ville' => 'Rabat',
        'temperature' => 21
    ],
    [
        'ville' => 'Marrakech',
        'temperature' => 35
    ],
    [
        'ville' => 'Tanger',
        'temperature' => 25
    ]
];

function temp_plus_élevée($meteo)
{
    // pour stocker la premiere value
     $max = [
        'temperature'=> $meteo[0]['temperature'],
        'ville'=> $meteo[0]['ville']
    ];

    for ($i=1; $i <sizeof($meteo); $i++) { 
        if($meteo[$i]['temperature'] > $max['temperature'])
      {
        $max = [
            'temperature'=> $meteo[$i]['temperature'],
            'ville'=> $meteo[$i]['ville']
        ];
      }
    }

   echo "Ville : ".$max['ville']."<br>";
   echo " Temperature :". $max['temperature'];
   
}

temp_plus_élevée($meteo); */

//7
/* 
$products = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['csv_file'])) {

$file = $_FILES['csv_file']['tmp_name'];

if (($fichier = fopen($file, 'r')) !== FALSE) {
    $tete = fgetcsv($fichier); 

    if ($tete && $tete === ['nom', 'prix', 'quantité']) {
        while (($data = fgetcsv($fichier)) !== FALSE) {
            $product = array_combine($tete, $data);
            $products[] = $product;
        }
    }

    else {
        echo "Les en-têtes du fichier ne correspondent pas aux attentes.";
    }
    fclose($fichier);
} 

else {
    echo "Erreur lors de l'ouverture du fichier.";
}
}

if (!empty($products)): ?>
    <h2>Données des produits</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['nom']); ?></td>
                    <td><?php echo htmlspecialchars($product['prix']); ?></td>
                    <td><?php echo htmlspecialchars($product['quantité']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?> */

//8

/* $produits = [
 [
    'nom' => 't-shirt',
    'prix' => 100
 ],
 [
    'nom' => 'robe',
    'prix' => 200
 ],
 [
    'nom' => 'casquette',
    'prix' => 80
 ]
];

if(isset($_POST['submit']))
{
    $total = 0;
    $tab = $_POST['produit'];
    echo "Les produits :<br>";
    for($i=0 ; $i<sizeof($tab) ; $i++)
    {
        foreach($produits as $value)
        {
            if($tab[$i] == $value['nom'])
            {
                echo $value['nom'].'<br>';
                $total += $value['prix'];
            }
        }
    }
    echo "Total : $total";
}  */


//9//10

 session_start();
if (!isset($_SESSION['etudiants'])) {
    $_SESSION['etudiants'] = []; 
}

function  afficher($tab)
{
      foreach($_SESSION['etudiants'] as  $value)
  {
    echo "<br>";
    echo "Nom :". $value['Nom'];
    echo "<br>";
    echo "Annee:". $value['Annee'];
    echo "<br>";
    echo 'Sa moyenne : '.($value['SQL']+$value['C++']+$value['PHP'])/3;
    echo "<br>";
  }
}


if(isset($_POST['Ajouter']))
{
  $_SESSION['etudiants'][]=[
    'Nom' => trim($_POST['nom']),
    'Annee' => $_POST['annee'],
    'SQL' => $_POST['noteS'],
    'C++' => $_POST['noteC'],
    'PHP' => $_POST['noteP']
  ];
  afficher($_SESSION['etudiants']);
}

if(isset($_POST['Supprimer']))
{
    $name = $_POST['nom'];
    
    foreach ($_SESSION['etudiants'] as $key => $value) {
        if ($value['Nom'] === $name) {
            unset($_SESSION['etudiants'][$key]);
        }
    }
    $_SESSION['etudiants'] = array_values($_SESSION['etudiants']);
    
    afficher($_SESSION['etudiants']);
} 

if(isset($_POST['Modifier']))
{
    $name = $_POST['nom'];

    foreach ($_SESSION['etudiants'] as $key => $value) {
        if ($value['Nom'] === $name) {
            $_SESSION['etudiants'][$key]['Annee'] = $_POST['annee'];
            $_SESSION['etudiants'][$key]['SQL'] = $_POST['noteS'];  
            $_SESSION['etudiants'][$key]['C++'] = $_POST['noteC']; 
            $_SESSION['etudiants'][$key]['PHP'] = $_POST['noteP'];        
            break; 
        }
    }
    afficher($_SESSION['etudiants']);
}

if(isset($_POST["afficher"]))
{
    afficher($_SESSION['etudiants']);
}









