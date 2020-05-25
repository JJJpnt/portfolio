<?php

if (!isset($_POST['envoi']))
	{
		// formulaire non envoyé
		echo '<p>Erreur.</p>';
	}
else
	{
		$tip_titre		= 	(isset($_POST['tip_titre'])?$_POST['tip_titre']:"/// Pas de Titre ///");
		$tip_contenu	= 	(isset($_POST['tip_contenu'])?$_POST['tip_contenu']:"/// Pas de Contenu ///");

	  echo 'Insérer :<br>Titre : '.$_POST['tip_titre'].'<br>Contenu : <br>'.nl2br($_POST['tip_contenu']);
	}

// SQL Job

$servername = "db5000303641.hosting-data.io";
$username = "dbu526577";
$password = "4bWm8Z/(";
$dbname = "dbs296628";

// $servername = "127.0.0.1";
// $username = "phpmyadmin";
// $password = "simplon3";
// $dbname = "phpmyadmin";

$table = "portfolio_tips";


// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$sql = 'INSERT INTO '.$table.' (tip_titre, tip_contenu) VALUES ("'.$tip_titre.'", "'.$tip_contenu.'")';

echo "REQUETE : ".$sql;


try
	{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<br><br>Connecté au serveur SQL.";

		$conn->beginTransaction();

		$conn->exec($sql);
		$conn->commit();

		echo "<br>Message bien enregistré dans la DB.";
  }
catch(PDOException $e)
  {
		$conn->rollback();
  	echo "Erreur : " . $e->getMessage();
  }


// if ($conn->query($sql) === TRUE) {
//     echo "Message bien enregistré dans la DB.";
// } else {
//     echo "ErreurrRrrRrrr : " . $sql . "<br>" . $conn->error;
// }

$conn = null;

// Fin SQL JOB

?>
