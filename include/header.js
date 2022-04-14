
class Header extends HTMLElement {

	constructor() {
		super();
	}

    connectedCallback() {

    	this.innerHTML=`
		   <div id="header">
				<div class="row">
					<nav class="col-3 navbar">
	  					<a href="/formulae.php">FORMULAE</a>
	  					<a href="/articles.php">ARTICLES</a>
	  					<a href="/resources.php">RESOURCES</a>
	  					<a href="/about.php">ABOUT</a>
					</nav>
					<div class="col-5">
						<div><img id="logo" src="/img/logo.png" alt="logo"></div>
						<div class="left">	
							<h1><a href="/main.php">ART OF FORMULATION</a></h1>
							<h5>adventures in cosmetic chemistry</h5>
						</div>	
					</div>
					<div class="col-3">
						<form action="https://duckduckgo.com/">
						<input type="hidden" name="sites" value="artofformulation.com">
						<input type="hidden" name="k8" value="#292626"/>
    					<input type="hidden" name="k9" value="#292626"/>
    					<input type="hidden" name="kx" value="#c0b0b0"/>
    					<input type="hidden" name="kj" value="#fafafa"/>
    					<input type="hidden" name="kt" value="belleza"/>
						<input type="search" placeholder="SEARCH..." id="search" maxlength="100" name="q">
						<input type="submit" style="visibility: hidden;"></form>
					</div>	
				</div>
			</div>`;
	}	

}

customElements.define('custom-header', Header);