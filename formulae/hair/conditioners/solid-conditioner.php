<?php date_default_timezone_set("Europe/Helsinki");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Hair | Art of Formulation", "DIY solid hair conditioner formula with BTMS and behentrimonium chloride.");?>
<body>
	<custom-header></custom-header>
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>Solid conditioner</h3>
				</div>
				<div class="col-2 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-4">
				<h6>November 20, 2021 &emsp;| &emsp; <a href="/formulae/hair.php">Hair</a> > <a href="/formulae/hair/conditioners.php">Conditioners</a></h6>
			</div>
		</div>
<!---------------------------------------------post-------------------------------------->
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3">
				<p>Extra strength solid conditioner, especially suitable for long damaged hair. A harder bar that does not leave oily residue around.
				<br><br>First off, this is a more concentrated formula, and therefore more expensive to make. But good solid products are longer-lasting and not meant to be cheap.
				 You'll find a lot of formulas that contain lots of oils and butters instead, which is unnecessary.
				 <br><br>A conditioner has to contain cationic materials to change the charge of hair to make it feel smoother and easier to comb, these are the primary functional materials, which make conditioner a conditioner.
				  Oils cannot fulfill that purpose, and in excess, they make hair oily and stringy.
				  At least for straight/wavy Caucasian hair, there's no need to use much of oils at all.
				   What's more, the excess of oils and soft butters makes conditioner bars soft, and leaves oily residue wherever they sit.
				    If you keep your bars in a damp bathroom, you'll find that the bars already never fully dry, and thus become even more soft. That needs to be accounted for as well.
				    <br><br><img src="/img/postimg/solidconditioner1.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:80%" alt="Solid conditioner">
			
				 <br><br>Considering all that, I recommend no more than 15% oils and butters combined, and there are <a href="/articles/lipids-in-cosmetics-1.php">some oils</a> I don't recommend using.
				 <br><br>This formula contains 25% cationics (behentrimonium chloride + BTMS-25, which contains 25% behentrimonium methosulfate and 75% cetearyl alcohol).
				  It is a large amount, and it is often said that extra conditioning materials are wasted in conditioners.
				   I find that it only applies to regular water-containing formulas, as the amount you apply using a bar is much more controlled: you end up using the bar less.
				  Either way, I suggest not to go below 15%.
				  <br><br> The rest should be mostly made up of thickeners such as cetearyl or cetyl alcohol, but stay away from stearic acid:
				   it defies the purpose of the product with its dragginess, and as a general rule does not belong in cationic formulas.
				   <br><br>The formula contains no water, but a preservative is non-negotiable, as it is in constant contact with moisture and likely to grow mould without it. I'm using Phenonip here. 
				   <br><br>This bar comes out of the mould very hard, but softens in the shower room.
				    A piece that was a few millimeters thick was still sturdy and very much usable, unlike with all the formulas I've tried before.</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>

		<div class="row smallseparator"></div>

		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>Solid conditioner</h3></div>
			<div class="col-3 empty"></div>
		</div>		 
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-3" id="formulaspace"> 	
					<div class="col-4 perc40t perc40">
						<h5>Ingredient</h5>
						<input type="text" class="ingredient" disabled value="BTMS-25">
						<input type="text" class="ingredient" disabled value="CCT">
						<input type="text" class="ingredient" disabled value="Cocoa butter">
						<input type="text" class="ingredient" disabled value="Behentrimonium chloride">
						<input type="text" class="ingredient" disabled value="Fragrance">
						<input type="text" class="ingredient" disabled value="Oil-soluble preservative">

						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="80">
						<input type="number" class="perc" disabled value="8">
						<input type="number" class="perc" disabled value="5">
						<input type="number"class="perc" disabled value="5">
						<input type="number" class="perc" disabled value="1">
						<input type="number" class="perc" disabled value="1">
						
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
				<p>Heat everything (except for fragrance and preservative) until melted. Off the heat, add the rest of the ingredients (check the max. temperature your preservative can withstand) and pour immediately into moulds.
				<br><br>Behentrimonium chloride needs temperatures up to 90&#176;C, thus a double-boiler won't work (you can replace this ingredient with more of cetearyl alcohol, which would leave you with a solid 20% behentrimonium methosulfate).
				<br><br>As usual, adjust the fragrance and preservative amounts accordingly to the exact materials you're using, adding/subtracting from capric/caprylic triglycerides as needed.</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>		
	</div>
<!---------------------------------------------------comment section----------------------------------->
<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../../../include/comments.php");
		$link="/formulae/hair/conditioners/solid-conditioner.php";
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
