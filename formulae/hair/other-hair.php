<!DOCTYPE html>
<html lang="en">
<?php require_once("../../include/common.php"); 
addHead("Hair | Art of Formulation", "Various haircare formulas.");?>
<body>
<custom-header></custom-header>
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>Other formulas for hair</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<?php getCatPosts("other(hair)", false);?> 
<div class="row smallseparator"></div>		
<custom-footer></custom-footer>
</body>
</html>
