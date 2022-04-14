<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Hair | Art of Formulation", "DIY hair detangling spray formula. Contains cetrimonium chloride and polyquaternium-7.");?>
<body>
	<custom-header></custom-header>

	<!---------------------------------------------postpage----------------------------------->
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>Light detangling spray</h3>
				</div>
				<div class="col-2 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-4">
				<h6>January 16, 2021 &emsp;| &emsp; <a href="/formulae/hair.php">Hair</a> > <a href="/formulae/hair/sprays.php">Sprays</a></h6> 
			</div>
		</div>
	<!---------------------------------------------posts-------------------------------------->
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3">
				<p>I came up with this formula after looking at the INCI of a detangling spray from a famous brand:<br><br>
				Water/​Eau, Phenoxyethanol, Trisodium Ethylenediamine Disuccinate, Amodimethicone, PEG-40 Hydrogenated Castor Oil, Benzyl Alcohol, Polyquaternium-11, Fragrance/​Parfum,
				 Citric Acid, Panthenyl Ethyl Ether, Panthenol, Ethylhexylglycerin, Trideceth-12, Cetrimonium Chloride, Histidine<br><br>
				 Knowing the small usage rate of phenoxyethanol and assuming usual labelling, it's clear that this product has over 95% water with the cost of 10 euros! Why not make your own?
				 
				 <br><br><img src="/img/postimg/hairspray1.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:90%" alt="Spray bottle"><br><br>
				 
				 So let's break down the INCI. We've got water; preservatives (Euxyl 9010 with phenoxyethanol and ethylhexylglycerin, plus benzyl alcohol);
				  a chelator; amodimethicone, polyquat, cetrimonium chloride as the functional ingredients; PEG-40 HCO as a solubilizer for the fragrance;
				   and some marketing ingredients like panthenol and amino acid.<br><br>
				   
				   Now sadly none of my regular suppliers stock amodimethicone. It seems like a great ingredient for damaged hair, a silicone that is cationic in acidic conditions and forms a lasting film.
				    All my favourite conditioners contained it before switching to making my own. Its function cannot be replaced by adding dimethicone, which deposits on hair in a non-discriminatory way due to not being charged. Naturally I skipped this ingredient.<br><br>
				    
				    Cetrimonium chloride is limited to 0.25% in leave-on formulas. Normally it is sold as a 25% solution (check with your supplier), so use up to 1% max.<br><br>
				    
				    Polyquaterniums (or polyquats, PQ) are not all made equal. The most common ones I've observed are PQ-7, PQ-10, and PQ-11. PQ-10 seems to be have thickening properties so it might not work in a spray. Check the recommended usage rates of your particular one.<br><br> 
				    
				    As for chelators, I've had a similar issue with finding reasonable quantities for reasonable prices. EDTAs are not biodegradable, so best not to overstock and then toss out.
				     There's the more "green" options like sodium phytate but not nearly as effective. The disuccinate used in the original formula is great and suited for acidic products, although less known and most likely impossible to acquire for hobbyists.
				     But there's metal traces in many things, so add if you have.<br><br>
				     
				     Panthenol is unlikely to do anything on hair, it's one of those nice-to haves. But I have a rather large amount to use up, so it is included. If you don't - skip it, save it for creams.<br><br>
				     
				     Lastly, use whichever water-soluble preservative is the most potent. I am currently waiting on a formaldehyde releaser, which would be the best choice in a formula with high water activity.</p>
			</div>
			<div class="col-3 empty"></div>
		</div>	
		<div class="row smallseparator"></div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>Light detangling spray</h3></div>
			<div class="col-3 empty"></div>
		</div>		 
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-3" id="formulaspace"> 	
					<div class="col-4 perc40t perc40">
						<h5>Ingredient</h5>
						<input type="text" class="ingredient" disabled value="Distilled water (q.s. 100%)">
						<input type="text" class="ingredient" disabled value="Polyquaternium-7">
						<input type="text" class="ingredient" disabled value="Cetrimonium chloride 25%">
						<input type="text" class="ingredient" disabled value="Water-soluble preservative q.s.">
						<input type="text" class="ingredient" disabled value="PEG-40 HCO">
						<input type="text" class="ingredient" disabled value="Panthenol">
						<input type="text" class="ingredient" disabled value="Fragrance and dye">

						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="94.8">
						<input type="number" class="perc" disabled value="1.5">
						<input type="number"class="perc" disabled value="1">
						<input type="number" class="perc" disabled value="1">
						<input type="number" class="perc" disabled value="0.9">
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
				<p>Heat distilled water with the PEG-40 hydrogenated castor oil to 70&#176; and mix until dissolved. Even if you replace PEG-40 HCO with a liquid solubilizer, I still recommend heating up distilled water alone since it is not sterile (just keep track of evaporation). Everything else goes in as the cool-down phase.<br><br>
				For preservative I used Optiphen with 0.2% of the fragrance with a phenethyl (aka phenyl ethyl) alcohol booster. Liquid germall plus to quantum satis would be a better choice here.<br><br>
				The resulting pH was 4.7 and didn't require adjustment.</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>	
	</div>

<!---------------------------------------------------comment section----------------------------------->

<div class="commentsection">
	<comment-section></comment-section>

	<?php require_once("../../../include/comments.php");
	$link="/formulae/hair/sprays/light-detangling-spray.php";
		getComments($link);
		if(isset($_POST['commentsubmit'])) {
			setComment($link);
		}?>
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
					grams[i],value = inGrams.toFixed(3);
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
