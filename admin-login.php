<!DOCTYPE html>
<html lang="en">
<?php require_once("include/common.php"); 
addHead("Admin login | Art of Formulation", "Administrator login");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------page----------------------------------->
<div class="row separator"></div>
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>Administrator login</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<div class="row">
	<div class="col-2 empty"></div>
	<div class="col-4 acenter">
		<form action="/include/login.php" method="POST">	  
			<div class="loginfield"><input type="text" placeholder="Administrator" name="adminname" value="" required></div>
			<div class="loginfield"><input type="password" placeholder="Password" name="password" value="" required></div>
			<input type="submit" name="login" value="LOG IN">
		</form>
	</div>	 
	<div class="col-2 empty"></div>
</div>
<div class="row largeseparator"></div>			                    
<custom-footer></custom-footer>
</body>
</html>
