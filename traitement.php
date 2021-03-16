

<?php

try
{

		$bdd = new PDO('mysql:host=localhost; dbname=site; port=3308; charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		//$bdd-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$req = $bdd-> prepare('INSERT INTO contact(firstName, lastName, email, message) VALUES(:firstName, :lastName, :email, :message)');


try
{

			$req->execute(array(



					'firstName' => $_POST['firstName'],
					'lastName' => $_POST['lastName'],
					'email' => $_POST['courriel'],
					'message' => $_POST['message']

				));

			echo 'Le contact a bien été ajouté !';

}

catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}






$reponse = $bdd->query('SELECT * FROM contact');



while ($donnees = $reponse->fetch())
{

	?>
	<p>
		<strong>Message</strong>: <?php echo $donnees['message']; ?> <br/>

		Le prénom de l'auteur de ce message est : <?php echo $donnees['firstName']; ?>, et son nom est : <?php
		echo $donnees['lastName']; ?>
		<br/> L'email de cette personne est : <?php echo $donnees['email']; ?>
	</p>

	<?php
}


$reponse-> closeCursor();


?>