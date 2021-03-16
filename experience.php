<!DOCTYPE html>

<html>

<head>
		<meta charset = "utf-8"/>

		<link rel="stylesheet" media="screen and (min-width: 1025px)" href="style1.css"/> 

		<link rel="stylesheet" media="screen and (max-width: 1024px)" href="petite_resolution.css"/>

		<title> Thomas Gué CV </title>

</head>



<body id="experience">

	

	<?php include("menu.php"); ?>


    
    <section id="contenaireExperience">

		<div id="contenaireGauche">

		    <section id = "experience">

			

				<h1> Financial Accounting and Payroll Accounting </h1>



				<script type="text/javascript">


					var couleurFond = "rgb(255, 239, 232)";
					var couleurFondFonce = "rgb(255, 192, 166)";
					


					var couleurJobEfface = "rgb(247, 223, 223)";
					var couleurJobVu = "rgb(234, 179, 179)";
					var couleurJobNormal = "rgb(104, 0, 0)";


					function colorJob(titre){

						document.getElementById(titre).style.color = couleurJobVu;

						document.getElementById(titre).addEventListener("mouseleave", function(e){

							e.target.style.color = couleurJobNormal;

						})

					}


					function clickCompany(numero)
			            	{

			            		var chiffre = 0;

			            		switch(numero){

			            			case("1"):
			            				chiffre = 1;
			            				break;

			            			case("2"):
			            				chiffre = 2;
			            				break;

			            			case("3"):
			            				chiffre = 3;
			            				break;

			            			case("4"):
			            				chiffre = 4;
			            				break;

			            			case("5"):
			            				chiffre = 5;
										break;

									case("6"):
										chiffre = 6;
										break;

									case("7"):
										chiffre = 7;
										break;

									case("8"):
										chiffre = 8;
										break;

									case("9"):
										chiffre = 9;
										break;

									case("10"):
										chiffre = 10;
										break;

									case("11"):
										chiffre = 11;
										break;

									case("12"):
										chiffre = 12;
										break;

									case("13"):
										chiffre = 13;
										break;

									case("14"):
										chiffre = 14;
										break;

									case("15"):
										chiffre = 15;
										break;

									case("16"):
										chiffre = 16;
										break;					

			            		}


			            		if(document.getElementById(numero).style.display == "none")
			            		{
		            				document.getElementById(numero).style.display = "block";

		            				document.getElementById("titre"+numero).style.fontSize = "1.2em";
		            				document.getElementById("titre"+numero).style.color = couleurJobNormal;


		            				for(let i=(chiffre+1); i<(chiffre+5); i++){

		            					document.getElementById(""+ i).style.display = "none";
		            				}
		            			
		            				for(let i=(chiffre+1); i<17; i++){

		            				document.getElementById("titre"+ i).style.color = couleurJobEfface;

		            				}

		            			

		            				document.getElementById(numero).style.backgroundColor = couleurFondFonce;
		            				document.getElementById("titre"+ numero).style.backgroundColor = couleurFondFonce;

		            				document.getElementById(numero).style.boxShadow = "2px 2px 2px rgb(255, 166, 128)";
		            			

			            		} 
			            		else if (document.getElementById(numero).style.display == "block")
			            		{
		            				document.getElementById(numero).style.display ="none";

		            				document.getElementById("titre"+ numero).style.color = couleurJobNormal;
		            				document.getElementById("titre"+ numero).style.fontSize = "0.8em";


		            				for(let i=(chiffre+1); i<(17); i++){

		            				document.getElementById("titre"+ i).style.color = couleurJobNormal;

		            				}

		            			
		            				document.getElementById("titre"+ numero).style.backgroundColor = couleurFond;

		            				document.getElementById(numero).style.boxShadow = "";
		            			

			            		}
			            		
			            		

			            		document.getElementById(numero).addEventListener("mouseleave", function(e){
			            			e.target.style.display = "none";
			            			
			            			document.getElementById("titre"+ numero).style.color = couleurJobVu;
			            			document.getElementById("titre"+ numero).style.fontSize = "0.8em";


			            			for(let i=(chiffre+1); i<17; i++){

			            				document.getElementById("titre"+i).style.color = couleurJobNormal;
			            			}	

					       			document.getElementById("titre"+ numero).style.backgroundColor = couleurFond;

			            			document.getElementById(numero).style.boxShadow = "";
		            				
			            		});
			            		
			            	}
		            

				</script>	

						

				<article>
					<h2 class= "job" onclick = "clickCompany('1')" onmouseover= "colorJob('titre1')" id="titre1"> Financial Accountant, GEFCO - Paris, France </h2>


						<div id="1" style = "display: none">

							<p class= "descr"> Financial accounting role in an IFRS GAAP reporting environment </p>
							<p class="syst"> System : SAP </p>
							<p class= "date"> Jan 18 – Apr 18 </p>
							<p class= "contract"> temporary </p>

						</div>	
					
					
				</article>	

				

				

					
				<article> 

					<h2 class="job" onclick ="clickCompany('2')" onmouseover="colorJob('titre2')" id="titre2"> Accountant, ADITEC (accounting practice) - Paris, France </h2>
					

					<div id= "2" style= "display: none">
					
						<p class= "descr"> Accountancy software migration, from SILAE to ACD </p>
		            
		                <p class= "date"> Nov 17 – Dec 17 </p>

		            </div>

				</article>

			

				<article> 

					<h2 class="job" onclick="clickCompany('3')" onmouseover="colorJob('titre3')" id="titre3"> Payroll Accountant, AFIGEC - Levallois-Perret, France </h2>

					<div id="3" style="display: none">
							
						<div class="descr"> 
							<p>
							In this accounting practice, key tasks include: 
							</p>
							<ul>
							 <li>Input all payroll information </li>
							 <li> controlling payslips and payroll reports </li>
							 <li> tax and contributions returns (DSN) </li>
							 <li> answering payroll queries </li>	
							</ul>
						</div>	
						<p class="syst"> Payroll systems: CEGID, PEGASE </p>
		            
		                <p class= "date"> Nov 16 – Jul 17 </p>
		                <p class= "contract"> permanent </p>

		            </div>    
		  
				</article>

				<article> 

					<h2 class= "job" onclick="clickCompany('4')" onmouseover="colorJob('titre4')" id="titre4"> ACCA studies completed through achievement of final exams </h2>

					<div id="4" style="display: none">

						<p class="descr"> ACCA - Association of Certified Chartered Accountant </p>
		                <p class="date"> Sep 15 – Oct 16 </p>

		            </div>   

				</article>		

				<article> 

					<h2 class= "job" onclick="clickCompany('5')" onmouseover="colorJob('titre5')" id="titre5"> Payroll Accountant, Grant Thornton - Paris, France </h2>

					
					<div id="5" style="display: none">	
						<div class= "descr"> 
							<p>
							In this accounting practice: 
							</p>

							<ul>
							<li> Input payroll information </li>
							<li> controlling payslips </li>
							<li> payroll reports  </li>
							</ul>
						</div>		
						<p class="syst"> Payroll system: CEGID </p>
		            
		                <p class= "date"> Feb 15 – Aug 15 </p>
		                <p class= "contract"> Internship + temp. </p>

		            </div> 


				</article>



				<article> 

					<h2 class= "job" onclick="clickCompany('6')" onmouseover="colorJob('titre6')" id="titre6"> Professional training in Payroll Accounting at IFOCOP - Paris, France </h2>

					<div id="6" style="display: none">
						<p class="descr"> Continuing professional Education in Payroll Accounting, this choice was meant to facilitate my employment in the accounting practice field </p>
		                <p class= "date"> Oct 14 – Feb 15 </p>
		            </div>    

				</article>		

			

				<article> 

					<h2 class= "job" onclick="clickCompany('7')" onmouseover="colorJob('titre7')" id="titre7"> Financial Accountant, Linklaters - Paris, France </h2>

					<div id="7" style="display: none" >

						<div class="descr"> 
							
							<p>
								In this Law firm (80 M EUR p.a. turnover): 
							 	Financial accounting role in an English GAAP reporting environment
							</p>

							<ul>
								<li>Balance sheet reconciliation </li>
								<li> period-end accounting entries: 
									<ul>
										<li>accruals </li>
										<li> payroll cost </li> 
										<li> non-current assets </li>
									</ul> 
								</li>
							</ul>
						</div>	
						<p class="syst"> System : SAP </p>
		                <p class= "date"> Feb 14 – May 14 </p>
					    <p class= "contract"> Temporary </p>

					</div>    

				</article>	

					


				<article> 

					<h2 class= "job" onclick="clickCompany('8')" onmouseover="colorJob('titre8')" id="titre8"> Financial Accountant, Constellium - Paris, France </h2>

						<div id="8" style="display: none ">
					
						<p class="descr"> In this multinational dealing in manufacturing of metals (Turnover 3.6 Bn EUR p.a.): bookkeeping of holding entities and accounting of the refinancing structure (loans, debt and asset) and the investments in subsidiaries
						</p>
						<p class="syst"> System:	SAP </p>
		                <p class= "date"> Mar 13 – Aug 13 </p>

		                </div>


				</article>		
							

				<article> 

					<h2 class="job" onclick="clickCompany('9')" onmouseover="colorJob('titre9')" id="titre9"> Financial Accountant, Electro Medical Systems SA – Nyon, Switzerland </h2>

					<div id= "9" style="display: none">
						<div class="descr"> 
							<p>
							In this company dealing in medical devices (turnover 80 M CHF p.a.): 
							</p>

							<ul>
								<li>	At period-end balance sheet reconciliation </li>
								<li>	Calculation of monthly sales commissions	</li>
								<li>	Posting and administration of inter-company recharges  </li>
								<li>	Preparation of VAT return </li>
								<li>	Preparation of various cost and p/l reporting </li>
								<li>	Inventory accounting (periodic inventory system) </li>
							</ul>
						</div>	
						<p class="syst"> System:	Sage </p>
		                <p class="date"> Feb 12 – Dec 12 </p>
					    <p class="contract"> Temp.</p>
					</div>    

				</article>	


				<article> 

					<h2 class= "job" onclick="clickCompany('10')" onmouseover="colorJob('titre10')" id="titre10"> ACCA studies - 12 out of 14 papers passed </h2>

					<div id= "10" style="display: none">
		            <p class= "date"> Feb 11 – Dec 11 </p>
		            </div>
				</article>


				<article> 

				<h2 class="job" onclick="clickCompany('11')" onmouseover="colorJob('titre11')" id="titre11"> Financial Accountant, Carefusion Switzerland SA – Rolle, Switzerland </h2>

					<div id="11" style="display: none">
						<div class="descr"> 

							<p>
							In the regional parent company of this listed group (Turnover $169 M p.a.): 
							</p>

							<ul>
								<li>	Balance sheet reconciliation, bookkeeping of the cash (cash pool treasury system), posting of the accruals for supply chain costs and prepayments </li> 
								<li>	Applying of period-end accounting procedures on customer billing and stock ledgers (perpetual inventory system) </li>
							</ul>
						</div>	
						<p class="syst"> System:	SAP </p>
		            
		                <p class= "date"> Dec 09 – Jan 11</p>
					    <p class= "contract">Temp.</p>
					</div>    
				</article>

			

				<article>
						
					<h2 class="job" onclick="clickCompany('12')" onmouseover="colorJob('titre12')" id="titre12"> Financial Accountant, Haemonetics SA – Signy, Switzerland </h2>

					<div id="12" style="display: none">	
					
						<div class="descr"> 
							<p>
							In charge of the GL accounting processes of 3 European entities (UK, Czech Rep, Sweden) of this listed company dealing in medical devices. (Turnover Haemonetics UK: £60 M p.a.)
							</p>

							<ul>
								<li> Reporting in US GAAP </li>
								<li> involved in accounts payable and receivable </li> 
								<li> cash </li>
								<li> VAT returns </li> 
								<li> interco reconciliation </li> 
								<li> period-end accounting entries </li>
							</ul>
						</div>	
						<p class="syst"> System: Oracle </p>
		            
		                <p class= "date">Jan 09 – Jul 09</p>

		            </div>        
		            
				</article>	




				<article> 

					<h2 class="job" onclick="clickCompany('13')" onmouseover="colorJob('titre13')" id="titre13"> Financial Accountant, eBay International AG – Bern, Switzerland </h2>

						<div id="13" style="display: none">
							<div class="descr"> 

								<p>
								In charge of the GL accounting processes of 3 European entities . (Turnover eBay France $12 M p.a.)
								</p>

								<ul>
									<li>	Period-end close and reporting in US GAAP </li>
									<li>	Maintenance of GL and period-end accounting entries: non-current assets, cash, prepayments, accruals (admin., marketing and payroll costs) </li>
									<li>	Inter-company cross charges, cost center allocations </li>
									<li>	VAT returns </li>
									<li>	Variance analysis of the balance sheet and p/l (quarter to quarter) </li>
									<li>	Provision of audit evidences to external auditors </li>
									<li>	Preparation and booking of the local entity cost based invoice to the parent entity </li>
								</ul>
							</div>	
							<p class="syst"> System:  SAP </p>
			                <p class= "date"> Jan 07 – Dec 08 </p>
		            	</div>

				</article>		

			
				<article> 

					<h2 class="job" onclick="clickCompany('14')" onmouseover="colorJob('titre14')" id="titre14"> Accountant, Danone Ltd – London, UK 
					</h2>


					<div id="14" style="display: none">
					
						<div class="descr"> 

							<p>
							Assistant financial accountant in the UK subsidiary for dairy products (Turnover UK: £111 M p.a.)
							</p>
						
							<ul>
								<li>	Stock accounting (perpetual inventory system): maintaining proper valuation Reconciling inventory accounts to physical levels </li>
								<li>	Monitoring and reporting wastage, sampling expenses, posting adjustments </li>
								<li>	Managing the intercompany reconciliation of the UK entity within the group </li>
								<li>	VAT Return, Intra-stat return, EC sales list in a Trade in goods within EU environment </li>
							</ul>

						</div>	

						<p class="syst"> System:  SAP </p>
		            
		                <p class= "date"> Oct 04 – Oct 06 </p>

		            </div>    

				</article>		



				<article> 

					<h2 class= "job" onclick= "clickCompany('15')" onmouseover="colorJob('titre15')" id="titre15"> Accountant, Direct Communications Group Media Ltd – Kingston Upon Thames, UK </h2>

					<div id="15" style="display: none">

					
						<div class="descr"> 

							<p>
							Assistant Accountant in this SME dealing in communication and public relations (Turnover: £1.5 M p.a.) Key tasks include: 
							</p>

						
							<ul>
								<li>	Balance sheet reconciliation </li>
								<li>	Bookkeeping of the accounts payable and receivable and bank reconciliation </li>
								<li>	Preparation of reporting: p/l and cash flow statements </li>
								<li>	Period-end accounting entries: accruals, prepayments, non-current assets </li>
								<li>	VAT return </li>
							</ul>

						</div>	
						<p class="syst"> System:  SAP </p>
		                <p class= "date"> June 02 - Sep 04 </p>

		            </div>    
							

				</article>		



				<article> 

					<h2 class="job" onclick ="clickCompany('16')" onmouseover="colorJob('titre16')" id="titre16"> French Embassy – Commercial & Economic section - Bangkok, Thailand </h2>

					<div id="16" style="display: none">

						<p class="descr"> Economic correspondent (National Service) <p>
		                <p class= "date"> 2001, 12 months </p>
		            </div>    

				</article>	
		    
		    </section> 

		</div>    


		<div id="contenaireDroit">
 

	    	<figure class="grandePix">
				
				<img src="images/calculator.jpg" alt="calculator" title="accounting tools">

			</figure>

			<figure class="petitePix">
				
				<img src="images/calculatormini.jpg" alt="calculator" title="accounting tools">

			</figure>
			



		</div>

    </section>   

</body>



</html>
