<?php include "header.php"; ?>
<style>
    .bottom-right {
        position: absolute;
        bottom: 1px;
        right: 10px;
    }

    hr {
        color: black;
        background-color: black
    }

    body {
        overflow-x: hidden;
    }

    .fullwrap {
        position: relative;
        max-width: 500px;
    }

    .fullwrap img {
        width: 100%;
    }

    .fullcap {
        box-sizing: border-box;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        text-align: center;
        padding-top: 10%;
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
    }

    .fullcap {
        visibility: hidden;
        font-weight: bolder;
        font-size: large;
        opacity: 0;
        transition: opacity 0.3s;
        padding: 10px;
    }

    .fullwrap:hover .fullcap {
        visibility: visible;
        opacity: 1
    }

    .fullwrap:hover img {
        visibility: visible;
        opacity: 0.2
    }
</style>
<!--NAVIGATION BAR -->
<section>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <form action="#" class="searchform order-lg-last">
                <div class="form-group d-flex">
                    <button type="button" class="form-control search">
                        <a href="#section1"> <span class="fa fa-search"></span></a>
                    </button>
                </div>
            </form>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="research_output.php" class="nav-link">Research Output</a></li>
                    <li class="nav-item"><a href="citation.php" class="nav-link">Citations</a></li>
                    <li class="nav-item"><a href="collab.php" class="nav-link">Collaboration</a></li>
                    <li class="nav-item"><a href="gender.php" class="nav-link">Gender Distribution</a></li>
                    <li class="nav-item"><a href="open_access.php" class="nav-link">Open Access</a></li>
                    <li class="nav-item dropdown">
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
    </nav>
    <!-- END nav -->
</section>
<!-- IMAGE CAROUSEL -->
<section>
    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
            <!-- 1 -->
            <div class="slider-item" style="background-image: url(images/inst/anna.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class=" row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <!--<h2>Wikipedia</h2>-->
                                <h1 class="mb-3">Anna University, Chennai</h1>
                                <div class="bottom-right" style="font-size: x-small;">
                                    <br>Image Source : timesofindia.indiatimes.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="slider-item" style="background-image: url(images/inst/aiims.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class=" row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <!--<h2>bhu website</h2>-->
                                <h1 class="mb-3">All India Institute of Medical Sciences,Delhi</h1>
                                <div class="bottom-right" style="font-size: x-small;">
                                    <br>Image Source : aiims.edu
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 3 -->
            <div class="slider-item" style="background-image: url(images/inst/iisc.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <!--<h2>iisc.ac.in</h2>-->
                                <h1 class="mb-3">Indian Institute of Science Bangalore</h1>
                                <div class="bottom-right" style="font-size: x-small;">
                                    <br>Image Source : iisc.ac.in
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4 -->
            <div class="slider-item" style="background-image: url(images/inst/iitkgp.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <!--<h2>iisc.ac.in</h2>-->
                                <h1 class="mb-3">Indian Institute of Technology Kharagpur</h1>
                                <div class="bottom-right" style="font-size: x-small;">
                                    <br>Image Source : iitkgp.wikia.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 5 -->
            <div class="slider-item" style="background-image: url(images/inst/iitbom.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <!--<h2>iisc.ac.in</h2>-->
                                <h1 class="mb-3">Indian Institute of Technology Bombay</h1>
                                <div class="bottom-right" style="font-size: x-small;">
                                    <br>Image Source : newsd.in
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 6 -->
            <div class="slider-item" style="background-image: url(images/inst/iitmad.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <!--<h2>iisc.ac.in</h2>-->
                                <h1 class="mb-3">Indian Institute of Technology Madras</h1>
                                <div class="bottom-right" style="font-size: x-small;">
                                    <br>Image Source : duexpress.in
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 7 -->
            <div class="slider-item" style="background-image: url(images/inst/iitdel.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <!--<h2>iisc.ac.in</h2>-->
                                <h1 class="mb-3">Indian Institute of Technology Delhi</h1>
                                <div class="bottom-right" style="font-size: x-small;">
                                    <br>Image Source : hindustantimes.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 8 -->
            <div class="slider-item" style="background-image: url(images/inst/univdel.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <!--<h2>iisc.ac.in</h2>-->
                                <h1 class="mb-3">University of Delhi</h1>
                                <div class="bottom-right" style="font-size: x-small;">
                                    <br>Image Source : dnaindia.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 9 -->
            <div class="slider-item" style="background-image: url(images/inst/barc.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <!--<h2>iisc.ac.in</h2>-->
                                <h1 class="mb-3">Bhabha Atomic Research Centre, Mumbai</h1>
                                <div class="bottom-right" style="font-size: x-small;">
                                    <br>Image Source : indianexpress.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 10 -->
            <div class="slider-item" style="background-image: url(images/inst/pgimer.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <!--<h2>iisc.ac.in</h2>-->
                                <h1 class="mb-3">Post Graduate Institute of Medical Education and Research</h1>
                                <div class="bottom-right" style="font-size: x-small;">
                                    <br>Image Source : mykrisndtkp.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- special -->
            <div class="slider-item" style="background-image: url(images/inst/bhu.jpg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <!--<h2>iisc.ac.in</h2>-->
                                <h1 class="mb-3">Banaras Hindu University</h1>
                                <div class="bottom-right" style="font-size: x-small;">
                                    <br>Image Source : news.careers360.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- DATA COUNTER -->
