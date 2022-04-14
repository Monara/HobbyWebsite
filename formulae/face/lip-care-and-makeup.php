<!DOCTYPE html>
<html lang="en">
<?php require_once("../../include/common.php"); 
addHead("Face | Art of Formulation", "DIY formulas for lip products and makeup.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------page----------------------------------->
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>Lip care & makeup</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<!---------------------------------------------posts-------------------------------------->
<?php getCatPosts("lip care and makeup", false);?> 
<div class="row smallseparator"></div>	
<custom-footer></custom-footer>
</body>
</html>
