<!DOCTYPE html>
<html lang="en">
<?php require_once("include/common.php"); 
addHead("Articles | Art of Formulation", "Browse cosmetic chemistry related articles here.");?>
<body>
<custom-header></custom-header>
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>Articles</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<!-----------------------------------------posts------------------------------------->
<?php getCatPosts("articles", true);?> 
<div class="row smallseparator"></div>
<custom-footer></custom-footer>
</body>
</html>
