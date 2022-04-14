<?php date_default_timezone_set("Europe/Helsinki");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../../../include/common.php"); 
addHead("Bath & Body | Art of Formulation", "A formula for a light body scent: Florida water.");?>
<body>
<!-----------------------------header--------------------------------------------------->
	<custom-header></custom-header>

<!---------------------------------------------postpage----------------------------------->
	<div class="postpage">
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-4">
					<h3>Florida water</h3>
				</div>
				<div class="col-2 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-4">
				<h6>October 7, 2021 &emsp;| &emsp; <a href="/formulae/bath-and-body.php">Bath & Body</a> > <a href="/formulae/bath-and-body/scents.php">Scents</a></h6>
			</div>
		</div>
<!---------------------------------------------post-------------------------------------->
		
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3">
				<p>There is so much to learn about perfumery - so many materials including essential oils and aroma chemicals that can be combined in endless ways. It is as fascinating as it is expensive to study. So, as an interesting starting point before aroma chemicals come to be to make everything so much more complex, I perused some old perfumery books that are available online.<br><br>I learned that Eau de Cologne, which later became a generic term associated with men's aftershave, was invented in 1709 by Giovanni Maria Farina, who captured the essence of the Italian spring and named it after the city he had been residing in. It was meant to be used by both men and women, it cost a fortune, and it has been in manufacture to this day. For this reason, the original formula remains a secret: but there have been many variations and many formulas inspired by this scent since the 18th century. I have seen different formulas containing citrus oils, rosemary, melissa, lavender, and so on. <br><br>But I decided to start somewhere else - with Florida water - which is an American version of Eau de Cologne that was introduced in 1808. It generally contains citrus oils, lavender, and clove oil. Which describes the formula that I found in <em>Perfumes and Their Preparations</em> published in 1892 <a href="https://archive.org/details/perfumestheirpre00aski/page/174/mode/2up?ref=ol&view=theater">[p. 175]</a>:</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>

		<div class="row smallseparator"></div>	 

		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-2"><img src="/img/postimg/floridawater.png" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:100%" alt="Perfume formula"></div>
			<div class="col-4 empty"></div>
		</div>	

		<div class="row smallseparator"></div>

		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3">
				<p>As you can see, the measurements are unfamiliar. Grain? It appears it was a measurement denoting the "perfect" size of a grain, measuring at approximately 64.8 mg. So what we get from the conversion is:
				<br><br>Bergamot oil, 3.89g (35.11% of oil part)
				<br>Lemon oil, 5.83g (52.62%)
				<br>Lavender oil, 0.97g (8.75%)
				<br>Clove oil, 0.39g (3.52%)
				<br><br>So far, so good. But the alcohol is written in volume, and there's so much of it. Even assuming the US quart (which is smaller than Imperial), and assuming pure ethyl alcohol (which is lighter - 785g per litre), the whole things would come out at 11.08 / 3714.62 = ~ 0.3 % concentration at most (it is listed in the book as a handkerchief perfume after all). Since that sounds too subtle for this day and age, why not keep the same proportions of perfume but increase the concentration. But what limits us here is safety, of course. Essential oils can't just be added willy nilly, especially citrus oils due to phototoxicity (and safer furocoumarin-free essential oils do cost more). That's a case for <em>natural doesn't mean better</em>. These compounds are awesome for the plants as a defense mechanism against insects and such, but not great for humans in causing phytophotodermatitis, also known as "margarita burns".
				<br><br>Thankfully, we have regulatory bodies that are dedicated to investigating the safety limits of such compounds. International Fragrance Association (IFRA) is one of them. They have certain limits for particular categories (since certain body parts will be more sensitive than others). Perfume generally belongs to category 4 ("Fragrancing products generally applied to neck, face and wrists"), it implies that it won't be applied on the armpits (which is category 2 as a body mist). To look up the limits, we need to know the constituents of these oils.
				<br><br>For instance, clove oil contains eugenol. If you look that up, eugenol is allowed up to 2.5% concentration in category 4, and clove bud oil is listed as containing 82% of eugenol. So no more than 2.95% of clove bud oil as a general rule. Lemon oil is regulated to up to 2%. Now, for bergamot. If you look at <a href="https://en.wikipedia.org/wiki/Bergamot_essential_oil">Wikipedia</a>, bergamot oil contains around 0.237% of bergapten, and our limit according to IFRA is 0.0015%. That works out to 1.58% of bergamot oil in terms of bergapten, one of the furocoumarins. But that's not the only dangerous component there. If you dig around more, you find bergamot oil deemed safe up to 0.4%, and that's the lowest safety limit of all our oils, so the formula has to be centered around it <a href="https://ifrafragrance.org/pdf/web/viewer.html?file=/standards/IFRA_STD_087.pdf">[IFRA]</a>. Great that we don't have to calculate everything ourselves. They also advise caution in case there's more potentially phototoxic ingredients in a product.
				<br><br>Let's simplify the oil percentages first. So, bergamot 35%, lemon 52.5%, lavender 9%, clove bud 3.5% of the fragrance part. That way we quickly see that if we use 99% ethanol + 1% fragrance mix, we'll have 0.35% bergamot in our final product. Easy!</p>
			</div>	
			<div class="col-3 empty"></div>
		</div>

		<div class="row smallseparator"></div>

		<div class="row">
			<div class="col-2 empty"></div>
			<div class="col-3" id="formulaspace"><h3>Revised Askinson's Florida Water </h3></div>
			<div class="col-3 empty"></div>
		</div>		 
		<div class="row">
				<div class="col-2 empty"></div>
				<div class="col-3" id="formulaspace"> 	
					<div class="col-4 perc40t perc40">
						<h5>Ingredient</h5>
						<input type="text" class="ingredient" disabled value="Ethanol (95% and up)">
						<input type="text" class="ingredient" disabled value="Bergamot oil ">
						<input type="text" class="ingredient" disabled value="Lemon oil">
						<input type="text" class="ingredient" disabled value="Lavender oil">
						<input type="text" class="ingredient" disabled value="Clove oil">

						<input type="text" class="ingredient" disabled value="Sum:">
					</div>
					<div class="col-2 perc20t perc20">
						<h5>percent,&nbsp;%</h5>
						<input type="number" class="perc" disabled value="99">
						<input type="number" class="perc" disabled value="0.35">
						<input type="number"class="perc" disabled value="0.525">
						<input type="number" class="perc" disabled value="0.09">
						<input type="number" class="perc" disabled value="0.035">
						
						
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
				<input type="submit" onclick="calculate(1)" value="100g">
				<input type="submit" onclick="calculate(2)" value="200g">
				<input type="submit" onclick="calculate(3)" value="300g">
				<input type="submit" onclick="calculate(4)" value="400g">
				<input type="submit" onclick="calculate(5)" value="500g">
			</div>
			<div class="col-3 empty"></div>
		</div>
		<div class="row">
			<div class="col-2 empty"></div>  	
			<div class="col-3" id="formulaspace">
				<h5>Notes</h5>
				<p>Since the amounts are so low, I definitely recommend 200g (makes ~ 230 ml) as a starting amount. This is not a perfumer's but rather a formulator's approach, since there is still a lot of counting in drops in perfumery and proportions are counted as parts per thousand (undeniably, grams are much more reliable if you have a good scale). If you, however, are dedicated and willing to dillute your materials, you could preserve the original percentages. And definitely let the finished formula sit - it smelled much more balanced already a few days later. Keep in mind at 1% the scent is quite weak.<br><br> This is mostly ethanol, so there's no need for other preservatives. <br><br>If you get your hands on furocoumarin-free bergamot oil, you can up the overall fragrance concentration from 1% to 3%, or more if your lemon oil is also FCF. This formula also makes a nice room spray, as such I'd recommend up to 5% fragrance concentration.</p>
			</div>
			<div class="col-2 empty"></div>
		</div>	 	
		<div class="row smallseparator"></div>		
	</div>

<!---------------------------------------------------comment section----------------------------------->

<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../../../include/comments.php");
		$link="/formulae/bath-and-body/scents/florida-water.php";
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
