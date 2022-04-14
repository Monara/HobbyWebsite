class CommentSection extends HTMLElement {

	constructor() {
		super();
	}

    connectedCallback() {

    	this.innerHTML=`
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-3"><hr><h5>Add a comment</h5></div>
		<div class="col-3 empty"></div>
	</div>
	<div class="row">
		<div class="col-2 empty"></div>  	
		<div class="col-2" class="addcomment">
			<form action="" method="POST">
			    <input type="text" class="input" name="cname" style="width:100%" maxlength="50" placeholder="Name" required> <!--varchar(50) datatype in sql-->
			    <textarea class="input" name="ctext" maxlength="250" placeholder="Comment (max. 250 characters)" style="height:120px" required></textarea> <!--TINYTEXT datatype in sql, max 255-->
			    <div class="h-captcha" data-sitekey="5a3712d4-4622-4245-a780-a25de8584d6d"></div>
			    <input type="submit" name="commentsubmit" value="ADD">
	  		</form>
		</div>	
		<div class="col-4 empty"></div>	
	</div>
	<div class="row smallseparator"></div>
	<div class="row">
		<div class="col-2 empty"></div>
		<div class="col-3"><hr><h5>Comments</h5></div>
		<div class="col-3 empty"></div>
	</div>`;
	}	

}

customElements.define('comment-section', CommentSection);