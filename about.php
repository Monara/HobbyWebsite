<!DOCTYPE html>
<html lang="en">
<?php require_once("include/common.php"); 
addHead("About | Art of Formulation", "About the creator of Art of Formulation");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------page----------------------------------->
<div class="row">
	<div class="col-1 empty"></div>
	<div class="col-6 pagetitle">
		<h1>About</h1>
		<hr>
	</div>
	<div class="col-1 empty"></div>
</div>
<div class="row col-8 small-separator"></div>
<div class="row">
	<div class="col-3 empty"></div>
	<div class="about col-2"><img src="/img/woman.jpg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:100%" alt="Woman"></div>
	<div class="col-3 empty"></div>
</div>
<div class="row">
	<div class="col-2 empty"></div>
	<div class="col-4 abouttext">
		<h2 class="acenter">Hi there!</h2>
		<p class="text">I am a cosmetic chemistry enthusiast residing in Northern Europe. 
I have always been interested in all sorts of DIY, so stumbling upon soap making as well as skincare formulation later on was only a question of time.
I have learned a lot in this relatively short time in an attempt to replace as much as it is feasible of store-bought skincare products with my own. 
With two notebooks full of failed and successful experiments, I decided to start documenting this journey of learning on the wider horizons.<br><br>
Wanting to dive into web development was another motivator for this website coming to life. I learned a lot while designing and programming it from scratch, using HTML, CSS, Javascript, PHP, and SQL.
Currently I am working on another unrelated project.<br><br>
There is so much content on cosmetic chemistry, especially in terms of DIY. 
Regardless, so much of it is riddled with clearly unsafe or unscientific practices that it is important to have voices of reason (which I shall attempt to be) more prominent.
 As a disclaimer, I am not a professional however, and if you do replicate and use any of the products, do it at your own risk.</p>
		<h2 class="aright">-Monika</h2>
	</div>
	<div class="col-2 empty"></div>
</div>
<!---------------------------------------------------contact----------------------->
<div class="row">
	<div class="col-2 empty"></div>
	<div class="col-4" id="contact">
		<h2>Contact me</h2>
	  	<form action="" method="POST">
		    <input type="text" class="input" name="name" maxlength="50" placeholder="Name" required>
		    <input type="email" class="input" name="email" maxlength="50" placeholder="Email" required>
		    <textarea class="input" name="message" maxlength="200" placeholder="Message (max. 200 characters)" style="height:150px" required></textarea>
		    <div class="h-captcha" data-sitekey="5a3712d4-4622-4245-a780-a25de8584d6d"></div>
		    <input type="submit" name="contactsubmit" value="SEND">
	  	</form>
	</div>
	<div class="col-2 empty"></div>
</div>	 
<custom-footer></custom-footer>
<script src='https://js.hcaptcha.com/1/api.js' async defer></script>
<?php require_once("include/contact.php"); 
if(isset($_POST['contactsubmit'])) { 
	sendContact();
}?> 
</body>
</html>