<section class="ftco-counter" id="section-counter" style="background-color: #fdbe34">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex">
                    <div class="text d-flex align-items-center">
                        <strong class="number" data-number="500">0</strong>
                    </div>
                    <div class="text-2 pl-5 p-lg-3">
                        <span>Institutions <br/>Covered</span>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate offset-lg-2">
                <div class="block-18 d-flex">
                    <div class="text d-flex align-items-center">
                        <strong class="number" data-number="10">0</strong>
                    </div>
                    <div class="text-2 pl-5 p-lg-3">
                        <span>Years of <br/>Data</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate offset-lg-1">
                <div class="block-18 d-flex">
                    <div class="text d-flex align-items-center">
                        <strong class="number" data-number="50">0</strong>
                        <div class="text-2 p-0 m-0 ">
                            <span style="font-size: xx-large">+</span>
                        </div>
                    </div>

                    <div class="text-2 pl-5 p-lg-3">
                        <span>Attributes <br/>Computed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- LOGOS -->
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
                <div class="media block-6 d-block text-center pt-md-4">
                    <a href="research_output.php" style="text-decoration: none">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fa  fa-files-o"></span>
                        </div>
                        <div class="media-body p-2 mt-3">

                            <h3 class="heading">Research Output</h3>
                            <p style="color: black">
                                Explore India's overall Research Output, CAGR, Rank, Subject-area Distribution and
                                Comparison with other major countries.
                            </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
            <div class="media block-6 d-block text-center pt-md-4">
                <a href="citation.php" style="text-decoration: none">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fa fa-external-link"></span>
                    </div>
                    <div class="media-body p-2 mt-3">

                        <h3 class="heading">Citations</h3>
                        <p style="color: black">
                            Total citations to Indian Research output, Relative Citation Ratio, Highly Cited Papers of
                            India
                            and comparison with other major countries.
                        </p>
                </a>
            </div>
        </div>
    </div>
    <div class=" col-md-3 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
        <div class="media block-6 d-block text-center pt-md-4">
            <a href="collab.php" style="text-decoration: none">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="fa fa-group"></span>
                </div>
                <div class="media-body p-2 mt-3">

                    <h3 class="heading">Collaboration</h3>
                    <p style="color: black">
                        The domestic and International Collaboration, Subject area-wise patterns,
                        major collaborating partners, and Citation Impact.
                    </p>
            </a>
        </div>
    </div>
    </div>
    <div class=" col-md-3 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
        <div class="media block-6 d-block text-center pt-md-4">
            <a href="gender.php" style="text-decoration: none">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="fa fa-male fa-female"></span>
                    <span class="fa fa-female"></span>
                </div>
                <div class="media-body p-2 mt-3">

                    <h3 class="heading">Gender Distribution</h3>
                    <p style="color: black">
                        Proportion of Female and Male 1<sup>st</sup> authored papers, subject area-wise
                        gender distribution and their collaboration/ impact.
                    </p>
            </a>
        </div>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-3 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
            <div class="media block-6 d-block text-center pt-md-4">
                <a href="open_access.php" style="text-decoration: none">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fa fa-folder-open"></span>
                    </div>
                    <div class="media-body p-2 mt-3">

                        <h3 class="heading">Open Access</h3>
                        <p style="color: black">
                            Volume of Indian Research Output in Open Access, Subject area-wise availability,
                            relation to research funding and comparison with other countries.
                        </p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-3 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
        <div class="media block-6 d-block text-center pt-md-4">
            <a href="social-media.php" style="text-decoration: none">
                <div class="icon d-flex justify-content-center align-items-center">
                    <i style="color: black;" class="fa fa-facebook fa-2x pr-1"></i>
                    <i style="color: black;" class="fa fa-twitter fa-2x"></i>
                </div>
                <div class="media-body p-2 mt-3">

                    <h3 class="heading">Social Media Visibility</h3>
                    <p style="color: black">
                        Proportion of Indian Research papers with Social Media attention, Platform-wise coverage
                        and Subject area-wise variations.
                    </p>
                </div>
        </div>
    </div>
    <div class=" col-md-3 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
        <div class="media block-6 d-block text-center pt-md-4">
            <a href="sdg_research.php" style="text-decoration: none">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="fa fa-universal-access"></span>
                </div>
                <div class="media-body p-2 mt-3">

                    <h3 class="heading">SDG-related Research</h3>
                    <p style="color: black">
                        Indian Research publications on Sustainable Development Goals and
                        Subject area-wise composition of the research output.
                    </p>
            </a>
        </div>
    </div>
    </div>
    <div class="col-md-3 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
        <div class="media block-6 d-block text-center pt-md-4">
            <a href="list_inst.php" style="text-decoration: none">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="fa fa-area-chart"></span>
                </div>
                <div class="media-body p-2 mt-3">

                    <h3 class="heading">Institutional Reports</h3>
                    <p style="color: black">
                        Know about key-indicators of the institution, such as Output, Citation, Collaboration, Grants,
                        Gender, OA and Social Media visibility etc.
                    </p>
            </a>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>
