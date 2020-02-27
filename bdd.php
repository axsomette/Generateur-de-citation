<?php


error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


$host = 'db5000272972.hosting-data.io';
$user = 'dbu344384';
$password = 'Lucas11&';
$dbname = 'dbs266433';



try
{
  
    $bdd = new PDO('mysql:host=db5000272972.hosting-data.io;dbname=dbs266433;charset=utf8', 'dbu344384', 'Lucas11&');
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

