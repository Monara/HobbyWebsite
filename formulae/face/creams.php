<!DOCTYPE html>
<html lang="en">
<?php require_once("../../include/common.php"); 
addHead("Face | Art of Formulation", "Make your own face creams. DIY formulas for face creams.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------page----------------------------------->
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>Face creams</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<!---------------------------------------------posts-------------------------------------->
<?php getCatPosts("creams", false);?> 
<div class="row smallseparator"></div>
<custom-footer></custom-footer>
</body>
</html>
