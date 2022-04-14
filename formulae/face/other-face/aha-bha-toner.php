<?php date_default_timezone_set("Europe/Helsinki");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Face | Art of Formulation", "How to make AHA BHA toner at home with salicylic and lactic acid.");?>
<body>
	<custom-header></custom-header>
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>AHA BHA toner</h3>
				</div>
				<div class="col-2 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-4">
				<h6>October 29, 2021 &emsp;| &emsp; <a href="/formulae/face.php">Face</a> > <a href="/formulae/face/other-face.php">Other</a></h6>
			</div>
		</div>
<!---------------------------------------------post-------------------------------------->
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3">
				<p>A toner formula with 4% lactic acid and 1% salicylic acid, dissolved in propylene glycol and ethanol.</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>

		<div class="row smallseparator"></div>	 

		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3"><img src="/img/postimg/toner1.png" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:50%" alt="AHA BHA toner"></div> <!--square image-->
			<div class="col-3 empty"></div>
		</div>	

		<div class="row smallseparator"></div>

		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3">
				<p>Formulas involving acids, and especially salicylic acid, tend to be more complex.
				Such products are generally formulated at pH 3.5 at the lowest, here I aimed for pH 3.6.
				A reliable pH meter in non-negotiable so as not to cause damage - make sure to calibrate it beforehand too. Additionally, protective goggles, gloves, long sleeves are all essential when working with acids and sodium hydroxide.
				<br><br>Salicylic acid recrystallizing some time after cool-down is the most common issue. 
				It happens because although salicylic acid dissolves much better in hot water than in room-temperature water, and as it cools it falls out of solution. 
				All we need to know to avoid it is a few facts about salicylic acid, as below from <a href="https://www.makingcosmetics.us/Salicylic-Acid-USP_p_51.html">MakingCosmetics</a>:
				<br><br><em>Solubility:
				<br>Water: about 0.2% at 20&#176;C, about 1.7% at 75&#176;C (by adding about 5% of sodium phosphate or another neutral salt, solubility of salicylic acid in water is increased to about 1.8%)
				<br>Alcohol (ethanol): about 14% in pure ethanol, about 0.5% in 20% ethanol
				<br>Propylene glycol: about 3-6%
				<br>Glycerin: about 1.6%</em>
				
				<br><br>It's just a matter of calculation:
				<br>Glycerin dissolves 1.5 * 0.016 = 0.024g salicylic acid.
				<br>Propylene glycol dissolves from 5 * 0.03 = 0.15g to 0.3g
				<br>Ethanol: 4 * 0.14 = 0.56g
				<br>Water will be at least 75%: 75 * 0.002 = 0.15g
				<br><br>Overall: min 0.884g, max 1.034g; the optimistic numbers have worked for me. You have to take into account the purity of your materials. 
				Moreover, the addition of sodium hydroxide will convert some of the salicylic acid into sodium salicylate (which is much more water-soluble than the acid). 
				The other sodium salts in the formula act as humectants, improve solubility, and lower the pH to use less of the hydroxide.
				<br><br>At first I wanted to formulate an ethanol-free formula, but it became clear very quickly that it's not possible with easily found ingredients to keep it both ethanol and oil-free. 
				I have also tried to minimize the amount of ethanol, but it wasn't that much different since the rest can't dissolve much. The combination of 7% PG, 2% glycerin, 3% ethanol made the toner somewhat sticky. Thus I lowered the amount of PG and glycerin, and decided not to use fragrance so that there's no need for extra solubilizer. 
				The final formula is clear, non-sticky, and shows no recrystallization after days.
				<br><br>I have included a hydrosol in the formula instead of fragrance, which I wouldn't do if it were not for the low pH and fewer preservation worries. 10% doesn't mask the ethanol, but gives enough delicate smell. I had also replaced 1% of propylene glycol with strawberry extract in PG, which did provide a pinkish shade but no scent, so I didn't keep it in the final formula.</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>

		<div class="row smallseparator"></div>

		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>AHA BHA toner</h3></div>
			<div class="col-3 empty"></div>
		</div>		 
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-3" id="formulaspace"> 	
					<div class="col-4 perc40t perc40">
						<h5>Ingredient</h5>
						<input type="text" class="ingredient" disabled value="Distilled water q.s. 100">
						<input type="text" class="ingredient" disabled value="Hydrosol">
						<input type="text" class="ingredient" disabled value="Propylene glycol (>99%)">
						<input type="text" class="ingredient" disabled value="Lactic acid (80%)">
						<input type="text" class="ingredient" disabled value="Ethanol (>97%)">
						<input type="text" class="ingredient" disabled value="Sodium lactate (60%)">
						<input type="text" class="ingredient" disabled value="NaOH (30%) q.s. to pH>3.5">
						<input type="text" class="ingredient" disabled value="Glycerin">
						<input type="text" class="ingredient" disabled value="Salicylic acid">
						<input type="text" class="ingredient" disabled value="Sodium PCA">
						<input type="text" class="ingredient" disabled value="Preservative">
						<input type="text" class="ingredient" disabled value="PEG-40 hydrogenated castor oil">

						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="67.4">
						<input type="number" class="perc" disabled value="10">
						<input type="number" class="perc" disabled value="5">
						<input type="number"class="perc" disabled value="4.8">
						<input type="number" class="perc" disabled value="4">
						<input type="number" class="perc" disabled value="2.5">
						<input type="number" class="perc" disabled value="2">
						<input type="number" class="perc" disabled value="1.5">
						<input type="number" class="perc" disabled value="1">
						<input type="number" class="perc" disabled value="1">
						<input type="number" class="perc" disabled value="0.5">
						<input type="number" class="perc" disabled value="0.3">
						
						<input type="number" id="percsum" disabled value="">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>grams,&nbsp;g</h5>
						<input type="number" class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
						<input type="number"class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
						
						<input type="number" id="gramsum" disabled value="">
					</div>	
				</div>	
				<div class="col-3 empty"></div>
		</div>

		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3" id="formulaspace">
				<input type="submit" onclick="calculate(0.3)" class="batch" value="30g">
				<input type="submit" onclick="calculate(0.5)" class="batch" value="50g">
				<input type="submit" onclick="calculate(1)" class="batch" value="100g">
				<input type="submit" onclick="calculate(1.5)" class="batch" value="150g">
				<input type="submit" onclick="calculate(2)" class="batch" value="200g">
				<input type="submit" onclick="calculate(2.5)" class="batch" value="250g">
				<input type="submit" onclick="calculate(3)" class="batch" value="300g">
				<input type="submit" onclick="calculate(3.5)" class="batch" value="350g">
				<input type="submit" onclick="calculate(5)" class="batch" value="500g">
			</div>
			<div class="col-3 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3" id="formulaspace">
				<h5>Notes</h5>
				<p>You can start by mixing the salicylic acid with propylene glycol, ethanol, and glycerin. Then add everything else (save for NaOH and preservative) and heat up until PEG-40 HCO dissolves. Adjust the pH and add the water-soluble preservative. The amount of NaOH is just for reference, always make sure to check and adjust.</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>		
	</div>