<!-- SEARCH BAR -->
<script type="text/javascript" src="script.js"></script>
<div id="section1">
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="bg-primary w-100 rounded px-md-0 px-4">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8 py-4">
                                <div class="row">
                                    <div class="col-md-3 d-flex align-items-start">
                                        <h2 class="mb-0 mx-3" style="color: white; font-size: 24px">
                                            Search for an Institution
                                        </h2>
                                    </div>
                                    <div class="col-md-9 d-flex align-items-center">
                                        <div class="container-fluid">
                                            <input type="text" class="form-control" id="search"
                                                   placeholder="Name of the Institution"
                                                   autocomplete="off""/>
                                            <div id="display" class="text-dark"
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
<br/><br/>
<!-- TOP INSTITUTION IMAGES LINK -->
<!--<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters">
            <div class="col-2 ftco-animate" id="fade">
                <div class="work img d-flex align-items-end" style="background-image: url('images/Institute_Logo/Anna University, Chennai/1.jpg');
background-size: contain;">
                    <a href="images/Institute_Logo/Anna University, Chennai/1.jpg"
                       class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                    <div class="desc w-100 px-4" id="logo_parent">
                        <div class="text w-100 mb-3" id="logo_link">
                            <h2>
                                <a href="http://www.indianscience.net/demo/institute.php?grid=grid.252262.3">
                                    Anna University</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url('images/Institute_Logo/All India Institute of Medical Sciences,Delhi/1200px-All_India_Institute_of_Medical_Sciences,_Delhi.jpg');
