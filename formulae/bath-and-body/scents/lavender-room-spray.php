<?php date_default_timezone_set("Europe/Helsinki");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Bath & Body | Art of Formulation", "Make your own room spray with lavender essential oil.");?>
<body>
	<custom-header></custom-header>
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>Lavender room spray</h3>
				</div>
				<div class="col-2 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-4">
				<h6>November 11, 2021 &emsp;| &emsp; <a href="/formulae/bath-and-body.php">Bath & Body</a> > <a href="/formulae/bath-and-body/scents.php">Scents</a></h6>
			</div>
		</div>
<!---------------------------------------------post-------------------------------------->
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3">
				<p>A mix of essential oils and aromachemicals for a softer, but nevertheless markedly lavender scent. 4% fragrance concentration.</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>

		<div class="row smallseparator"></div>	 

		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3"><img src="/img/postimg/roomspray1.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:70%" alt="Lavender room spray"></div>
			<div class="col-3 empty"></div>
		</div>	

		<div class="row smallseparator"></div>

		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3">
				<p>This formula was inspired by demo formulas from <a href="http://www.thegoodscentscompany.com/demos/dm1113201.html">The Good Scent Company</a>: it's a great site for perfumery enthusiasts.
				<br><br>Room sprays commonly consist of water, solubilizers, ethanol, and fragrance. How to balance them? 
				<br><br>I went for 35% ethanol concentration, which is rather arbitrary. 
				My aim was to use it above 15%, as that will render preservatives unnecessary, according to Kabara and Orth 
				<a href="https://books.google.fi/books?id=qHgB7ZFLOC4C&printsec=frontcover&hl=fi&source=gbs_ge_summary_r&cad=0#v=onepage&q&f=false">[p.8]</a>. 
				Of course, we have to consider the purity of ethanol and err on the side of caution: with 95% ethanol the starting amount could be 16%. 
				Nevertheless, another thing to consider is the evaporation rate and clarity. Too much water in the spray will just soak the linen and furniture - the addition of ethanol quickens the evaporation. 
				To me, a range between 20 to 30% sounds quite reasonable. This formula was intended for a transparent spray bottle, therefore clarity was important too: getting rid of milkiness requires more ethanol or more of other solubilizers.  
				Here I've used polysorbate 20, which is one of the most common choices for dispersing fragrances in water (there's quite a few materials that could fit the bill, but they should be liquid at room temperature so as not to clog the nozzle at high percentage;
				 the needed amount will be different too, so the formula would have to be remade).  
				<br><br>For room sprays I like to keep the fragrance concentration between 2-5%. For any modifications, here's the formula for the fragrance concentrate:
				<br><br>Lavender 54%
				<br>Bergamot 10%
				<br>Coumarin (10% in ethanol) 10%
				<br>Phenethyl alcohol 7.5%
				<br>Lemon 5%
				<br>Geranium 5%
				<br>Cardamom aldehyde / cis-4-Decenal (10% in dipropylene glycol) 5%
				<br>Petitgrain 2.5%
				<br>Oakmoss (10% in ethanol) 1%</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>

		<div class="row smallseparator"></div>

		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>Lavender room spray</h3></div>
			<div class="col-3 empty"></div>
		</div>		 
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-3" id="formulaspace"> 	
					<div class="col-4 perc40t perc40">
						<h5>Ingredient</h5>
						<input type="text" class="ingredient" disabled value="Distilled water q.s. 100">
						<input type="text" class="ingredient" disabled value="Ethanol (>95%)">
						<input type="text" class="ingredient" disabled value="Polysorbate 20">
						<input type="text" class="ingredient" disabled value="Lavender oil">
						<input type="text" class="ingredient" disabled value="Bergamot oil">
						<input type="text" class="ingredient" disabled value="Coumarin 10%">
						<input type="text" class="ingredient" disabled value="Phenethyl alcohol">
						<input type="text" class="ingredient" disabled value="Lemon oil">
						<input type="text" class="ingredient" disabled value="Geranium oil">
						<input type="text" class="ingredient" disabled value="Cardamom aldehyde 10%">
						<input type="text" class="ingredient" disabled value="Petitgrain oil">
						<input type="text" class="ingredient" disabled value="Oakmoss 10%">

						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="51">
						<input type="number" class="perc" disabled value="35">
						<input type="number" class="perc" disabled value="10">
						<input type="number" class="perc" disabled value="2.16">
						<input type="number" class="perc" disabled value="0.4">
						<input type="number"class="perc" disabled value="0.4">
						<input type="number" class="perc" disabled value="0.3">
						<input type="number" class="perc" disabled value="0.2">
						<input type="number" class="perc" disabled value="0.2">
						<input type="number" class="perc" disabled value="0.2">
						<input type="number" class="perc" disabled value="0.1">
						<input type="number" class="perc" disabled value="0.04">
						
						<input type="number" id="percsum" disabled value="">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>grams,&nbsp;g</h5>
						<input type="number" class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
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
						
						<input type="number" id="gramsum" disabled value="">
					</div>	
				</div>	
				<div class="col-3 empty"></div>
		</div>

		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3" id="formulaspace">
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
			<div class="col-2 empty"></div>  	,
			<div class="col-3" id="formulaspace">
				<h5>Notes</h5>
				<p>Made as it is, the formula comes out clear. Note that some of the materials are pre-diluted in ethanol or dipropylene glycol: same proportions cannot be applied to other only oil-based sprays.
				<br><br>The formula would benefit from an antioxidant like butylated hydroxytoluene (BHT) to prolong the longevity of essential oils (subtract a sufficient amount from distilled water).</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>		
	</div>
<!---------------------------------------------------comment section----------------------------------->
<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../../../include/comments.php");
		$link="/formulae/bath-and-body/scents/lavender-room-spray.php";
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
