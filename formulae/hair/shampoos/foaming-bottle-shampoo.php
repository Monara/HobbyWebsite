<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Hair | Art of Formulation", "DIY foaming bottle shampoo formula suitable for dry hair. Contains SLES and cocamidopropyl betaine.");?>
<body>
	<custom-header></custom-header>

	<!---------------------------------------------postpage----------------------------------->
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>Foaming bottle shampoo</h3>
				</div>
				<div class="col-2 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-4">
				<h6>October 5, 2021 &emsp;| &emsp; <a href="/formulae/hair.php">Hair</a> > <a href="/formulae/hair/shampoos.php">Shampoos</a></h6> 
			</div>
		</div>
	<!---------------------------------------------posts-------------------------------------->
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3">
				<p>This formula is for a gentle SLES-based shampoo, well-suited for dry hair. The shampoo is meant to be used with a foaming bottle.
				<br><br><img src="/img/postimg/shampoo1.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:100%" alt="Image with bubbles">
				<br><br>It has been one of my go-to formulas, same colour (pink) and fragrance (cherry blossom) used everytime. I have tried experimenting with other surfactants at first, but found that glucosides for instance leave an unpleasant feel to the hair. 
				I have stuck to SLES as it does the job well and, in combination with cocamidopropyl betaine, is quite mild. I have since started buying SLES in larger quantities, so this is what most of my surfactant formulations are based on. 
				Note that this formula won't be suitable for a regular bottle - it doesn't have enough viscocity and will just run through your hands (it is possible though to thicken it somewhat with xanthan gum and < 2% salt). That's perfect for a foaming pump, however, and anything thicker seems to have make the pump do a half-job.
				</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>
		<div class="row smallseparator"></div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>Foaming bottle shampoo</h3></div>
			<div class="col-3 empty"></div>
		</div>		 
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-3" id="formulaspace"> 	
					<div class="col-4 perc40t perc40">
						<h5>Ingredient</h5>
						<input type="text" class="ingredient" disabled value="Distilled water (q.s. 100%)">
						<input type="text" class="ingredient" disabled value="Glycerin">
						<input type="text" class="ingredient" disabled value="SLES 25%">
						<input type="text" class="ingredient" disabled value="Cocamidopropyl betaine 40%">
						<input type="text" class="ingredient" disabled value="Polyquaternium-7">
						<input type="text" class="ingredient" disabled value="Water-soluble preservative">
						<input type="text" class="ingredient" disabled value="Fragrance + pigment ">
						<input type="text" class="ingredient" disabled value="Citric acid">

						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="57.45">
						<input type="number" class="perc" disabled value="2">
						<input type="number"class="perc" disabled value="30">
						<input type="number" class="perc" disabled value="8">
						<input type="number" class="perc" disabled value="1">
						<input type="number" class="perc" disabled value="1">
						<input type="number" class="perc" disabled value="0.5">
						<input type="number" class="perc" disabled value="0.05">
						
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
				<input type="submit" onclick="calculate(3.5)" class="batch" value="350g">
				<input type="submit" onclick="calculate(5)" class="batch" value="500g">
			</div>
			<div class="col-3 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3" id="formulaspace">
				<h5>Notes</h5>
				<p>The best batch size for this formula is 200g and up, otherwise is difficult to measure the citric acid. <br><br>Of course, the preservative and citric acid amounts will differ. My version of shampoo results in pH 4.2 or so: I try to keep it skin-friendly and low enough to aid with preservation, but I wouldn't make it any lower than pH 4. A good pH meter is a must, especially when working with higher pH products like SLES (I have found even limited-range pH strips rather useless).<br><br>The Active Surfactant The ASM of this formula with the surfactant concentrations comes out to 7.5 (SLES) + 3.2 (CAPB) = 10.7%. This 10-11% range will be too low for many who don't have very long dry locks, and it could be made up to 15% by increasing the concentration or amount of surfactants. For normal hair or daily use I'd make it around 12-13% ASM. However, the proportion is important: to make the primary anionic surfactant milder on the skin it is good practice to add 1/3 to 1/4 of it in amphoteric surfactant.<br><br>Polyquaternium-7 is a nice conditioning agent and a good addition for long hair: it should make detangling a bit easier and provide some slip to the formula. It can be replaced with a range of cationic polymers (other polyquats tend to be quite available too), but not with a wider range of cationic materials.<br><br>As you can see, I put the fragrance in the same category with the water-soluble pigment, the amount of which will depend on the desired intensity. No need to mix them together before going into a beaker! If, say, a single drop of pigment doesn't register on the scale, it can be useful to weigh these at the same step one after another without zeroing the scale, so that the amounts finally add up to 100% in the end. They can be measured separately if the scale is precise enough and colour consistency is key between batches. Owning just 3 kinds pigments - yellow, red, blue - will cover all the main colours.<br><br>The amount of water-soluble preservative and fragrance can be adjusted as needed.</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>	
	</div>

<!---------------------------------------------------comment section----------------------------------->

<div class="commentsection">
	<comment-section></comment-section>

	<?php require_once("../../../include/comments.php");
	$link="/formulae/hair/shampoos/foaming-bottle-shampoo.php";
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
