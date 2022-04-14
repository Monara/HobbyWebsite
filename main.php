<!DOCTYPE html>
<html lang="en">
<?php require_once("include/common.php"); 
addHead("Art of Formulation", "Welcome to a science-based DIY cosmetic formulation page!");?>
<body>
<custom-header></custom-header>
<!-----------------------------------------------gallery------------------------------------------>
<div class="page">
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-4" id="gallerycontainer">
	  		<div class="gallery"><img src="/img/background1.jpg" style="width:100%" alt="Bubbles">
	  			<div class="imgtext"><h4>Welcome to my science-based cosmetic formulation page</h4></div>
	  		</div>	
	  		<div class="gallery"><img src="/img/background2.jpg" style="width:100%" alt="Skincare">
	  			<div class="imgtext"><a href="formulae.php"><h4>Click here to browse my formulas</h4></a></div>
	  		</div>
	  		<div class="gallery"><img src="/img/background3.jpg" style="width:100%" alt="Woman at the computer">
	  			<div class="imgtext"><a href="formulator.php"><h4>Drop the calculator - try the formulator</h4></a></div>
	  		</div>	
	  		<a class="prev" onclick="changeImage(-1)">&#10094;</a>
	 		<a class="next" onclick="changeImage(1)">&#10095;</a>
		</div>		
		<div class="col-2 empty"></div>	
	</div>
	<!-------------------------------------------posts---------------------------------------------->
	<div class="row">
		<div class="col-1 empty"></div>
		<div class="col-6 pagetitle">
			<h1>Newest</h1>
			<hr>
		</div>
		<div class="col-1 empty"></div>
	</div>
	<?php getNewestPosts(6);?> 
	<div class="row smallseparator"></div>
</div>	
<!------------------FOOTER------------------------------------------------>		
<custom-footer></custom-footer>
<!-- -------------------------------script for gallery------------------------------------------ -->
<script language="javascript">
	var index = 0;
	var i = 0;
	var timer;
	var gallerycontainer;

	window.addEventListener("load",function() {
    showImage(index);
    timer = setInterval(changeImageAuto, 5000);
	gallerycontainer = document.getElementById("gallerycontainer");
	gallerycontainer.addEventListener("mouseenter", pause);
   	gallerycontainer.addEventListener("mouseleave", resume);
   	});

	function changeImage(n) { /*clear timer if user interacts*/
		pause();
		i = index+n;
  		showImage(i);
  		resume();
	}

	function changeImageAuto() {
		i = index+1;
		showImage(i);
	}

	function showImage(n) {
  		var images = document.getElementsByClassName("gallery");
  			for (j=0; j<images.length; j++) {
    			images[j].style.display = "none"; /*all images hidden*/
 			 }

  			if (n > images.length-1) {index = 0;}
  			else if (n < 0) {index = images.length-1;}
  			else {index = n;}
  		images[index].style.display = "block"; /*show one image*/
	}

	function pause() {
   		clearInterval(timer);
   	}

   	function resume() {
   		clearInterval(timer);
   		timer = setInterval(changeImageAuto, 5000);
   	} 
</script>
</body>
</html>
