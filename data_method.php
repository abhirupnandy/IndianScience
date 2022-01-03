<?php
	include "header.php"
?>
<!-- BackToTop Button -->
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
<!-- NAVIGATION BAR -->
<section>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
			        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<form action="#" class="searchform order-lg-last">
				<div class="form-group d-flex">
					<button type="button" class="form-control search"><a href="index.php#section1">
							<span class="fa fa-search"></span></a></button>
				</div>
			</form>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="research_output.php" class="nav-link">Research Output</a></li>
					<li class="nav-item"><a href="citation.php" class="nav-link">Citations</a></li>
					<li class="nav-item"><a href="collab.php" class="nav-link">Collaboration</a></li>
					<li class="nav-item"><a href="gender.php" class="nav-link">Gender Distribution</a></li>
					<li class="nav-item"><a href="open_access.php" class="nav-link">Open Access</a></li>
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							More
						</a>
                        <div class="dropdown-menu item bg-warning text-dark" aria-labelledby="navbarDropdown" >
                            <a class="dropdown-item" href="social-media.php">Social Media Visibility</a>
                            <a class="dropdown-item" href="grants.php">Research Grants</a>
                            <a class="dropdown-item" href="sdg_research.php">SDG related Research</a>
                            <a class="dropdown-item" href="major_inst.php">Major Institutions</a>
                            <a class="dropdown-item" href="list_inst.php">Institutional Reports</a>
                        </div>
					</li>
				</ul>
			</div>
		</div>
	</nav><!-- END nav -->
</section>
<div class="hero-wrap p-5" style="background-color: #FFA400">
    <div class="overlay"></div>
    <div class="container pt-4">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <h1 class="mb-0 bread">Data & Methodology</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg ftco-animate">
				<h2 class="mb-3" id="introduction">Data and Methodology</h2>
				<p class="text-justify">
					The Indian Science Reports portal provides indicators & values about research output, citations, authorship,
					international collaboration, gender distribution, open access, research grants and social media visibility etc.
					for the Indian research output during 2010-19. The portal not only present analytical results about Indian
					research but also compares the values with related values for some other major countries. The portal also
					includes institutional reports containing different analysis for more than 500 Indian institutions.
				</p>
				<p class="text-justify">
					The data for analysis is obtained from multiple sources and processed using standard scientometric,
					computational, network-theoretic and text-based methods. The
					<a href="https://app.dimensions.ai/discover/publication" style="text-decoration: none" target="_blank">
						Dimensions</a>
					scholarly database is taken as
					primary source of research metadata and inputs from several other sources such as
					<a href="https://www.altmetric.com/" style="text-decoration: none" target="_blank">
						Altmetric.com</a>
					and
					<a href="https://gender-api.com/" style="text-decoration: none" target="_blank">
						Gender API</a>
					etc. are also used. The portal only provides computed indicators of Indian scientific research
					and does not in any way expose any data taken from the different sources.
				</p>
				<p class="text-justify">
					In terms of methodological approach choices, we have used whole counting for research output values.
					The citations are analysed both as absolute counts as well as relative citation ratio. Cited percentage
					of research output is computed by identifying proportion of research output that got at least one or
					more citation. The collaboration patterns are identified from author affiliation field and a research
					paper is considered as an instance of international collaboration if it involves authors from at least
					two countries. A research paper is called Domestic-Single Institution if it involves authors from a
					single institution only. A research paper is denoted as Domestic- Multi Institution if it involves
					authors from at least two different institutions of the same country.
				</p>
				<p class="text-justify">
					The gender of the first author of each research paper is determined by using the GenderAPI service.
					Based on the value returned by the API, a research paper is categorised as female 1st authored or male
					1st authored depending on whether the first author is a female or male, respectively. Confidence
					level of more than 70% is used, i.e. gender determination by API is taken as successful if it returns
					an accuracy of more than 70% with it.
				</p>
				<p class="text-justify">
					The data for grants and open access availability are taken as obtained from the Dimensions database.
					The grants data for both domestic and international funding agencies is obtained and analysed. The open
					access availability in different forms (gold, green, bronze, hybrid) are captured and analysed.
				</p>
				<p class="text-justify">
					Several indicators, such as CAGR and h-type indices are computed as per their standard definitions.
					The computation of x-index and x(g) index is as per the idea proposed in
					<a href="https://link.springer.com/article/10.1007/s11192-021-04188-3" style="text-decoration: none" >Lathabai et al. (2021).</a>
					Some external data (such as international and
					<a style="text-decoration: none" href="https://www.nirfindia.org/home">NIRF</a>
					rankings) for selected Indian institutions are also
					obtained from respective sources and presented as it is. The description for institutions is obtained
					from Wikipedia and their logo is obtained from a web scrapping of Wikipedia and the institutional
					webpages.
				</p>
			</div>
		</div>
	</div>
</section> <!-- .section-->

<?php include "footer.php" ?>
