<!DOCTYPE html>
<html lang="en">
<?php require_once("include/common.php"); 
addHead("Formulator | Art of Formulation", "Formulator: the free tool to help you formulate skincare online. Ditch the calculator!");?>
<body>
<custom-header></custom-header>
<div class="row smallseparator"></div>
<!---------------------------------------------postpage----------------------------------->
<div class="postpage">
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-3" id="formulaspace">
			<a href="resources/formulator-how-to.php"><p style="text-decoration: underline; float: right">Formulator - ArtofFormulation.com</p></a>
			<h3 class="noborder"><input type="text" style="font-family: 'Prata', serif" placeholder="New formula"></h3></div>
		<div class="col-3 empty"></div>
	</div>		 
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-3" id="formulaspace">
			<div class="row">
				<div class="col-4 perc40t perc40"><h5>Ingredient</h5></div>
				<div class="col-2 perc20t perc20"><h5>percent, %</h5></div>
				<div class="col-2 perc20t perc20"><h5>grams, g</h5></div>
			</div>
		</div>	
		<div class="col-3 empty"></div>
	</div>
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-3" id="formulaspace">
			<div id="lines">
				<div class="row">	
					<input type="text" class="ingredient" placeholder="Ingredient" style="width: 50%">
					<input type="number" class="perc" value="0" oninput="calculatePercSum()" style="width: 20%">
					<input type="number" class="gram" disabled value="" style="width: 20%">
					<input type="submit" onclick="removeLine(this)" style="width: 5%" value="-">
				</div>
			</div>		
		</div>
		<div class="col-3 empty"></div>
	</div>
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-3" id="formulaspace">
			<input type="submit" onclick="addLine()" id="addline" value="+ ADD LINE">	
		</div>		
		<div class="col-3 empty"></div>
	</div>
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-3" id="formulaspace">
			<input type="text" id="sum" disabled value="Sum:" style="width: 50%">
			<input type="number" id="percsum" disabled value="" style="width: 20%">
			<input type="number" id="gramsum" disabled value="" style="width: 20%">
		</div>
		<div class="col-3 empty"></div>
	</div>
	<div class="row">
		<div class="col-2 empty"></div>  	
		<div class="col-3" id="formulaspace">
			<input type="submit" onclick="calculate(0.3)" value="30g">
			<input type="submit" onclick="calculate(0.5)" value="50g">
			<input type="submit" onclick="calculate(1)" value="100g">
			<input type="submit" onclick="calculate(1.5)" value="150g">
			<input type="submit" onclick="calculate(2)" value="200g">
			<input type="submit" onclick="calculate(2.5)" value="250g">
			<input type="submit" onclick="calculate(3)" value="300g">
			<input type="submit" onclick="calculate(3.5)" value="350g">
			<input type="submit" onclick="calculate(4)" value="400g">
			<input type="submit" onclick="calculate(5)" value="500g">
		</div>
		<div class="col-3 empty"></div>
	</div>
	<div class="row" id="tohide">
		<div class="col-2 empty"></div>  	
		<div class="col-3" id="formulaspace">
			<div id="notes"></div> <!--note section appears here--->
			<input type="submit" id="addnotes" onclick="toggleNotes();" value="ADD / DELETE NOTES">	  
		</div>
		<div class="col-3 empty"></div>
	</div>
	<div class="row hide">
		<div class="col-2 empty"></div>  	
		<div class="col-3" id="formulaspace" style="padding-bottom: 50px"><input type="submit" id="print" onclick="window.print();" value="PRINT"></div>
		<div class="col-2 empty"></div>
	</div>		 		
</div>
<!---------------------------------script for calculations-------------------------------------------->
<script language="javascript">
	var lineCount = 0;
	var showNotes = false;
	var percsum = 0.0;
	var gramsum = 0.0;
	var inGrams = 0.0;

	var percentages = document.getElementsByClassName("perc");
	var grams = document.getElementsByClassName("gram");
	var percSumElement = document.getElementById("percsum");
	var gramSumElement = document.getElementById("gramsum");

	window.addEventListener("load",function() { calculatePercSum();});

   	function calculatePercSum() {
   		for (i = 0; i < percentages.length; i++) {
   			percsum += parseFloat(percentages[i].value); /*because string*/
   		}
   		percSumElement.value = percsum;
   		if (percsum != 100) {
   			percSumElement.style.color = "red";
   		}
   		else {
   			percSumElement.style.color = "#292626";
   		}
   		percSumElement.value = percsum;
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

	function addLine() {
		var addRow = document.createElement("div");
		addRow.setAttribute("class", "row");
		addRow.innerHTML = '<input type="text" class="ingredient" placeholder="Ingredient" style="width: 50%"><input type="number" class="perc" value="0" oninput="calculatePercSum()" style="width: 20%"><input type="number" class="gram" disabled value="" style="width: 20%"><input type="submit" onclick="removeLine(this)" style="width: 5%" value="-">';
		document.getElementById("lines").appendChild(addRow); /*just using innerHTML without child loses all user's input values*/
	}

	function removeLine(e) { /*only for extra lines, not less than. Delete from where it's called*/
		e.parentElement.remove();
		calculatePercSum();
	}

	function toggleNotes() {
		var noteElement = document.getElementById("notes");
		var div = document.getElementById("tohide");
		if (showNotes == false) {

			noteElement.innerHTML = '<h5>Notes</h5><textarea class="noborder" style="width: 95%; resize: vertical;"></textarea>';
			div.className= "row";
			showNotes = true;
		}
		else {
			noteElement.innerHTML = '';
			div.className= "row hide";
			showNotes = false;
		}
	}
</script>
<div class="row smallseparator"></div>
<custom-footer></custom-footer>	
</body>
</html>
