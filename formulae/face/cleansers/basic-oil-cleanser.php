<?php date_default_timezone_set("Europe/Helsinki");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Face | Art of Formulation", "How to make a simple oil cleanser: DIY formula based on PEG-20 glyceryl triisostearate.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------postpage----------------------------------->
<div class="postpage">
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-4">
			<h3>Basic oil cleanser</h3>
		</div>
		<div class="col-2 empty"></div>
	</div>
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-4">
			<h6>October 2, 2021 &emsp;| &emsp; <a href="/formulae/face.php">Face</a> > <a href="/formulae/face/cleansers.php">Cleansers</a></h6>
		</div>
	</div>
<!---------------------------------------------post-------------------------------------->
	<div class="row">
		<div class="col-2 empty"></div>  	
		<div class="col-3">
<p>This is the most basic formula for making a liquid oil-based cleanser that emulsifies when mixed with water and washes away easily. In my experience, it is not irritating and wipes makeup away quite easily.
<br><br>As you might be aware, it is very popular to use polysorbate 80 in such formulations, but it has the drawback of displaying separation with very many emollients (with notable exceptions such as C12-15 alkyl benzoate, capric/caprylic triglycerides, octyldodecanol - as tested by yours truly).

<br><br><img src="/img/postimg/cleanser1.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:100%" alt="Oil cleanser">
		
<br><br>PEG-20 glyceryl triisostearate, on the other hand, is compatible with a variety of ingredients and seems quite popular in the industry (such as being the primary cleanser in the famous Banila balm). This ingredient is used for instance with olive oil (<a href="https://incidecoder.com/products/dhc-olive-concentrated-cleansing-oil">DHC - Olive Concentrated Cleansing Oil</a>), cetyl ethylhexanoate (<a href="https://incidecoder.com/products/deciem-hylamide-cleanser">Hylamide - High Efficiency Facial Cleaner</a>). I have personally used it so far with C12-15 alkyl benzoate, capric/caprylic triglycerides, almond oil.
<br><br> The criteria for choosing the oils or esters would be to use something that is cheap (it's going down the sink anyway), lightweight, and it doesn't go rancid easily. As a general rule you might want to avoid such oils as chia seed, flax seed, grapeseed, or rapeseed (check that the iodine value of an oil isn't high).
</p>
		</div>	
		<div class="col-3 empty"></div>
	</div>
	<div class="row smallseparator"></div>
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-3" id="formulaspace"><h3>Basic oil cleanser</h3></div>
		<div class="col-3 empty"></div>
	</div>		 
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-3" id="formulaspace"> 	
			<div class="col-4 perc40t perc40">
				<h5>Ingredient</h5>
				<input type="text" class="ingredient" disabled value="Oil or ester (q.s. 100)">
				<input type="text" class="ingredient" disabled value="PEG-20 glyceryl triisostearate">
				<input type="text" class="ingredient" disabled value="Tocopherol (optional)">
				<input type="text" class="ingredient" disabled value="Fragrance (optional)">

				<input type="text" class="ingredient" disabled value="Sum:">
			</div>
			<div class="col-2 perc20t perc20">
				<h5>percent,&nbsp;%</h5>
				<input type="number" class="perc" disabled value="84.6">
				<input type="number" class="perc" disabled value="15">
				<input type="number"class="perc" disabled value="0.2">
				<input type="number" class="perc" disabled value="0.2">
						
				<input type="number" id="percsum" disabled value="">
			</div>
			<div class="col-2 perc20t perc20">
				<h5>grams,&nbsp;g</h5>
				<input type="number" class="gram" disabled value="">
				<input type="number" class="gram" disabled value="">
				<input type="number"class="gram" disabled value="">
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
			<p>The fragrance is, of course, optional. I wouldn't use more than the shown amount as the product will going into your eyes, and I wouldn't recommend using essential oils. This is just to mask the smell of ingredients. If not using, add 0.2% back to oil /ester part.<br><br>If you are not using oils, but esters like capric/caprylic triglycerides you can skip the tocopherol as well as it's meant to slow down oil oxidation (add 0.2 % back to oil / ester).<br><br>The product should be bottled in such a way that no water can get it. </p>
		</div>
		<div class="col-2 empty"></div>
	</div>	 	
	<div class="row smallseparator"></div>		
</div>
<!---------------------------------------------------comment section----------------------------------->
<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../../../include/comments.php");
		$link="/formulae/face/cleansers/basic-oil-cleanser.php";
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
