<!DOCTYPE html>
<html lang="en">
<?php require_once("../include/common.php"); 
addHead("Resources | Art of Formulation", "A guide on how to use ArtofFormulation formulator.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------postpage----------------------------------->
<div class="postpage">
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-4">
			<h3>Formulator: how to use it</h3>
		</div>
		<div class="col-2 empty"></div>
	</div>
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-4">
			<h6>October 10, 2021 &emsp;| &emsp; <a href="/resources.php">Resources</a></h6>
		</div>
	</div>
	<!---------------------------------------------posts-------------------------------------->
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-3">
<p>If you ever got annoyed with having to recalculate your formulas as well as corresponding batch sizes, this tool is for you. A quick how-to on my print-friendly formulator that helps you ditch that calculator.
			
<br><br><img src="/img/postimg/formulator1.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:80%" alt="Formulator">

<br><br>The formulator is quite straightforward. Most importantly, <strong>do not refresh the page</strong> when editing your formula: most of the data will be lost!
<br><br>First off, name your formula for future reference: otherwise the print page will just say "New formula".
<br><br>To write your formula, use the ingredient and percentage fields. To add more ingredients, click the "+ ADD LINE" button. The "-" button at the end of each row deletes it. The percentage sum is updated automatically everytime you enter new values into the percentage column. It is red if the numbers don't add up to 100%.
<br><br>To get a batch size in grams, click on one of the ten gram buttons. They will calculate the formula even if the percentages don't add up to 100%, which I think is good for reference in case you are adjusting the formula to use some ingredients up. <strong>It is not good practice to use formulas that don't add up to 100%!</strong>
<br><br>There is an optional notes section, which you can toggle with "ADD / DELETE NOTES". You can record anything relating to the formula, such pH, required temperatures, etc. However, it takes some space on the printable file, which may turn a one-page formula into a two-pager. <strong>If you have a lot of notes and a scroll bar appears:</strong>

<br><br><img src="/img/postimg/formulator2.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:80%" alt="Formulator">
<br><br>Drag the <strong>bottom right corner</strong> of the text area down until it disappears.
<br><br><img src="/img/postimg/formulator3.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:80%" alt="Formulator">
<br><br>Otherwise not all of the text will be visible on the print page!
<br><br>Press "PRINT" to print your formula directly or to save it as a pdf file (choosing destination / printer as "Microsoft Print to PDF" or "Save as PDF" depending on your browser). The page is print-friendly: unnecessary parts, such as the buttons, will not be visible in the file. It can contain even a 20-ingredient formula in one page (without the notes).
<br><br>You'll find the formulator <a href="/formulator.php">here</a>. If there's any confusion, let me know in the comments, and I will edit this article if needed.
</p>
		</div>	
		<div class="col-3 empty"></div>
	</div>
	<div class="row smallseparator"></div>
</div>
<!---------------------------------------------------comment section----------------------------------->
<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../include/comments.php");
	$link="/resources/formulator-how-to.php";
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
	/*Check if adds up to 100%: also 100g batch by default*/
	window.addEventListener("load",function() { calculatePercSum(); calculate(1);});

   	function calculatePercSum() {
   		for (i = 0; i < percentages.length; i++) {
   			percsum += parseFloat(percentages[i].value); /*because string*/
   		}
   		percSumElement.value = percsum;
   		percsum = 0.0; /*reset*/
   	}

	function calculate(n) {
		if (percentages.length == grams.length) {
			for (i = 0; i < percentages.length; i++) {
	   			inGrams = parseFloat(percentages[i].value) * n;
	   			grams[i].value = inGrams;
	   			gramsum += inGrams;
	   		}
	   		gramSumElement.value = gramsum;
	   		gramsum = 0.0; /*reset*/
   		}
	}
</script>	
<script src='https://js.hcaptcha.com/1/api.js' async defer></script>
</body>
</html>
