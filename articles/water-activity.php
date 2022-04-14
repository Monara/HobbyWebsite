<!DOCTYPE html>
<html lang="en">
<?php require_once("../include/common.php"); 
addHead("Articles | Art of Formulation", "The concept of water activity and how it affects the preservation system of your formulas.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------postpage----------------------------------->
<div class="postpage">	
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-4">
			<h3>Water activity and preservation</h3>
		</div>
		<div class="col-2 empty"></div>
	</div>
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-4">
			<h6>October 5, 2021 &emsp;| &emsp; <a href="/articles.php">Articles</a></h6>
		</div>
	</div>
	<!---------------------------------------------posts-------------------------------------->
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-3">
<p>As the saying, water is the source of all life. Not just to us people, but also to all the nasties that want to live, eat, and prey on your precious creams.
<br><br>First of all, what are we concerned about? What are those microorganisms? There's a few major groups that you may have seen on the descriptions of preservatives: bacteria (gram positive and gram negative types, which are distinguished by the difference in their cellular walls), mould, and yeast. To illustrate, I found an interesting study on what were the most common contaminants in on-the-spot made cosmetic products <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6994525">[Kim et al.]</a>:

<br><br><img src="/img/postimg/contamination.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:100%" alt="Common microorganisms in cosmetics">
					
<br><br>We really want to be avoiding the bacteria, as some of them can cause acne and even eye infections, according to the authors.
<br><br>What about water activity? Water activity in itself refers to available, "unbound" water and it can range from 0.0 to 1.0. While a formula may consist mostly of water, it does not mean that the water in it is usable and available to microorganisms. Thus, water content =/= water activity. 
<br><br>However, low water activity does not mean that there's no microorganisms: they may be laying in wait for better conditions to proliferate. It is generally one of the possible approaches for aiding preservation, not the whole strategy as it would quite limiting to implement fully.   
<br><br>Below you can a table on Minimum Water Activity Limits for Growth of Microorganisms compiled by Anthony J. Fontana, Jr <a href="https://onlinelibrary.wiley.com/doi/pdf/10.1002/9780470376454.app4">[Fontana]</a>. As you can see, bacteria tend to have a need for higher water activity than mould and yeast.
			
<br><br><img src="/img/postimg/wateractivity.JPG" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:100%" alt="Table on microorganisms and required water activity">

<br><br>You can see why a substance such as honey could be considered self-preserving: on it's own the water activity is around 0.5, not allowing microorganisms to thrive. 
Add some to your water-containing formula, and you give them a feast.
<br><br>What can we use to lower water activity? For starters, there are plenty of humectants that will make water unavailable, such as glycerin, sorbitol (and other sugar alcohols), glycols. Salts and more widely electrolytes (such as sodium lactate, sodium chloride) contribute to it as well. Every material will have different impact. For instance, 30% of glycerin mostly removes the issue of bacteria, and in 70% glycerin there should be no microbial proliferation <a href="https://www.researchgate.net/publication/266083369_Optimization_of_cosmetic_preservation_Water_activity_reduction">[Fontaine-Vive et al.]</a>:
		
<br><br><img src="/img/postimg/glycerin.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:60%" alt="Glycerin content and water activity">
			
<br><br>Here's a table on water activity with propylene glycol <a href="https://www.semanticscholar.org/paper/Determination-and-correlation-of-the-water-activity-Alzamora-Chirife/85fbf2908a3ded0e1b16324e4ee16f39acf667a4">[Alzamora et al.]</a>:
		
<br><br><img src="/img/postimg/propyleneglycol.JPG" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:60%" alt="Propylene glycol content and water activity">
			
<br><br>As you can see, these are large numbers but they can be applied in certain kinds of formulas (it is important to remember though that small amounts may encourage microbial growth as food, as I remember being the case with 5% or less of glycerin - the source escapes me now). Overall this explains why water-and-water-contact-free products might not have preservatives. It also shows that it is worthwhile to try and lower the water activity to minimize the risk of various bacteria.</p>
		</div>	
		<div class="col-3 empty"></div>
	</div>
	<div class="row smallseparator"></div>
</div>
<!---------------------------------------------------comment section----------------------------------->
<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../include/comments.php");
	$link="/articles/water-activity.php";
		getComments($link);
		if(isset($_POST['commentsubmit'])) { 
				setComment($link);
		}?>
</div>	
<!------------------FOOTER------------------------------------------------>		
<custom-footer></custom-footer>
<script src='https://js.hcaptcha.com/1/api.js' async defer></script>
</body>
</html>
