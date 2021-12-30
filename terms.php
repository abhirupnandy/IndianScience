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
                <h1 class="mb-0 bread">Terms of Use</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-degree-bg">

	<div class="container">
		<div class="row">
			<div class="col-lg ftco-animate">
				<h2 class="mb-3" id="introduction">Terms of Use</h2>
				<p class="text-justify">
                    The Indian Science reports portal is an academic exercise with the sole purpose of providing useful
                    quantitative indicators & values of Indian scientific research. It should, therefore, be used for academic
                    purposes only and should not be seen as an attempt for research performance assessment of India as
                    a country or any Indian institution covered. The portal is designed and maintained on a not-for-profit
                    basis and is free for access by all interested researchers, academicians and individuals.
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
                    etc. are also used. The portal only provides computed indicators of Indian scientific
                    research and does not in any way expose any data taken from the different sources.
                </p>
                <p class="text-justify">
                    The portal is free to use by any interested individual and it is clearly stated that the portal does
                    not captures any private data of the viewers, except any feedback forms that they may submit optionally.
                    The designers of the portal have obtained data from multiple sources containing metadata about
                    scientific research and computed various indicators by using standard scientometric approaches and
                    methods. The designers, therefore, cannot provide any certificate of accuracy of the data so obtained,
                    as it is something beyond the scope. The indicators & values are best suited to be used only for
                    academic reference purposes and should not be used for any commercial or non-commercial research
                    performance assessment and/ or ranking & evaluation purposes.
                </p>
			</div>
		</div>
	</div>
</section> <!-- .section-->

<?php include "footer.php" ?>
