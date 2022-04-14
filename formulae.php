<!DOCTYPE html>
<html lang="en">
<?php require_once("include/common.php"); 
addHead("Formulae | Art of Formulation", "The collection of all skincare formulas in one place. Browse formulas for face, hair, bath and body.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------page----------------------------------->
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>Formulae</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<div class="separator"></div>
<!---------------------------------------categories------------------------------------>
<div class="row">
	<div class="col-2 empty"></div>
	<div class="col-4">
		<div class="col-2">
			<div class="formulacategory acenter"><a href="/formulae/face.php"><h4 id="cat1">Face</h4><img id="face" src="/img/face.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" alt="Face of a woman"></a></div>
			<p class="acenter"><a href="/formulae/face/cleansers.php">CLEANSERS</a></p>
			<p class="acenter"><a href="/formulae/face/creams.php">CREAMS</a></p>
			<p class="acenter"><a href="/formulae/face/serums.php">SERUMS</a></p>
			<p class="acenter"><a href="/formulae/face/lip-care-and-makeup.php">LIP CARE & MAKEUP</a></p>
			<p class="acenter"><a href="/formulae/face/other-face.php">OTHER</a></p>
		</div>
		<div class="col-4">
			<div class="formulacategory acenter"><a href="/formulae/hair.php"><h4 id="cat2">Hair</h4><img id="hair" src="/img/hair.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" alt="Hair braid"></a></div>
			<p class="acenter"><a href="/formulae/hair/balms.php">BALMS</a></p>
			<p class="acenter"><a href="/formulae/hair/conditioners.php">CONDITIONERS</a></p>
			<p class="acenter"><a href="/formulae/hair/gels.php">GELS</a></p>
			<p class="acenter"><a href="/formulae/hair/shampoos.php">SHAMPOOS</a></p>
			<p class="acenter"><a href="/formulae/hair/sprays.php">SPRAYS</a></p>
			<p class="acenter"><a href="/formulae/hair/other-hair.php">OTHER</a></p>
		</div>
		<div class="col-2">
			<div class="formulacategory acenter"><a href="/formulae/bath-and-body.php"><h4 id="cat3">Bath & Body</h4><img id="bath" src="/img/bathandbody.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" alt="Soap dispenser"></a></div>
			<p class="acenter"><a href="/formulae/bath-and-body/bath-products.php">BATH PRODUCTS</a></p>
			<p class="acenter"><a href="/formulae/bath-and-body/body-washes.php">BODY WASHES</a></p>
			<p class="acenter"><a href="/formulae/bath-and-body/body-scrubs.php">BODY SCRUBS</a></p>
			<p class="acenter"><a href="/formulae/bath-and-body/lotions-and-creams.php">LOTIONS & CREAMS</a></p>
			<p class="acenter"><a href="/formulae/bath-and-body/scents.php">SCENTS</a></p>
			<p class="acenter"><a href="/formulae/bath-and-body/soaps.php">SOAPS</a></p>
			<p class="acenter"><a href="/formulae/bath-and-body/other.php">OTHER</a></p>
		</div>
	</div>			
	<div class="col-2 empty"></div>
</div>
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>Random formula</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<?php getRandomFormulaPost();?>
<div class="row smallseparator"></div>	
<custom-footer></custom-footer>
</body>
</html>
