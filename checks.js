// Form first name length validation

var firstNameElement = document.getElementById("firstName");

var aideFNE = document.getElementById("aideFirstName");		

firstNameElement.addEventListener("input", function(e){
var fne = e.target.value; // Value typed in the first Name field
var longueurChamp = "ok";
var couleurMsg = "green"; // Length ok less than 10 => green color
	if (fne.length > 20) {
	longueurChamp = "please type shorter name!";
	couleurMsg = "red"; // Longueur suffisante => couleur verte
	}
							   
	    aideFNE.textContent = "Longueur : " + longueurChamp; // Texte de l'aide
	    aideFNE.style.color = couleurMsg; // Couleur du texte de l'aide
	});


						
// Form last name length validation

						
var lastNameElement = document.getElementById("lastName");

var aideLNE = document.getElementById("aideLastName");

lastNameElement.addEventListener("input", function(e){
	var lne = e.target.value; // Value typed in the first Name field
	var longueurChamp = "ok";
	var couleurMsg = "green"; // Length ok less than 10 => green color
		if (lne.length > 20) {
			longueurChamp = "please type shorter name!";
			couleurMsg = "red"; // Longueur suffisante => couleur verte
		}
														   
	aideLNE.textContent = longueurChamp; // Texte de l'aide
	aideLNE.style.color = couleurMsg; // Couleur du texte de l'aide
	});


// form email length validation

					
var courrielElement = document.getElementById("courriel");

var aideCourrielElt = document.getElementById("aideCourriel");

	courrielElement.addEventListener("input", function(e){
		var ce = e.target.value; // Value typed in the first Name field
		var longueurChamp = "ok";
		var couleurMsg = "green"; // Length ok less than 10 => green color
			if (ce.length > 30) {
				longueurChamp = "please type shorter email!";
				couleurMsg = "red"; // Longueur suffisante => couleur verte
			}
														   
		aideCourrielElt.textContent = longueurChamp; // Texte de l'aide
		aideCourrielElt.style.color = couleurMsg; // Couleur du texte de l'aide
			});




// Contrôle du courriel en fin de saisie
document.getElementById("courriel").addEventListener("blur", function (e) {
    // Correspond à une chaîne de la forme xxx@yyy.zzz
    var regexCourriel = /.+@.+\..+/;
    var validiteCourriel = "";
    if (!regexCourriel.test(e.target.value)) {
        validiteCourriel = "Adresse invalide";
    }
    document.getElementById("aideCourriel").textContent = validiteCourriel;
});	

// 	form text message length validation

var textElement = document.getElementById("textMessage");

var aideTextMessageElt = document.getElementById("aideTextMessage");

							textElement.addEventListener("input", function(e){
								var tme = e.target.value; // Value typed in the first Name field
								var longueurChamp = "ok";
								var couleurMsg = "green"; // Length ok less than 10 => green color
								if (tme.length > 400) {
								longueurChamp = "Thanks, but please write shorter text!";
								couleurMsg = "red"; // Longueur suffisante => couleur verte
								}
														   
								aideTextMessageElt.textContent = longueurChamp; // Texte de l'aide
								aideTextMessageElt.style.color = couleurMsg; // Couleur du texte de l'aide
								});


				

// 	form checkbox validation of consent of data protection privacy policy


/*
var checkboxElt = document.getElementById("case");

var aideCaseElt = document.getElementById("aideCase");









var form = document.querySelector("form");

	form.addEventListener("submit", function(){

		checkboxElt.addEventListener("change", function(e){

								console.log("taper ou pas taper: " + e.target.value);

								if(e.target.value === "on"){
													
								aideCaseElt.textContent = "c'est bon, c'est ticker";

															};


		
		

	});


*/
					





	