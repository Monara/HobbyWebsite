<!DOCTYPE html>
<html lang="en">
<?php require_once("../../include/common.php"); 
addHead("Bath & Body | Art of Formulation", "DIY formulas for body lotions and creams.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------page----------------------------------->
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>Lotions & creams</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<!---------------------------------------------posts-------------------------------------->
<?php getCatPosts("lotions and creams", false);?> 
<div class="row smallseparator"></div>
<custom-footer></custom-footer>
</body>
</html>
