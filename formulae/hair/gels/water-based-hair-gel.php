<?php date_default_timezone_set("Europe/Helsinki");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Hair | Art of Formulation", "DIY water-based hair gel.");?>
<body>
	<custom-header></custom-header>
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>Water-based hair gel</h3>
				</div>
				<div class="col-2 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-4">
				<h6>April 12, 2022 &emsp;| &emsp; <a href="/formulae/hair.php">Hair</a> > <a href="/formulae/hair/gels.php">Gels</a></h6>
			</div>
		</div>
<!---------------------------------------------post-------------------------------------->
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3">
				<p>I've made variations of this formula many times now. Initially it was based on a locally-made men's product containing ceteareth-20 and PEG-40 hydrogenated castor oil. 
				<br><br>Ceteareth-based formulas are not easy to make. This emulsifier melts (and sets) at high temperatures, and it tends to ball up in water. 
				 <br><br>Ceteareth-25 produces thicker products than ceteareth-20, they're both used at 20-30% for thick gels.
				  VP/VA copolymer is responsible for giving the gel hold, it is used at 1-10%, and 5% is enough to give it pretty strong hold.
				   PEG-7 glyceryl cocoate makes the gel easier to wash out, you can substitute it with PEG-40 hydrogenated castor oil. 
				   Pre-mixing fragrance with a solubilizer helps to keep the end result less opaque. I'm using the usual 1:3 ratio.
				    Up the fragrance or essential oils if they're more heat-sensitive: everything will be added at higher temperatures.
				 <br><br><img src="/img/postimg/hairgel1.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:80%" alt="Hair gel">
			
				 <br><br>I wouldn't completely substitute propylene glycol with glycerin due to possible stickiness.</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>

		<div class="row smallseparator"></div>

		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>Water-based hair gel</h3></div>
			<div class="col-3 empty"></div>
		</div>		 
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-3" id="formulaspace"> 	
					<div class="col-4 perc40t perc40">
						<h5>Ingredient</h5>
						<input type="text" class="ingredient" disabled value="Ceteareth-25, A">
						<input type="text" class="ingredient" disabled value="Distilled water q.s. 100%, B">
						<input type="text" class="ingredient" disabled value="PEG-7 glyceryl cocoate, B">
						<input type="text" class="ingredient" disabled value="VP/VA copolymer, B">
						<input type="text" class="ingredient" disabled value="Propylene glycol, B">
						<input type="text" class="ingredient" disabled value="Polysorbate 20, C">
						<input type="text" class="ingredient" disabled value="Water-soluble preservative, C">
						<input type="text" class="ingredient" disabled value="Fragrance, C">

						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="24">
						<input type="number" class="perc" disabled value="58.2">
						<input type="number" class="perc" disabled value="5">
						<input type="number"class="perc" disabled value="5">
						<input type="number" class="perc" disabled value="4">
						<input type="number" class="perc" disabled value="2.1">
						<input type="number" class="perc" disabled value="1">
						<input type="number" class="perc" disabled value="0.7">
						
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
			</div>
			<div class="col-3 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3" id="formulaspace">
				<h5>Notes</h5>
				<p>This formula calls for a proper heat plate as you need phases A and B to get up to around 85&#176;C (check your manufacturer's info on the emulsifier to be precise).
				<br><br>Heat ceteareth-25 separately until melted, which will take a while. Bring the phase B up to the same temperature, mix only then, and slowly.
				 Ceteareth-25 will partially gel up in the water and will require careful, long, and tedious mixing to melt completely. Therefore don't forget to weigh the beakers before and during the process to account for water evaporation.
				<br><br>Add phase C below 60&#176;C, but make sure the preservative will survive that. The original formula combined the 9010 (phenoxyethanol and ethylhexylglycerin) and DMDM hydantoin.</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>		
	</div>
<!---------------------------------------------------comment section----------------------------------->
<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../../../include/comments.php");
		$link="/formulae/hair/gels/water-based-hair-gel.php";
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
	   			if (inGrams.toString().length > 10) {
	   				grams[i].value = inGrams.toFixed(3);
	   			} else {
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
