<!DOCTYPE html>

<html>

<head>
		<meta charset = "utf-8"/>

		<link rel="stylesheet" media="screen and (min-width: 1025px)" href="style1.css"/>  

		<link rel="stylesheet" media="screen and (max-width: 1024px)" href="petite_resolution.css"/>

		<title> Thomas Gué CV </title>

</head>



<body id="contact">

	

	

		
<?php include("menu.php"); ?>

				

	

	<section id="containerContact">

		<div id="containerGaucheContact">

	    
        <article class="artContact">
        
            <h1> Contact me </h1>

            <div class="plsContact">
            
            	<p> Should you have any enquiries, please let me know and I will get back to you as soon as possible</p>
                
                <p>
            	Flottwellstrasse 21<br>   
				10785 Berlin<br>  
				Germany <br>  
				+49 (0) 15 20 400 8767<br> 
         
                </p>
                
          				
			    <p>
                email me at <a href="mailto:thomasgue77@gmail.com" id="email"> thomasgue77@gmail.com </a> 
                <br>
                <br>
                or
                </p>
         
                <p> please complete the online form below:</p>

            </div>    

	        <form method="post" action="">

	        	

	        	<p>
				<input type="text" id="firstName" name="firstName" placeholder="your first name" style="background-color: rgb(255, 234, 241);">
				<!-- <label for="user_name">your first name</label> -->
				<span id="aideFirstName"> </span>

				</p>
						
				<p>
				<input type="text" id="lastName" name="lastName" placeholder="your last name" 
				style="background-color: rgb(255, 234, 241);">
				<!-- <label for="user_name">your last name</label> -->
				<span id="aideLastName"> </span>
				</p>  

				<span id="aideLastName"></span>


				<p>
		        <!-- <label for="courriel">your email</label>  -->
		        <input type="email" name="courriel" id="courriel" placeholder="your email"
		        style="background-color: rgb(255, 234, 241);">
		        <span id="aideCourriel"> </span>
		       	</p>

		       	


		       	<p>
		       	<textarea type="text" name="message" id="textMessage" placeholder="your message" rows="5" cols= "50" style="background-color: rgb(255, 234, 241);">  
		       	</textarea> 
		       	<span id="aideTextMessage"> </span>	
		       	</p>

		       	<p>
		       	<input type="checkbox" name="case" id="case" /> <label for="case"> Es gilt die <a href="dataprotection.php"> Datenschutzerklärung </a> </label>
		       	<span id="aideCase"> </span>	
		       	</p>

				<input type="submit" name="submit" id="submitB" placeholder="please submit" 
				style="background-color: rgb(255, 234, 241);">

	        </form>


			<?php

					if(isset($_POST['submit'])){


						if(isset($_POST['firstName']) 
							AND isset($_POST['lastName']) 
							AND isset($_POST['courriel']) 
							AND isset($_POST['message']) 
							AND isset($_POST['case'])
							AND $_POST['firstName']!="" 
							AND $_POST['lastName']!="" 
							AND $_POST['courriel']!="" 
							AND $_POST['message']!="" 
							AND strlen($_POST['firstName'])<20
							AND strlen($_POST['lastName'])<20
							AND strlen($_POST['courriel'])<50
							AND strlen($_POST['message'])<400 
							)
						{	
								$_POST['courriel']=htmlspecialchars($_POST['courriel']);
								if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['courriel']))
										{

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


											
														$req->execute(array(



																'firstName' => htmlspecialchars($_POST['firstName']),
																'lastName' => htmlspecialchars($_POST['lastName']),
																'email' => htmlspecialchars($_POST['courriel']),
																'message' => htmlspecialchars($_POST['message'])

															));

														echo 'Thanks for your message, ';
														echo htmlspecialchars($_POST['firstName']);
														echo  ', I\'ll be coming back to your shortly !';

										}else{echo 'Please fill up valid email';}			

											
						}else{

							echo 'Please fill up the missing data';
						}

					}

			?>

            
        </article>

    	</div>

    	<div id="containerDroitContact">

    		<figure class="grandePix">
				
			<img src="images/mobile.jpg" alt="mobile" title="communication tools">

			</figure>

			



    	</div>	


	</section>
    
    


<script type="text/javascript" src="checks.js"></script> 
		

</body>

</html>