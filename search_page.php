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
                        <div class="dropdown-menu item bg-warning text-dark" aria-labelledby="navbarDropdown">
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
                <h1 class="mb-0 bread">Search for concepts</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-degree-bg">
    <!-- SEARCH BAR -->
    <script type="text/javascript" src="concept_script.js"></script>
    <div id="section1">
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container-fluid px-md-0">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class=" w-100 rounded px-md-0 px-4">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8 py-4">
                                    <div class="row">
                                        <div class="col-md-4 d-flex align-items-start">
                                            <h2 class="mb-0 mx-3" style="font-size: 24px">
                                                Search for a Concept
                                            </h2>
                                        </div>
                                        <div class="col-md-9 d-flex align-items-center pt-3">
                                            <div class="container-fluid">
                                                <input type="text" class="form-control" id="search_concept"
                                                       placeholder="Search for a concept"
                                                       autocomplete="off"/>
                                                <div id="display_concept" class="text-dark"
                                                     style="z-index: 10; position: absolute;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</section> <!-- .section-->

<?php include "footer.php" ?>
