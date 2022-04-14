<?php 

function addHead($title, $desc) {
	echo '<head>
	<meta charset="UTF-8" name="viewport" content="initial-scale=1">
	<meta name="msvalidate.01" content="64492985CF785279C3AC6B9B9B202E0B">
	<meta name="description" content="'.$desc.'">
	<link href="/include/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" media="print" href="/include/print.css">
	<link rel="stylesheet" href="/include/font-awesome-css/css/font-awesome.min.css">
	<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="/img/favicon/site.webmanifest">
	<script src="/include/header.js" type="text/javascript" defer></script>
	<script src="/include/footer.js" type="text/javascript" defer></script>
	<script src="/include/commentsection.js" type="text/javascript" defer></script>
	<title>'.$title.'</title>
	</head>';
}

function connectSQL($database) {
	$connection = mysqli_connect("localhost", "root", "", $database);
	return $connection;
}


function getCatPosts($cat, bool $maincat) { //get posts from main or sub category
	$default_img_path = '\'/img/default.jpg\'';
	$connection = connectSQL("blogposts");
	if ($connection) {
		if ($maincat == true) {
        	$query = "SELECT * FROM posts WHERE posts.maincat='".$cat."' ORDER BY posts.pdate DESC;";
        }	
        elseif	($maincat == false) {
        	$query = "SELECT * FROM posts WHERE posts.subcat='".$cat."' ORDER BY posts.pdate DESC;";
        }	
        	$result = $connection->query($query);	
        	$emptypage = true; 
	        while($row = $result->fetch_assoc()) {
	        	$date = date('M j, Y', strtotime($row["pdate"]));
	        	echo '<div class="row smallseparator"></div>
	        		<div class="row">
						<div class="col-2 empty"></div>
						<div class="col-2 acenter perc40"><img id="preview" src="'.$row["img"].'" onerror="this.onerror=null;this.src='.$default_img_path.'" alt="'.$row["ptitle"].'"></div>
		  				<div class="col-2 posttext perc40"><a href="'.$row["paddr"].'">
		  					<h3>'.$row["ptitle"].'</h3>
		  					<p>'.$row["pdescription"].'</p></a>
			  					<div class="postinfo">
			  						<hr>
			  						<div class="col-3 perc30"><p>'.$date.'</p></div>
			  						<div class="col-5 aright perc60"><p>posted in '.$row["maincat"].', '.$row["subcat"].'</p></div>
			  					</div>
			  			</div>								
						<div class="col-2 empty"></div>
					</div>';
				$emptypage = false;
	        }
	}        	    
    else {
    	echo "Cannot connect to database.";
    }
    if ($emptypage) {
    	echo '<div class="row">
					<div class="col-2 empty"></div>
					<div class="col-4 rel"><img src="/img/flowers.png" style="width: 100%; opacity: 0.8;" alt="No posts found.">
					<div class="imgtext"><h4>Under construction:<br>coming soon</h4></div>
					</div>
					<div class="col-2 empty"></div>
				</div>
				<div class="row separator"></div>';
    }					
}

function getNewestPosts(int $n) {
	$i = 0;
	$default_img_path = '\'/img/default.jpg\'';
	$connection = connectSQL("blogposts");
	if ($connection) {
        	$query = "SELECT * FROM posts ORDER BY posts.pdate DESC;";
        	$result = $connection->query($query);
	        while($row = $result->fetch_assoc() and $i < $n) {

	        	$date = date('M j, Y', strtotime($row["pdate"]));
	        	echo '<div class="row smallseparator"></div>
	        		<div class="row">
						<div class="col-2 empty"></div>
						<div class="col-2 acenter perc40"><img id="preview" src="'.$row["img"].'" onerror="this.onerror=null; this.src='.$default_img_path.'" alt="'.$row["ptitle"].'"></div>
		  				<div class="col-2 posttext perc40"><a href="'.$row["paddr"].'">
		  					<h3>'.$row["ptitle"].'</h3>
		  					<p>'.$row["pdescription"].'</p></a>
			  					<div class="postinfo">
			  						<hr>
			  						<div class="col-3 perc30"><p>'.$date.'</p></div>
			  						<div class="col-5 aright perc60"><p>posted in '.$row["maincat"].', '.$row["subcat"].'</p></div>	
			  					</div>	
						</div>				
						<div class="col-2 empty"></div>
					</div>';
				$i++;	
	        }
	}        	    
    else{
    	echo "Cannot connect to database.";
    }	    
}


function getRandomFormulaPost() {
	$default_img_path = '\'/img/default.jpg\'';
	$connection = connectSQL("blogposts");
	if ($connection) {
        	$query = 'SELECT * FROM posts WHERE posts.maincat="face" OR posts.maincat="hair" OR posts.maincat="bath & body" ORDER BY RAND() LIMIT 1;';
        	$result = $connection->query($query);
	        if ($row = $result->fetch_assoc()) {
	        	$date = date('M j, Y', strtotime($row["pdate"]));
	        	echo '<div class="row smallseparator"></div>
	        		<div class="row">
						<div class="col-2 empty"></div>
						<div class="col-2 acenter perc40"><img id="preview" src="'.$row["img"].'" onerror="this.onerror=null; this.src='.$default_img_path.'" alt="'.$row["ptitle"].'"></div>
		  				<div class="col-2 posttext perc40"><a href="'.$row["paddr"].'">
		  					<h3>'.$row["ptitle"].'</h3>
		  					<p>'.$row["pdescription"].'</p></a>
			  					<div class="postinfo">
			  						<hr>
			  						<div class="col-3 perc30"><p>'.$date.'</p></div>
			  						<div class="col-5 aright perc60"><p>posted in '.$row["maincat"].', '.$row["subcat"].'</p></div>	
			  					</div>		
		  				</div>				
						<div class="col-2 empty"></div>
					</div>';	
	        }
	}        	    
    else {
    	echo "Cannot connect to database.";
    }
}

?>
