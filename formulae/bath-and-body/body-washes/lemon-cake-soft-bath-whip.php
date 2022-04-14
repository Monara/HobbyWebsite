<?php date_default_timezone_set("Europe/Helsinki");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Bath & Body | Art of Formulation", "Make your own whipped soap. A formula for lemon and vanilla scented bath whip.");?>
<body>
	<custom-header></custom-header>
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>Lemon cake soft bath whip</h3>
				</div>
				<div class="col-2 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-4">
				<h6>November 30, 2021 &emsp;| &emsp; <a href="/formulae/bath-and-body.php">Bath & Body</a> > <a href="/formulae/bath-and-body/body-washes.php">Body washes</a></h6>
			</div>
		</div>
<!---------------------------------------------post-------------------------------------->
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3">
				<p>One of my versions for a soft bath whip. Incorporates lemon essential oil and ethyl vanillin.
				<br><br>I have made plenty of different bath whips with varying proportions. 
				I've found that it's better to have more glycerin than water for a more pleasant feel (and lower water activity as a plus).
				 With sorbitol, it also makes the whip stickier: this particular version isn't suited to piping but is easier to scoop out and spread. Formulas for piping might include less of sugars, extra stearic acid. 
				 This version would make a nice scrub with the addition of non-water-soluble scrubby materials.
				 <br><br><img src="/img/postimg/bathwhip1.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:70%" alt="Lemon cake soft bath whip">
				<br><br>This particular formula was based on a document for <a href="https://stephenson-kbuild-production.s3-eu-west-1.amazonaws.com/product-technical-document/06-solid-surfactant-range/crystal-opc/CRYSTAL-OPC---INCI-&-Specification-Rev18.pdf">Stevenson's Foaming Bath Butter</a> base.
				They have listed approximate amounts of ingredients in their formula:
				<br><br><img src="/img/postimg/bathbutterinci.png" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:50%" alt="Foaming bath butter INCI">
				<br><br>What's more, on the other page they list some other important information:
				<br><br><img src="/img/postimg/bathbutterinci2.png" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:70%" alt="Foaming bath butter INCI">
				<br><br>With all that, if you wanted to completely rip off this formula, it wouldn't be difficult.
				 But I've never tried any bases like this so it was not my goal to copy it completely.
				  My formula contains more water, I've replaced the sulfosuccinate with my regular cocamidopropyl betaine (both are amphoteric, so no issue there).
				   I have used both sodium cocoyl isethionate as well as sodium coco-sulfate, since I wanted to use up the SCS,
				   and my SCI originally came in the shape of prills with added stearic acid (ASM 86%, so the rest must have been mostly stearic acid).
				    Adding SCS results in higher pH, so keep that in mind if you change the preservative.
				     The anionic content of my formula is around 18%, and total ASM at around 20%. The amphoteric surfactant is at the common ration of 1/4 of anionic.
				   <br><br>Looking again at the suggested percentages we can tell that sodium chloride won't be over 2% (most surfactants will start losing viscosity at that point).
				    My trials have also shown that sorbitol should be no more than 10-12%, as stickiness becomes overwhelming after that point. 
				    <br><br>What is not included in the list is fragrance, since it's a base. For a strong result I recommend 1.5-2%.
				     I have used 50/50 lemon essential oil and ethyl vanillin (10% in dipropylene glycol).
				     <br><br>I have no doubt that I will be making more formulas like this: it's one of my favourite types of products, and it makes a nice low-risk giftable due to <a href="/articles/water-activity.php">low water activity</a> in the presence of glycerin and sorbitol.
				      The water content is barely 30%, which would already drop the activity to 0.8; considering over 40% of glycerin and sorbitol, I don't believe there's a chance of microbial proliferation before use.
				      But that does not mean we skip the preservatives: water is constantly introduced into the product when it is in use.</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>

		<div class="row smallseparator"></div>

		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>Lemon cake soft bath whip</h3></div>
			<div class="col-3 empty"></div>
		</div>		 
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-3" id="formulaspace"> 	
					<div class="col-4 perc40t perc40">
						<h5>Ingredient</h5>
						<input type="text" class="ingredient" disabled value="Glycerin q.s. 100, A">
						<input type="text" class="ingredient" disabled value="Distilled water, A">
						<input type="text" class="ingredient" disabled value="Sorbitol, A">
						<input type="text" class="ingredient" disabled value="SCS powder, A">
						<input type="text" class="ingredient" disabled value="SCI powder, A">
						<input type="text" class="ingredient" disabled value="Cocamidopropyl betaine, A">
						<input type="text" class="ingredient" disabled value="Fragrance, B">
						<input type="text" class="ingredient" disabled value="Sodium chloride, B">
						<input type="text" class="ingredient" disabled value="Preservative, B">

						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="34">
						<input type="number" class="perc" disabled value="25">
						<input type="number" class="perc" disabled value="12">
						<input type="number" class="perc" disabled value="11.5">
						<input type="number" class="perc" disabled value="8.5">
						<input type="number"class="perc" disabled value="5">
						<input type="number" class="perc" disabled value="1.7">
						<input type="number" class="perc" disabled value="1.3">
						<input type="number" class="perc" disabled value="1">
						
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
						
						<input type="number" id="gramsum" disabled value="">
					</div>	
				</div>	
				<div class="col-3 empty"></div>
		</div>

		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3" id="formulaspace">
				<input type="submit" onclick="calculate(1)" class="batch" value="100g">
				<input type="submit" onclick="calculate(1.5)" class="batch" value="150g">
				<input type="submit" onclick="calculate(2)" class="batch" value="200g">
				<input type="submit" onclick="calculate(2.5)" class="batch" value="250g">
				<input type="submit" onclick="calculate(3)" class="batch" value="300g">
				<input type="submit" onclick="calculate(3.5)" class="batch" value="350g">
				<input type="submit" onclick="calculate(4)" class="batch" value="400g">
				<input type="submit" onclick="calculate(5)" class="batch" value="500g">
			</div>
			<div class="col-3 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>  	,
			<div class="col-3" id="formulaspace">
				<h5>Notes</h5>
				<p>The process is straight-forward: heat all the phase A together until well-combined. When you take it off the heat it will thicken slightly.
				<br><br>You might need a different amount of salt (especially if using different surfactant amounts): max. 2%, add in small increments of 0.2 grams until you are satisfied with viscosity (should be added or subtracted from glycerin).
				<br><br>After the mixture has cooled and all ingredients have been added, whip it for a few minutes.
				 As with all tools and utensils, get a dedicated whip: fragrance seeps into everything.</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>		
	</div>
<!---------------------------------------------------comment section----------------------------------->
<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../../../include/comments.php");
		$link="/formulae/bath-and-body/body-washes/lemon-cake-soft-bath-whip.php";
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
