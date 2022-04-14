<!DOCTYPE html>
<html lang="en">
<?php require_once("../include/common.php"); 
addHead("Hair | Art of Formulation", "All DIY formulas for hair: hair balms, conditioners, gels, shampoos, and sprays.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------page----------------------------------->
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>All formulas for hair</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<!---------------------------------------------posts-------------------------------------->
<?php getCatPosts("hair", true);?> 
<div class="row smallseparator"></div>
<custom-footer></custom-footer>
</body>
</html>