<!---------------------------------------------------comment section----------------------------------->
<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../../../include/comments.php");
		$link="/formulae/face/other-face/aha-bha-toner.php";
		getComments($link);
		if(isset($_POST['commentsubmit'])) {
			setComment($link);
		}	
	?>
</div>	
<!------------------FOOTER------------------------------------------------>		
<custom-footer></custom-footer>
<!-- -------------------------------script for calculations------------------------------------------ -->
<script language="javascript">

	var percsum = 0.0;
	var gramsum = 0.0;

	var inGrams = 0.0;

	var percentages = document.getElementsByClassName("perc");
	var grams = document.getElementsByClassName("gram");

	var percSumElement = document.getElementById("percsum");
	var gramSumElement = document.getElementById("gramsum");

	window.addEventListener("load",function() { calculatePercSum(); calculate(1); /*Check if adds up to 100%: also 100g batch by default*/
   	});

   	function calculatePercSum() {

   		for (i = 0; i < percentages.length; i++) {
   			percsum += parseFloat(percentages[i].value); /*because string*/
   		}

   		percSumElement.value = percsum.toFixed();
   		percsum = 0.0; /*reset*/
   	}

	function calculate(n) {

		if (percentages.length == grams.length) {

			for (i = 0; i < percentages.length; i++) {

	   			inGrams = parseFloat(percentages[i].value) * n;
				if (inGrams.toString().length > 10){
                                        grams[i].value = inGrams.toFixed(3);
                                }
                                else {
                                        grams[i].value = inGrams;
                                }
                                gramsum += inGrams;

                        }

                        gramSumElement.value = gramsum.toFixed();
	   		gramsum = 0.0; /*reset*/

   		}

	}
	
</script>	
<script src='https://js.hcaptcha.com/1/api.js' async defer></script>

</body>
</html>
