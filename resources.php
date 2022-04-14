<!DOCTYPE html>
<html lang="en">
<?php require_once("include/common.php"); 
addHead("Resources | Art of Formulation", "Browse the articles on various resources that help you formulate and use your formulas.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------page----------------------------------->
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>Resources</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<!---------------------------------------------posts-------------------------------------->
<?php getCatPosts("resources", true);?> 
<div class="row smallseparator"></div>	
<custom-footer></custom-footer>
</body>
</html>
