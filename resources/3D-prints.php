<!DOCTYPE html>
<html lang="en">
<?php require_once("../include/common.php"); 
addHead("Articles | Art of Formulation", "Browse the articles on various skincare formulation topics.");?>
<body>
<custom-header></custom-header>
<!---------------------------------------------postpage----------------------------------->
<div class="postpage">	
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-4">
			<h3>3D printed soap holders</h3>
		</div>
		<div class="col-2 empty"></div>
	</div>
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-4">
			<h6>November 15, 2021 &emsp;| &emsp; <a href="/resources.php">Resources</a></h6>
		</div>
	</div>
	<!---------------------------------------------posts-------------------------------------->
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-3">
			<p>Keep your mini soaps and solid products from getting mushy in those inadequate soap holders, print your own! Fits max 6 x 6 cm items.
				<br><br>If you make and use solid products like shampoos and conditioners, you've probably noticed that many soap holders just don't cut it: 
				either there's no drainage at all and everything sits in pool of water, or there are a few holes that drain onto the side of your sink or shelf making a mess. 
				Since I started using 3D printers, I've been looking for something better, but most of the designs I found were larger 
				and lacking the aesthetic quality, so to speak. So I ended up designing my own, with 5 inserts to choose from. 
				<br><br>Do you or anyone else you know has access to a 3D printer? Follow the <a href="https://www.thingiverse.com/thing:5136332">thingiverse</a> link to get the files.
				<br><br>I printed these designs with white PLA, 100% infill, 0.4 cm nozzle. The main box took over 2.5 hours, and inserts less than 1 hour each. Here are some finished prints:
				<br><br><img src="/img/postimg/soapdish.jpeg" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:100%" alt="3 soap holders">
				<br><br>Choice of inserts:
				<br><br><img src="/img/postimg/insert1.JPG" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:70%" alt="Soap holder insert 1">
				<br><br><img src="/img/postimg/insert2.JPG" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:70%" alt="Soap holder insert 2">
				<br><br><img src="/img/postimg/insert3.JPG" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:70%" alt="Soap holder insert 3">
				<br><br><img src="/img/postimg/insert4.JPG" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:70%" alt="Soap holder insert 4">
				<br><br><img src="/img/postimg/insert5.JPG" onerror="this.onerror=null; this.src='/img/default.jpg'" style="width:70%" alt="Soap holder insert 5">
			</p>
		</div>
		<div class="col-3 empty"></div>
	</div>
	<div class="row smallseparator"></div>	 
</div>
<!---------------------------------------------------comment section----------------------------------->
<div class="commentsection">
	<comment-section></comment-section>
	<?php require_once("../include/comments.php");
	$link="/resources/3D-prints.php";
		getComments($link);
		if(isset($_POST['commentsubmit'])) { 
				setComment($link);
		}?>
</div>	
<!------------------FOOTER------------------------------------------------>		
<custom-footer></custom-footer>
<script src='https://js.hcaptcha.com/1/api.js' async defer></script>
</body>
</html>
