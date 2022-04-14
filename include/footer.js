
class Footer extends HTMLElement {

	constructor() {
		super();
	}

    connectedCallback() {

    	this.innerHTML=`
		   <div class="footer">
				<hr>
				<div class="row footermenu">
					<div class="col-2 empty"></div>
					<div class="col-1 box">
						<h6><a href="/formulator.php">Formulator</a></h6>
						<h6><a href="/resources/formulator-how-to.php">Formulator how-to</a></h6>
					</div>
					<div class="col-1 box">
						<h6><a href="/about.php#contact">Contact me</a></h6>
						<h6><a href="/privacy-policy.php">Privacy policy</a></h6>
					</div>
					<div class="col-1 box">
					<h6><a href="/terms-of-use.php">Terms of use</a></h6>
					<h6><a href="/admin-login.php">Admin login</a></h6></div>
					<div class="col-3 empty"></div>
				</div>
				<div class="row copyright">
					<div class="col-8"><h6>&#169; ART OF FORMULATION 2022</h6></div>
				</div>		
			</div>`;
	}	

}

customElements.define('custom-footer', Footer);