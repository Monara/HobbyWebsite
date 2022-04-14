<!DOCTYPE html>
<html lang="en">
<?php require_once("../include/common.php"); 
addHead("Face | Art of Formulation", "All DIY formulas for face: cleansers, creams, serums, lip care, makeup, toners.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------page----------------------------------->
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>All formulas for face</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<!---------------------------------------------posts-------------------------------------->
<?php getCatPosts("face", true);?> 
<div class="row smallseparator"></div>
<custom-footer></custom-footer>
</body>
</html>
