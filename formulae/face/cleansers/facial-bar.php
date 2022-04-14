<?php date_default_timezone_set("Europe/Helsinki");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Face | Art of Formulation", "DIY solid facial cleanser formula: a bar containing sodium cocoyl isethionate and stearic acid.");?>
<body>
	<custom-header></custom-header>
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>Facial bar</h3>
				</div>
				<div class="col-2 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-4">
				<h6>November 29, 2021 &emsp;| &emsp; <a href="/formulae/face.php">Face</a> > <a href="/formulae/face/cleansers.php">Cleansers</a></h6>
			</div>
		</div>
<!---------------------------------------------post-------------------------------------->
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3">
				<p>Facial cleansing bar, reminiscent of Cerave. Based on sodium cocoyl isethionate and stearic acid. Creates fine foam.
				<br><br>I have been experimenting with various cleansing bars for a while, which proved to be quite tricky. This bar is made from 1/3 stearic acid, which is a lot.
				 I have not come up with a formula that could incorporate less of it while maintaining a pourable form yet.
				  I did not want to incorporate oils that would essentially defy the cleansing function and impede foaming, which can feel like a waste of a good surfactant.
				   Although, it's not uncommon in such bars, and I know from experience that sticking to oil-phase ingredients only make the production so much easier.
				
				    <br><br><img src="/img/postimg/facialbar1.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:80%" alt="Facial bar">
			
				   <br><br>This bar is a little tricky to make. It hardens quickly, and the addition of glycerin and amphoteric surfactant thickens it up considerably (it essentially makes an emulsion).
				    You have to make sure phase A is thoroughly melted before incorporating other ingredients. As usual, I'm using SCI powder: other forms aren't worth your time.</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>

		<div class="row smallseparator"></div>

		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>Facial bar</h3></div>
			<div class="col-3 empty"></div>
		</div>		 
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-3" id="formulaspace"> 	
					<div class="col-4 perc40t perc40">
						<h5>Ingredient</h5>
						<input type="text" class="ingredient" disabled value="SCI powder, A">
						<input type="text" class="ingredient" disabled value="Stearic acid, A">
						<input type="text" class="ingredient" disabled value="Dimethicone 350, A">
						<input type="text" class="ingredient" disabled value="Cocamidopropyl betaine, B">
						<input type="text" class="ingredient" disabled value="Glycerin, B">
						<input type="text" class="ingredient" disabled value="Preservative, C">
						<input type="text" class="ingredient" disabled value="Fragrance, C">

						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="50">
						<input type="number" class="perc" disabled value="33">
						<input type="number" class="perc" disabled value="0.5">
						<input type="number" class="perc" disabled value="13">
						<input type="number"class="perc" disabled value="2">
						<input type="number" class="perc" disabled value="1">
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
				<p>Heat phase A until completely melted. Add phase B preferable heated as well: it will thicken after considerably. 
				Off the heat, add the rest of the ingredients (check the max. temperature your ingredients can withstand, hopefully you have something that can tolerate temperatures around 60&#176;C or above). Pour immediately into moulds.
				<br><br>If you don't have a good hot plate or want a more manageable process, you may want to up the stearic acid a couple percent, subtracting from SCI.</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>		
	</div>
<!---------------------------------------------------comment section----------------------------------->
<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../../../include/comments.php");
		$link="/formulae/face/cleansers/facial-bar.php";
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
