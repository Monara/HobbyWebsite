<?php date_default_timezone_set("Europe/Helsinki");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Face | Art of Formulation", "DIY white chocolate lip balm with cocoa butter.");?>
<body>
	<custom-header></custom-header>
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>White chocolate lip balm</h3>
				</div>
				<div class="col-2 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-4">
				<h6>November 13, 2021 &emsp;| &emsp; <a href="/formulae/face.php">Face</a> > <a href="/formulae/face/lip-care-and-makeup.php">Lip care and makeup</a></h6>
			</div>
		</div>
<!---------------------------------------------post-------------------------------------->
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3">
				<p>A softer lip balm formula incorporating non-deodorized cocoa butter and vanilla scent. Combined they are reminiscent of white chocolate. Formula is pourable into tubes or tins.
				<br><br><img src="/img/postimg/lipbalm1.jpeg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:70%" alt="Lip balm">
				<br><br>Before making this formula, you might find it useful to read my guide on <a href="/articles/lipids-in-cosmetics-1.php">oils in cosmetics</a>, which will explain some of the choices made in this formula.
				<br><br>This formula glides on easily and generously. You can make the lip balm harder by adding a few percent more of beeswax (subtracting from capric/caprylic triglycerides).
				 I use bleached white beeswax for a lighter colour. 
				 I have experimented with vegan versions in the past, but for now I can just say not to try replacing beeswax with stearic acid (it's very draggy and prone to graininess).
				 <br><br>I reckon the white chocolate impression could be improved further with the addition of a sweetener, but I have not attempted that yet.</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>

		<div class="row smallseparator"></div>

		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>White chocolate lip balm</h3></div>
			<div class="col-3 empty"></div>
		</div>		 
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-3" id="formulaspace"> 	
					<div class="col-4 perc40t perc40">
						<h5>Ingredient</h5>
						<input type="text" class="ingredient" disabled value="CCT q.s. 100">
						<input type="text" class="ingredient" disabled value="Beeswax">
						<input type="text" class="ingredient" disabled value="Cocoa butter">
						<input type="text" class="ingredient" disabled value="Squalane">
						<input type="text" class="ingredient" disabled value="Ethyl vanillin (10%)">

						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="54.5">
						<input type="number" class="perc" disabled value="20">
						<input type="number" class="perc" disabled value="20">
						<input type="number"class="perc" disabled value="5">
						<input type="number" class="perc" disabled value="0.5">
						
						<input type="number" id="percsum" disabled value="">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>grams,&nbsp;g</h5>
						<input type="number" class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
						<input type="number"class="gram" disabled value="">
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
				<input type="submit" onclick="calculate(0.2)" class="batch" value="20g">
				<input type="submit" onclick="calculate(0.3)" class="batch" value="30g">
				<input type="submit" onclick="calculate(0.4)" class="batch" value="40g">
				<input type="submit" onclick="calculate(0.5)" class="batch" value="50g">
				<input type="submit" onclick="calculate(0.6)" class="batch" value="60g">
				<input type="submit" onclick="calculate(1)" class="batch" value="100g">
				<input type="submit" onclick="calculate(1.5)" class="batch" value="150g">
				<input type="submit" onclick="calculate(2)" class="batch" value="200g">
			</div>
			<div class="col-3 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3" id="formulaspace">
				<h5>Notes</h5>
				<p>The process is basic: heat oils and beeswax together until melted well, quickly add and mix the fragrance, and pour the mixture into lip balm tubes or tins. 
				 Small tubes usually have around 5g capacity and will cool quickly on their own; make sure to pour a bit extra so that it's almost spilling over, as it will dent while cooling. For larger tins, you might want to put them in the fridge to cool to avoid crystallization from cocoa butter.
				<br><br>You can substitute squalane and/or CCT with <a href="/articles/lipids-in-cosmetics-1.php">some other liquid oils</a> like almond.
				<br><br>Ethyl vanillin is an aromachemical often used in the food industry. If you want to substitute it with something else, make sure it's food safe! 
				<br><br>A tip for smoother tops in tubes: in candlemaking, a heatgun or a hair dryer is used to even out the tops of candles. I found that this works well here if you blow the fan around the sides of the tubes (blowing from the top makes the liquidized balm spill out). The lip balms in the image had the characteristic holes on top before smoothing.</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>		
	</div>
<!---------------------------------------------------comment section----------------------------------->
<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../../../include/comments.php");
		$link="/formulae/face/lip-care-and-makeup/white-chocolate-lip-balm.php";
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
