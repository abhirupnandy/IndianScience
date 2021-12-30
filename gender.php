<?php include "header.php" ?>
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
                    <li class="nav-item active"><a href="gender.php" class="nav-link">Gender Distribution</a></li>
                    <li class="nav-item"><a href="open_access.php" class="nav-link">Open Access</a></li>
                    <li class="nav-item dropdown">
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
	</nav>
	<!-- END nav -->
</section>
<div class="hero-wrap p-5" style="background-color: #FFA400">
    <div class="overlay"></div>
    <div class="container pt-4">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <h1 class="mb-0 bread">Gender Distribution</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3" id="introduction">Gender Distribution of Indian Research output</h2>
                <p class="text-justify">
                    The Indian Research output during 2010 to 2019 was analysed to identify the gender distribution patterns.
                    More precisely, the gender of the first author (leading author) for all the papers, has been determined
                    using the Gender-API service. It is observed that only <b>29.3%</b> of Indian papers are Female 1<sup>st</sup> authored,
                    as compared to <b>70.7%</b> Male 1<sup>st</sup> authored papers. The distribution of Female and Male 1<sup>st</sup>
                    have remained almost the same during 2010 to 2019 period. The figure below shows the year-wise gender distribution
                    of Indian Research output.<br>
                    <img src="images/gender/6-1.png" alt="Figure 6.1" class="img img-fluid img-thumbnail"
                    style="width: 100%; height: auto">
                </p>
            </div>
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        <li><a href="#introduction">Gender Distribution<span class="ion-ios-arrow-forward"></span></a></li>
                        <li><a href="#sub_dist">Subject area-wise distribution<span class="ion-ios-arrow-forward"></span></a></li>
                        <li><a href="#collab">International Collaboration<span class="ion-ios-arrow-forward"></span></a></li>
                        <li><a href="#impact">Citation Impact<span class="ion-ios-arrow-forward"></span></a></li>
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
    <h2 class="mb-3" id="sub_dist">Subject area-wise Gender Distribution</h2>
    <p class="text-justify">
        The gender distribution of Indian papers are also analysed with respect to different subject areas. While majority of
        the 22 subject areas have almost similar percentage of Female 1<sup>st</sup> authored papers, subject areas like
        History & Archaeology, Built Environment & Design and Law & Legal studies have a slightly higher percentage of Female 1<sup>st</sup>
        authored papers. In general, only about one-fourth of the research papers in majority of the subject areas have Female
        1<sup>st</sup> author. The table below presents percentage of Female and Male 1<sup>st</sup> authored papers in different
        subject areas.</p>
    <table id="gender_1" class="table table-responsive-sm table-bordered table-hover table-striped text-center text-dark">
        <thead style="background-color: #4f4e45;" class="cell-border table-dark">
        <tr>
            <th>Subject</th>
            <th>Male 1<sup>st</sup> authored papers (%)</th>
            <th>Female 1<sup>st</sup> authored papers (%)</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>06 Biological Sciences</td>
                <td>74.01</td>
                <td>25.99</td>
            </tr>
            <tr>
                <td>03 Chemical Sciences</td>
                <td>74.67</td>
                <td>25.33</td>
            </tr>
            <tr>
                <td>04 Earth Sciences</td>
                <td>74.84</td>
                <td>25.16</td>
            </tr>
            <tr>
                <td>11 Medical and Health Sciences</td>
                <td>74.27</td>
                <td>25.73</td>
            </tr>
            <tr>
                <td>08 Information and Computing Sciences</td>
                <td>74.28</td>
                <td>25.72</td>
            </tr>
            <tr>
                <td>09 Engineering</td>
                <td>74.55</td>
                <td>25.45</td>
            </tr>
            <tr>
                <td>12 Built Environment and Design</td>
                <td>72.14</td>
                <td>27.86</td>
            </tr>
            <tr>
                <td>07 Agricultural and Veterinary Sciences</td>
                <td>74.75</td>
                <td>25.25</td>
            </tr>
            <tr>
                <td>10 Technology</td>
                <td>74.67</td>
                <td>25.33</td>
            </tr>
            <tr>
                <td>05 Environmental Sciences</td>
                <td>73.84</td>
                <td>26.16</td>
            </tr>
            <tr>
                <td>15 Commerce, Management, Tourism and Services</td>
                <td>74.64</td>
                <td>25.36</td>
            </tr>
            <tr>
                <td>01 Mathematical Sciences</td>
                <td>74.63</td>
                <td>25.37</td>
            </tr>
            <tr>
                <td>02 Physical Sciences</td>
                <td>75.20</td>
                <td>24.80</td>
            </tr>
            <tr>
                <td>16 Studies In Human Society</td>
                <td>74.84</td>
                <td>25.16</td>
            </tr>
            <tr>
                <td>21 History and Archaeology</td>
                <td>71.88</td>
                <td>28.12</td>
            </tr>
            <tr>
                <td>14 Economics</td>
                <td>74.51</td>
                <td>25.49</td>
            </tr>
            <tr>
                <td>17 Psychology and Cognitive Sciences</td>
                <td>74.98</td>
                <td>25.02</td>
            </tr>
            <tr>
                <td>20 Language, Communication and Culture</td>
                <td>74.17</td>
                <td>25.83</td>
            </tr>
            <tr>
                <td>22 Philosophy and Religious Studies</td>
                <td>73.28</td>
                <td>26.72</td>
            </tr>
            <tr>
                <td>13 Education</td>
                <td>73.66</td>
                <td>26.34</td>
            </tr>
            <tr>
                <td>18 Law and Legal Studies</td>
                <td>72.13</td>
                <td>27.87</td>
            </tr>
            <tr>
                <td>19 Studies In Creative Arts and Writing</td>
                <td>74.07</td>
                <td>25.93</td>
            </tr>
        </tbody>
    </table>
    <script>
        $(document).ready(function(){
            table = $('#gender_1').DataTable({
                'ordering': true,
                'searching': false,
                'paginate': true,
                'bInfo': false,
                "lengthMenu": [[11, -1],[11, "All"] ],
            });
        });
    </script>
    <h2 class="mb-3" id="collab">International Collaboration patterns in Female and Male 1<sup>st</sup> authored papers</h2>
    <p class="text-justify">
        It was analysed whether there exist differences in the propensity for International Collaboration in Female and Male
        1<sup>st</sup> authored papers. For this purpose, the proportion of papers that involve international collaboration in both the sets
        (Female 1<sup>st</sup> authored and Male 1<sup>st</sup> authored papers) were identified through the 'Country' information
        in the Author-affiliation field. It is observed that both Female and Male 1<sup>st</sup> authored papers have almost similar
        proportion of papers involving International Collaboration, with the International Collaboration Proportion in Female 1<sup>st</sup>
        authored publications increasing from <b>9.47% in 2010</b>
        to <b>23.08% in 2019</b> and International Collaboration Proportion in Male 1<sup>st</sup> authored publications increasing
        from <b>11.67% in 2010</b> to <b>23.34% in 2019</b>. The figures
        below show the international collaboration patterns in Female and Male 1<sup>st</sup> authored papers.
    </p>
    <div class="row pt-0 mt-0 pb-4">
        <div class="col">
            <img src="images/gender/6-3.jpg" alt="Figure 6.3" class="img img-fluid img-thumbnail"
                 style="width: 100%; height: auto">
        </div>
        <div class="col">
            <img src="images/gender/6-4.jpg" alt="Figure 6.4" class="img img-fluid img-thumbnail"
                 style="width: 100%; height: auto">
        </div>
    </div>
    <h2 class="mb-3" id="impact">Citation Impact of Female and Male 1<sup>st</sup> authored papers</h2>
    <p class="text-justify">
        The citation impact of Female and male 1<sup>st</sup> authored papers are analysed by computing the cited percentage (proportion of papers that
        attracted at least one citation) and Average Citations Per Paper for both the sets. It is observed that, in general, Female and Male 1<sup>st</sup> authored papers
        have similar cited percentage values during 2010 to 2019 period. Further, the Average Citations per Paper values of Female and Male 1<sup>st</sup> authored papers
        are also similar, with very minor variations. The table below shows the year-wise values of cited percentage and citations per paper for both
        Female and Male 1<sup>st</sup> authored papers.
    </p>
    <table id="gender_2" class="table table-responsive-sm table-bordered table-hover table-striped text-center text-dark">
        <thead style="background-color: #4f4e45;" class="cell-border table-dark">
            <tr>
                <th rowspan="2">Year</th>
                <th colspan="2">Cited Percentage</th>
                <th colspan="2">Citations per Paper</th>
            </tr>
            <tr>
                <th>Female 1<sup>st</sup> per Paper</th>
                <th>Male 1<sup>st</sup> per Paper</th>
                <th>Female 1<sup>st</sup> per Paper</th>
                <th>Male 1<sup>st</sup> per Paper</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <p><strong>2010</strong></p>
            </td>
            <td>
                <p>12.88 %</p>
            </td>
            <td>
                <p>16.34 %</p>
            </td>
            <td>
                <p>18.79</p>
            </td>
            <td>
                <p>18.90</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>2011</strong></p>
            </td>
            <td>
                <p>15.25 %</p>
            </td>
            <td>
                <p>16.12 %</p>
            </td>
            <td>
                <p>17.48</p>
            </td>
            <td>
                <p>17.31</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>2012</strong></p>
            </td>
            <td>
                <p>17.76 %</p>
            </td>
            <td>
                <p>16.66 %</p>
            </td>
            <td>
                <p>15.04</p>
            </td>
            <td>
                <p>15.20</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>2013</strong></p>
            </td>
            <td>
                <p>18.22 %</p>
            </td>
            <td>
                <p>17.20 %</p>
            </td>
            <td>
                <p>13.94</p>
            </td>
            <td>
                <p>14.23</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>2014</strong></p>
            </td>
            <td>
                <p>19.01 %</p>
            </td>
            <td>
                <p>18.09 %</p>
            </td>
            <td>
                <p>12.47</p>
            </td>
            <td>
                <p>13.11</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>2015</strong></p>
            </td>
            <td>
                <p>19.90 %</p>
            </td>
            <td>
                <p>19.02 %</p>
            </td>
            <td>
                <p>11.16</p>
            </td>
            <td>
                <p>11.53</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>2016</strong></p>
            </td>
            <td>
                <p>19.14 %</p>
            </td>
            <td>
                <p>19.11 %</p>
            </td>
            <td>
                <p>9.82</p>
            </td>
            <td>
                <p>10.02</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>2017</strong></p>
            </td>
            <td>
                <p>20.09 %</p>
            </td>
            <td>
                <p>20.52 %</p>
            </td>
            <td>
                <p>8.49</p>
            </td>
            <td>
                <p>8.65</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>2018</strong></p>
            </td>
            <td>
                <p>23.66 %</p>
            </td>
            <td>
                <p>24.04 %</p>
            </td>
            <td>
                <p>6.81</p>
            </td>
            <td>
                <p>6.93</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>2019</strong></p>
            </td>
            <td>
                <p>30.63 %</p>
            </td>
            <td>
                <p>30.73 %</p>
            </td>
            <td>
                <p>4.60</p>
            </td>
            <td>
                <p>4.71</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>Overall</strong></p>
            </td>
            <td>
                <p>79.25 %</p>
            </td>
            <td>
                <p>79.28 %</p>
            </td>
            <td>
                <p>10.66</p>
            </td>
            <td>
                <p>10.90</p>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<?php include "footer.php" ?>