background-size: contain">
                    <a href="images/Institute_Logo/All India Institute of Medical Sciences,Delhi/1200px-All_India_Institute_of_Medical_Sciences,_Delhi.jpg"
                       class=" icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <h2><a href="http://www.indianscience.net/demo/institute.php?grid=grid.413618.9">
                                    All India Institute of Medical Sciences, Delhi</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url('images/Institute_Logo/Indian Institute of Science Bangalore/Indian Institute of Science Bangalore.jpg');
background-size: contain">
                    <a  href="images/Institute_Logo/Indian Institute of Science Bangalore/Indian Institute of Science Bangalore.jpg"
                        class=" icon image-popup d-flex justify-content-center align-items-center ">
                        <span class="icon-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <h2><a href="http://www.indianscience.net/demo/institute.php?grid=grid.34980.36">
                                    Indian Institute of Science Bangalore</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url('images/Institute_Logo/Indian Institute of Technology Kharagpur/Indian Institute of Technology Kharagpur.jpg');
background-size: contain">
                    <a href="images/Institute_Logo/Indian Institute of Technology Kharagpur/Indian Institute of Technology Kharagpur.jpg"
                       class=" icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <h2><a href="http://www.indianscience.net/demo/institute.php?grid=grid.429017.9">
                                    Indian Institute of Technology Kharagpur</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ftco-animate">
                <div class="work img d-flex align-items-end"
                        style="background-image: url('images/Institute_Logo/Indian Institute of Technology Bombay/Indian Institute of Technology Bombay.jpg');
background-size: contain">
                    <a href="images/Institute_Logo/Indian Institute of Technology Bombay/Indian Institute of Technology Bombay.jpg"
                       class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <h2><a href="http://www.indianscience.net/demo/institute.php?grid=grid.417971.d">
                                    Indian Institute of Technology Bombay</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url('images/Institute_Logo/Indian Institute of Technology Madras/Indian Institute of Technology Madras.jpg');
background-size: contain">
                    <a href="images/Institute_Logo/Indian Institute of Technology Madras/Indian Institute of Technology Madras.jpg"
                       class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <h2><a href="http://www.indianscience.net/demo/institute.php?grid=grid.417969.4">
                                    Indian Institute of Technology Madras
                                </a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url('images/Institute_Logo/Indian Institute of Technology Delhi/Indian Institute of Technology Delhi.jpg');
background-size: contain">
                    <a href="images/Institute_Logo/Indian Institute of Technology Delhi/Indian Institute of Technology Delhi.jpg"
                       class=" icon image-popup d-flex justify-content-center align-items-center ">
                        <span class="icon-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <h2><a href="http://www.indianscience.net/demo/institute.php?grid=grid.417967.a">
                                    Indian Institute of Technology Delhi
                                </a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url('images/Institute_Logo/University of Delhi/University of Delhi25.jpg');
background-size: contain">
                    <a href="images/Institute_Logo/University of Delhi/University of Delhi25.jpg"
                       class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <h2><a href="http://www.indianscience.net/demo/institute.php?grid=grid.8195.5">University of Delhi
                                </a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url('images/Institute_Logo/Bhabha Atomic Research Centre, Mumbai/Bhabha Atomic Research Centre, Mumbai6.jpg');
