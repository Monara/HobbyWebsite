<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Bath & Body | Art of Formulation", "DIY coffee-scented body scrub formula with ground apricot kernels.");?>
<body>
<custom-header></custom-header>
	<!---------------------------------------------postpage----------------------------------->
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>Coffee mousse scrub</h3>
				</div>
				<div class="col-2 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-4">
				<h6>January 18, 2021 &emsp;| &emsp; <a href="/formulae/bath-and-body.php">Bath & Body</a> > <a href="/formulae/bath-and-body/body-scrubs.php">Body scrubs</a></h6> 
			</div>
		</div>
	<!---------------------------------------------posts-------------------------------------->
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3">
				<p>This a gentle body scrub / wash. I find high amounts of glycerin exceedingly pleasant in these types of products, so when I noticed a Lush product called Posh Chocolate,
				 I knew I had to borrow the idea. But only to borrow, because cocoa powder and hazelnut milk in cosmetics? Very typical of Lush, and admittedly rather tempting: 
				 I bet in combination with CO2 cocoa extract looks and smells like the real deal.<br><br>
				 
				 Their product is mostly glycerin, followed by SCI, and some water-based and eyebrow-raising food ingredients.
				 I have replaced SCI with SCS, which I need to use up. This complicates matters a bit as it is more alkaline and pH needs adjustment.
				  I added ground apricot kernels as a mild exfoliant. Even though coffee grounds might be a tempting choice,
				   they would be much more prone to spoilage, and would need drying and sanitizing before use (unspent ground coffee will stain your products unevenly). Salt or sugar would not be an optimal choice as the wash contains a considerable amount of water, melting them.
				  I have another glycerin-based scrub formula with sugar that I'll be posting sometime soon.<br><br>
				 
				 <br><br><img src="/img/postimg/moussescrub1.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:80%" alt="Body scrub in a jar"><br><br></p>
			</div>
			<div class="col-3 empty"></div>
		</div>	
		<div class="row smallseparator"></div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>Coffee mousse scrub</h3></div>
			<div class="col-3 empty"></div>
		</div>		 
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-3" id="formulaspace"> 	
					<div class="col-4 perc40t perc40">
						<h5>Ingredient</h5>
						<input type="text" class="ingredient" disabled value="Glycerin (q.s. 100%)">
						<input type="text" class="ingredient" disabled value="SCS powder">
						<input type="text" class="ingredient" disabled value="Distilled water">
						<input type="text" class="ingredient" disabled value="Cocamidopropyl betaine 40%">
						<input type="text" class="ingredient" disabled value="Ground apricot kernels">
						<input type="text" class="ingredient" disabled value="Fragrance">
						<input type="text" class="ingredient" disabled value="Water-soluble preservative q.s.">
						<input type="text" class="ingredient" disabled value="Bronze and black mica">
						<input type="text" class="ingredient" disabled value="Glucono-delta-lactone">
						<input type="text" class="ingredient" disabled value="Caffeine">

						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="36.2">
						<input type="number" class="perc" disabled value="16">
						<input type="number"class="perc" disabled value="33">
						<input type="number" class="perc" disabled value="8">
						<input type="number" class="perc" disabled value="4">
						<input type="number" class="perc" disabled value="1.4">
						<input type="number" class="perc" disabled value="1">
						<input type="number" class="perc" disabled value="0.15">
						<input type="number" class="perc" disabled value="0.15">
						<input type="number" class="perc" disabled value="0.1">
						
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
				<input type="submit" onclick="calculate(5)" class="batch" value="500g">
			</div>
			<div class="col-3 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3" id="formulaspace">
				<h5>Notes</h5>
				<p>Heat glycerin, water, surfactants, glucono-delta-lactone (it needs to hydrolyze under heat to get to the final pH sooner) and caffeine (it's not heat-sensitive) together to 70&#176;C and mix gently until it is transparent.
				 Remember to account for water evaporation by weighing everything beforehand and adding back the difference after heating.
				  Add the rest as cool-down phase. Note that the mixture will start to thicken only around 30 &#176;C.<br><br>
				   I definitely do not recommend any other form of SCS or SCI but powder, in any formula. Save your nerves.<br><br>
				 For the scent I used 1% of coffee fragrance, 0.3% ethyl vanillin (10% dilution), 0.1% cream fragrance.<br><br>
				 Note that the batch in the picture above only had 2.5% of kernel powder, which wasn't really enough. You can go over the indicated amount or skip the exfoliant altogether (adding the percentage to glycerin).<br><br>  
				I recommend 200g as the starting batch amount. The final pH of the product will be near-neutral depending on your ingredients. The ASM of this formula is just above 18%.</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>	
	</div>
<!---------------------------------------------------comment section----------------------------------->

<div class="commentsection">
	<comment-section></comment-section>

	<?php require_once("../../../include/comments.php");
	$link="/formulae/bath-and-body/body-scrubs/coffee-mousse-scrub.php";
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
