<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Face | Art of Formulation", "Simple DIY vitamin C formula.");?>
<body>
	<custom-header></custom-header>

	<!---------------------------------------------postpage----------------------------------->
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>Ascorbic acid serum</h3>
				</div>
				<div class="col-2 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-4">
				<h6>October 5, 2021 &emsp;| &emsp; <a href="/formulae/face.php">Face</a> > <a href="/formulae/face/serums.php">Serums</a></h6> 
			</div>
		</div>
	<!---------------------------------------------posts-------------------------------------->
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3">
				<p>Serums with any form of vitamin C seem to be all the rage among hobbyists. Ascorbic acid is very potent - no one can deny - however, formulations involving water are quite unstable and prone to oxidation. So here's a very simple water-free formula that is a dupe of a product from The Ordinary in plain sight.
				<br><br><img src="/img/postimg/serum1.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:100%" alt="Serum">
				</p>
			<div class="col-3 empty"></div>
		</div>
		<div class="row smallseparator"></div>	 	
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>Ascorbic acid serum</h3></div>
			<div class="col-3 empty"></div>
		</div>		 
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-3" id="formulaspace"> 	
					<div class="col-4 perc40t perc40">
						<h5>Ingredient</h5>
						<input type="text" class="ingredient" disabled value="Propanediol">
						<input type="text" class="ingredient" disabled value="Ascorbic acid">
						<input type="text" class="ingredient" disabled value="Arbutin">
						
						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="90">
						<input type="number" class="perc" disabled value="8">
						<input type="number"class="perc" disabled value="2">
						
						<input type="number" id="percsum" disabled value="">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>grams,&nbsp;g</h5>
						<input type="number" class="gram" disabled value="">
						<input type="number" class="gram" disabled value="">
						<input type="number"class="gram" disabled value="">

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
				<p>This is intended to be used on a dry face! <br><br>Most important to remember is not to heat the acid, to keep it away from light. I did not have access to alpha arbutin which is used in the original formula. Since there is no water, it will take longer for everything to dissolve. It is possible to just leave it, or heat the arbutin with propanediol and add the acid once the mixture has cooled. I have also made variations without the arbutin and instead 10% ascorbic acid.<br><br>The serum will eventually oxidise, but the good thing is that it is obvious, and with frequent application a 30g batch should not be wasted. You may notice dark brown discolouration where drops of serum were exposed to air for a long time (such as around the lid of a jar). The serum itself will become slightly yellow with time too - which means it's time for a new batch. A dark glass bottle is a good choice, an airless pump even better.</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>	
	</div>

<!---------------------------------------------------comment section----------------------------------->

<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../../../include/comments.php");
	$link="/formulae/face/serums/ascorbic-acid-serum.php";
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
