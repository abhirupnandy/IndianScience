<?php
    header( "refresh:5;url=list_inst.php" );
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
                            <a class="dropdown-item" href="grants.php">Research Grants</a>
                            <a class="dropdown-item" href="social-media.php">Social Media Visibility</a>
                            <a class="dropdown-item" href="sdg_research.php">SDG based Research</a>
                            <a class="dropdown-item active" href="top_inst.php">Top Institutions</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!-- END nav -->
</section>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2">
                    <span class="mr-2">
                        <a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                <h1 class="mb-0 bread">Top Institutions</h1>
            </div>
        </div>
    </div>
</section><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3" id="introduction">Page under construction</h2>
                <p>
	                Redirecting to List of Institutions in 5 secs...<br>
                </p>
            </div>
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        <li><a href="#introduction">Indian Research Output <span class="ion-ios-arrow-forward"></span></a></li>
                        <li><a href="#compare">Comparison with other countries<span class="ion-ios-arrow-forward"></span></a></li>
                        <li><a href="#sub_dist">Subject-area Distribution<span class="ion-ios-arrow-forward"></span></a></li>
                        <li><a href="#sub_analysis">Subject-area Analysis<span class="ion-ios-arrow-forward"></span></a></li>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">India</a>
                        <a href="#" class="tag-cloud-link">Research Output</a>
                        <a href="#" class="tag-cloud-link">Dimensions</a>
                        <a href="#" class="tag-cloud-link">World Data</a>
                        <a href="#" class="tag-cloud-link">Ranks</a>
                        <a href="#" class="tag-cloud-link">Subjects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- .section -->
<div class="container pb-5 mb-5">
    <h2 class="mb-3" id="compare">Heading 2</h2>
    <p>
        Paragraph 2
    </p>
</div>

<?php include "footer.php" ?>