background-size: contain">
                    <a href="images/Institute_Logo/Bhabha Atomic Research Centre, Mumbai/Bhabha Atomic Research Centre, Mumbai6.jpg"
                       class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <h2><a href="http://www.indianscience.net/demo/institute.php?grid=grid.418304.a">
                                    Bhabha Atomic Research Centre, Mumbai
                                </a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ftco-animate">
                <div class="work img d-flex align-items-end"
                     style="background-image: url('images/Institute_Logo/Post Graduate Institute of Medical Education and Research,Chandigarh/Post Graduate Institute of Medical Education and Research,Chandigarh6.jpg');
background-size: contain">
                    <a href="images/Institute_Logo/Post Graduate Institute of Medical Education and Research,Chandigarh/Post Graduate Institute of Medical Education and Research,Chandigarh6.jpg"
                       class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <h2><a href="http://www.indianscience.net/demo/institute.php?grid=grid.415131.3">
                                    Post Graduate Institute of Medical Education and Research,Chandigarh
                                </a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url('images/Institute_Logo/Vellore Institute of Technology University/Vellore Institute of Technology University.jpg');
background-size: contain">
                    <a href="images/Institute_Logo/Vellore Institute of Technology University/Vellore Institute of Technology University.jpg"
                       class=" icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <h2><a href="http://www.indianscience.net/demo/institute.php?grid=grid.412813.d">
                                    Vellore Institute of Technology University
                                </a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url('images/all_inst.jpg');">
                    <a href="images/all_inst.jpg"
                       class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <h2 class="text-center">
                                <a href="http://www.indianscience.net/demo/list_inst.php" class="text-dark">
                                    Click here for <br>full list</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid">
        <div class="row p-3 pt-3 no-guttersv">
            <!-- Anna -->
            <div class="col-6 col-md-4 col-lg-2 p-3 pt-3 ftco-animate">
                <div class="fullwrap">
                    <a href="institute.php?grid=grid.252262.3">
                        <img src="images/Institute_Logo/Anna University, Chennai/1.jpg" style="height: 200px"/>
                        <div class="fullcap">
                            Anna University, Chennai<br>
                        </div>
                    </a>
                </div>
            </div>
            <!-- AIIMS -->
            <div class="col-6 col-md-4 col-lg-2 p-3 pt-3 ftco-animate">
                <div class="fullwrap">
                    <a href="institute.php?grid=grid.413618.9">
                        <img src="images/Institute_Logo/All India Institute of Medical Sciences,Delhi/1200px-All_India_Institute_of_Medical_Sciences,_Delhi.jpg"
                             style="height: 200px;"/>
                        <div class="fullcap">
                            All India Institute of Medical Sciences,Delhi<br>
                        </div>
                    </a>
                </div>
            </div>
            <!-- IISC -->
            <div class="col-6 col-md-4 col-lg-2 p-3 pt-3 ftco-animate">
                <div class="fullwrap">
                    <a href="institute.php?grid=grid.34980.36">
                        <img src="images/Institute_Logo/Indian Institute of Science Bangalore/Indian Institute of Science Bangalore.jpg"
                             style="height: 200px"/>
                        <div class="fullcap">
                            Indian Institute of Science Bangalore<br>
                        </div>
                    </a>
                </div>
            </div>
            <!-- iitkgp -->
            <div class="col-6 col-md-4 col-lg-2 p-3 pt-3 ftco-animate">
                <div class="fullwrap">
                    <a href="institute.php?grid=grid.429017.9">
                        <img src="images/Institute_Logo/Indian Institute of Technology Kharagpur/Indian Institute of Technology Kharagpur.jpg"
                             style="height: 200px"/>
                        <div class="fullcap">
                            Indian Institute of Technology Kharagpur<br>
                        </div>
                    </a>
                </div>
            </div>
            <!-- iitbom -->
            <div class="col-6 col-md-4 col-lg-2 p-3 pt-3 ftco-animate">
                <div class="fullwrap">
                    <a href="institute.php?grid=grid.417971.d">
                        <img src="images/Institute_Logo/Indian Institute of Technology Bombay/Indian Institute of Technology Bombay.jpg"
                             style="height: 200px"/>
                        <div class="fullcap">
                            Indian Institute of Technology Bombay<br>
                        </div>
                    </a>
                </div>
            </div>
            <!-- iitmad -->
            <div class="col-6 col-md-4 col-lg-2 p-3 pt-3 ftco-animate">
                <div class="fullwrap">
                    <a href="institute.php?grid=grid.417969.4">
                        <img src="images/Institute_Logo/Indian Institute of Technology Madras/Indian Institute of Technology Madras.jpg"
                             style="height: 200px"/>
                        <div class="fullcap">
                            Indian Institute of Technology Madras<br>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row p-3 pt-3 no-gutters">
            <!-- iitdel -->
            <div class="col-6 col-md-4 col-lg-2 p-3 pt-3 ftco-animate">
                <div class="fullwrap">
                    <a href="institute.php?grid=grid.417967.a">
                        <img src="images/Institute_Logo/Indian Institute of Technology Delhi/Indian Institute of Technology Delhi.jpg"
                             style="height: 200px"/>
                        <div class="fullcap">
                            Indian Institute of Technology Delhi<br>
                        </div>
                    </a>
                </div>
            </div>
            <!-- deluniv -->
            <div class="col-6 col-md-4 col-lg-2 p-3 pt-3 ftco-animate">
                <div class="fullwrap">
                    <a href="institute.php?grid=grid.8195.5">
                        <img src="images/Institute_Logo/University of Delhi/University of Delhi25.jpg"
                             style="height: 200px"/>
                        <div class="fullcap">
                            University of Delhi<br>
                        </div>
                    </a>
                </div>
            </div>
            <!-- barc -->
            <div class="col-6 col-md-4 col-lg-2 p-3 pt-3 ftco-animate">
                <div class="fullwrap">
                    <a href="institute.php?grid=grid.418304.a">
                        <img src="images/Institute_Logo/Bhabha Atomic Research Centre, Mumbai/Bhabha Atomic Research Centre, Mumbai6.jpg"
                             style="height: 200px"/>
                        <div class="fullcap">
                            Bhabha Atomic Research Centre, Mumbai<br>
                        </div>
                    </a>
                </div>
            </div>
            <!-- pgimer -->
            <div class="col-6 col-md-4 col-lg-2 p-3 pt-3 ftco-animate">
                <div class="fullwrap">
                    <a href="institute.php?grid=grid.415131.3">
                        <img src="images/Institute_Logo/Post Graduate Institute of Medical Education and Research,Chandigarh/Post Graduate Institute of Medical Education and Research,Chandigarh6.jpg"
                             style="height: 200px"/>
                        <div class="fullcap">
                            Post Graduate Institute of Medical Education and Research, Chandigarh<br>
                        </div>
                    </a>
                </div>
            </div>
            <!-- vit -->
            <div class="col-6 col-md-4 col-lg-2 p-3 pt-3 ftco-animate">
                <div class="fullwrap">
                    <a href="institute.php?grid=grid.412813.d">
                        <img src="images/Institute_Logo/Vellore Institute of Technology University/Vellore Institute of Technology University.jpg"
                             style="height: 200px"/>
                        <div class="fullcap">
                            Vellore Institute of Technology University<br>
                        </div>
                    </a>
                </div>
            </div>
            <!-- full -->
            <div class="col-6 col-md-4 col-lg-2 p-3 pt-3 ftco-animate">
                <div class="fullwrap">
                    <a href="list_inst.php">
                        <img src="images/all_inst.jpg"
                             style="height: 200px"/>
                        <div class="fullcap" style="visibility: visible; opacity: 1">
                            Click here for <br>full list<br>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- RECENT PUBLICATIONS -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Recent Publications</h2>
            </div>
        </div>
        <!-- 1 -->
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="https://link.springer.com/article/10.1007/s11192-021-04188-3" class="block-20 rounded"
                       target="_blank"
                       style="
							background-image: url('images/publications/x-index.jpg');
							opacity: 40%;
						"></a>
                    <div class="text mt-3 text-center">
                        <div class="meta mb-2">
                            <div>
                                <p>
                                    Hiran H. Lathabai, Abhirup Nandy & Vivek Kumar Singh
                                </p>
                            </div>

                        </div>
                        <h3 class="heading">
                            <a href="https://link.springer.com/article/10.1007/s11192-021-04188-35">
                                x-index: Identifying core competency and thematic research strengths of institutions
                                using an NLP and network based ranking framework</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="https://link.springer.com/article/10.1007/s11192-021-03948-5" class="block-20 rounded"
                       target="_blank"
                       style="
							background-image: url('images/publications/journal-coverage.jpg');
							opacity: 40%;
						"></a>
                    <div class="text mt-3 text-center">
                        <div class="meta mb-2">
                            <div>
                                <p>
                                    Vivek Kumar Singh, Prashasti Singh, Mousumi Karmakar,
                                    Jacqueline Leta, Philipp Mayr
                                </p>
                            </div>

                        </div>
                        <h3 class="heading">
                            <a href="https://link.springer.com/article/10.1007/s11192-021-03948-5">
                                The Journal Coverage of Web of Science, Scopus and Dimensions: A
                                Comparative Analysis</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- 3 -->
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="https://link.springer.com/article/10.1007/s11192-021-03941-y"
                       class="block-20 rounded" target="_blank" style="
							background-image: url('images/publications/altmetric-plumx.jpg');
							opacity: 40%;
						">
                    </a>
                    <div class="text mt-3 text-center">
                        <div class="meta mb-2">
                            <div>
                                <p>Mousumi Karmakar, Sumit Kumar Banshal & Vivek Kumar Singh</p>
                            </div>
                            <!--<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
                        </div>
                        <h3 class="heading">
                            <a href="https://link.springer.com/article/10.1007/s11192-021-03941-y">
                                A large-scale comparison of coverage and mentions captured by
                                the two altmetric aggregators - Altmetric.com and PlumX</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/>
        <!-- 4 -->
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="https://www.jscires.org/article/410"
                       class="block-20 rounded" target="_blank" style="
							background-image: url('images/publications/sci-hub-visible.jpg');
							opacity: 30%;
						"></a>
                    <div class="text mt-3 text-center">
                        <div class="meta mb-2">
                            <div>
                                <p>
                                    Vivek Kumar Singh, Satya Swarup Srichandan, Sujit Bhattacharya
                                </p>
                            </div>
                            <!--<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
                        </div>
                        <h3 class="heading">
                            <a href="https://www.jscires.org/article/410">
                                Is Sci-Hub Increasing Visibility of Indian Research Papers? An
                                Analytical Evaluation</a>
                        </h3>
                    </div>
                </div>
            </div>


            <!-- 5 -->

            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="https://www.niscair.res.in/includes/images/sciencediplomacy/Science-Diplomacy-October-December-2020.pdf#page=17"
                       class="block-20 rounded" target="_blank" style="
							background-image: url('images/publications/science-diplomacy.jpg');
							opacity: 40%;
						"></a>
                    <div class="text mt-3 text-center">
                        <div class="meta mb-2">
                            <div>
                                <p>Vivek Kumar Singh & Sujit Bhattacharya</p>
                            </div>
                            <!--<div><a href="#">Admin</a></div>
									<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
                        </div>
                        <h3 class="heading">
                            <a href="https://www.niscair.res.in/includes/images/sciencediplomacy/Science-Diplomacy-October-December-2020.pdf#page=17">
                                Science Technology and Innovation Policy Draft: Where do we
                                stand?</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- 6 -->
            <!--            <div class="col-md-4 d-flex ftco-animate">-->
            <!--                <div class="blog-entry align-self-stretch">-->
            <!--                    <a href="https://www.emerald.com/insight/content/doi/10.1108/OIR-11-2019-0364/full/html" class="block-20 rounded"-->
            <!--                            target="_blank" style="-->
            <!--							background-image: url('images/publications/altmetric-mention.jpg');-->
            <!--							opacity: 20%;-->
            <!--						">-->
            <!--                    </a>-->
            <!--                    <div class="text mt-3 text-center">-->
            <!--                        <div class="meta mb-2">-->
            <!--                            <div>-->
            <!--                                <p>-->
            <!--                                    Sumit Kumar Banshal, Vivek Kumar Singh & Pranab Kumar Muhuri-->
            <!--                                </p>-->
            <!--                            </div>-->
            <!--<div><a href="#">Admin</a></div>
					<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
            <!--                        </div>-->
            <!--                        <h3 class="heading">-->
            <!--                            <a href="https://www.emerald.com/insight/content/doi/10.1108/OIR-11-2019-0364/full/html">-->
            <!--                                Can altmetric mentions predict later citations? A test of-->
            <!--                                validity on data from ResearchGate and three social media-->
            <!--                                platforms-->
            <!--                            </a>-->
            <!--                        </h3>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!-- 6 -->
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="publications.php" class="block-20 rounded"
                       style="
							background-image: url('images/publications/merge.jpg');
							opacity: 30%;
						">
                    </a>
                    <div class="text mt-3 text-center">
                        <div class="meta mb-2">
                            <div>
                                <p>
                                    Other Publications
                                </p>
                            </div>
                        </div>
                        <h3 class="heading">
                            <a href="publications.php">
                                View all our other Publications
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- QUOTES AND COMMENTS-->
<section class="ftco-section testimony-section bg-primary">
    <div class="container">
        <div class="row justify-content-center mb-1">
            <div
                    class="
					col-md-7
					text-center
					heading-section heading-section-white
					ftco-animate
				"
            >
                <h2 class="mb-1">News Updates</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div
                                    class="icon d-flex align-items-center justify-content-center"
                            >
                                <span class="fa fa-quote-left"></span>
                            </div>
                            <div class="text">
                                <p class="mb-4">
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                                <div class="d-flex align-items-center">
                                    <div
                                            class="user-img"
                                            style="background-image: url(images/person_1.jpg)"
                                    ></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div
                                    class="icon d-flex align-items-center justify-content-center"
                            >
                                <span class="fa fa-quote-left"></span>
                            </div>
                            <div class="text">
                                <p class="mb-4">
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                                <div class="d-flex align-items-center">
                                    <div
                                            class="user-img"
                                            style="background-image: url(images/person_2.jpg)"
                                    ></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div
                                    class="icon d-flex align-items-center justify-content-center"
                            >
                                <span class="fa fa-quote-left"></span>
                            </div>
                            <div class="text">
                                <p class="mb-4">
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                                <div class="d-flex align-items-center">
                                    <div
                                            class="user-img"
                                            style="background-image: url(images/person_3.jpg)"
                                    ></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div
                                    class="icon d-flex align-items-center justify-content-center"
                            >
                                <span class="fa fa-quote-left"></span>
                            </div>
                            <div class="text">
                                <p class="mb-4">
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                                <div class="d-flex align-items-center">
                                    <div
                                            class="user-img"
                                            style="background-image: url(images/person_1.jpg)"
                                    ></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div
                                    class="icon d-flex align-items-center justify-content-center"
                            >
                                <span class="fa fa-quote-left"></span>
                            </div>
                            <div class="text">
                                <p class="mb-4">
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                                <div class="d-flex align-items-center">
                                    <div
                                            class="user-img"
                                            style="background-image: url(images/person_2.jpg)"
                                    ></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
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

<?php include "footer.php" ?>
