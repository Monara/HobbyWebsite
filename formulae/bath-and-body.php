<!DOCTYPE html>
<html lang="en">
<?php require_once("../include/common.php"); 
addHead("Bath & Body | Art of Formulation", "All DIY bath and body formulas: bath products, body washes, body scrubs, lotions, creams, scents, soaps.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------page----------------------------------->
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>All bath & body formulas</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<!---------------------------------------------posts-------------------------------------->
<?php getCatPosts("bath and body", true);?> 
<div class="row smallseparator"></div>	
<custom-footer></custom-footer>
</body>
</html>
