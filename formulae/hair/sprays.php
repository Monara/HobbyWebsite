<!DOCTYPE html>
<html lang="en">
<?php require_once("../../include/common.php"); 
addHead("Hair | Art of Formulation", "DIY formulas for conditioning hair sprays.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------page----------------------------------->
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>Sprays</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<!---------------------------------------------posts-------------------------------------->
<?php getCatPosts("sprays", false);?> 
<div class="row smallseparator"></div>
<custom-footer></custom-footer>
</body>
</html>
