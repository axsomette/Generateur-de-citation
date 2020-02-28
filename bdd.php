<?php


error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


$host = '';
$user = '';
$password = '';
$dbname = '';



try
{
  
    $bdd = new PDO('mysql:host=;;charset=utf8', '', '');
}
catch(Exception $e)
{
    
        die('Erreur : '.$e->getMessage());
}
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 


$reponse = $bdd->query("SELECT * FROM citation ORDER BY RAND() LIMIT 1");



while ($row = $reponse->fetch()){

    echo $row['citations'];?>
    <br>
    <hr width=50%>
    <?php
    echo $row['auteurs'];
}
?>

