<?php date_default_timezone_set("Europe/Helsinki");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Face | Art of Formulation", "DIY tinted lip balm formula with mica.");?>
<body>
	<custom-header></custom-header>
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>Tinted lip balm</h3>
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
				<p>A lip balm formula with mica for a light shimmer. It produces harder lip balms than the <a href="/formulae/face/lip-care-and-makeup/white-chocolate-lip-balm.php">white chocolate lip balm</a>.
				<br><br><img src="/img/postimg/lipbalm2.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:70%" alt="Lip balm">
				<br><br>Again, you might find it useful to read my guide on <a href="/articles/lipids-in-cosmetics-1.php">oils in cosmetics</a>, explaining some of the choices made in this formula or giving some ideas on substitutions.
				<br><br>In this formula I use bleached white beeswax, which is better when introducing colours.
				 The lip balms above were made with a mix of pink, bronze, and golden micas. The colour of lip balm is much more intense than when it's on the lips.
				  It leaves a shimmer, here's a picture in a more or less natural light:
				  <br><br><img src="/img/postimg/lipbalm3.jpeg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:70%" alt="Lip balm shimmer">
				 <br><br> For a more lipstick-like effect you may want to consider other kinds of pigments,
				   but usually they are harder to incorporate evenly (I have tried to incorporate iron oxides) and you'd only need small amounts.
				 Also, remember that pigments would need to be oil-dispersible.</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>

		<div class="row smallseparator"></div>

		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>Tinted lip balm</h3></div>
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
						<input type="text" class="ingredient" disabled value="Mica">
						<input type="text" class="ingredient" disabled value="Ethyl vanillin (10%)">

						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="56">
						<input type="number" class="perc" disabled value="25">
						<input type="number" class="perc" disabled value="10">
						<input type="number"class="perc" disabled value="5">
						<input type="number"class="perc" disabled value="3.5">
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
				<p>Heat oils and beeswax together until melted well, quickly add and mix the fragrance off the heat, pour the mixture into lip balm tubes or tins. As this formula is tinted and a bit harder, tubes work better. 
				 Small tubes usually have around 5g capacity and will cool quickly on their own; make sure to pour a bit extra so that it's almost spilling over, as it will dent while cooling. As for tins, you can put them in the fridge to cool evenly.
				<br><br>If you want more shimmer, consider increasing to 5% mica, subtracting the rest from CCT. Anything over 10% might end up looking like eyeshadow on the lips...
				<br><br>You can substitute squalane and/or CCT with <a href="/articles/lipids-in-cosmetics-1.php">some other liquid oils</a> like almond. If you don't want to include cocoa butter, you can go with the common basic formula of 30% beeswax and 70% liquid oil, adjusting for mica.
				<br><br>If you want to substitute ethyl vanillin with something else, make sure it's food safe. Any regular fragrance or essential oil will not work. 
				<br><br>To smooth the tops of lip balms, blow a hair dryer around the sides of the tubes (blowing from the top makes the liquidized balm spill out).</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>		
	</div>
<!---------------------------------------------------comment section----------------------------------->
<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../../../include/comments.php");
		$link="/formulae/face/lip-care-and-makeup/tinted-lip-balm.php";
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
