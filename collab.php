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
                    <li class="nav-item active"><a href="collab.php" class="nav-link">Collaboration</a></li>
                    <li class="nav-item"><a href="gender.php" class="nav-link">Gender Distribution</a></li>
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
                <h1 class="mb-0 bread">Collaboration Patterns</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 ftco-animate">
                <h2 class="mb-3" id="introduction">Collaboration patterns in Indian Research Output</h2>
                <p class="text-justify">
                    India's research output during 2010 to 2019 includes research output involving domestic as well as
                    international collaboration. While about 60% of the research output has authors from a single institution,
                    about 15% research output involves domestic collaboration (collaboration between institutions within India).
                    Approximately 20% of the research output involved collaboration at international level. The figure below shows
                    the different types of research output from India for the period 2010 to 2019.<br><br>
                    <img src="images/collab/FIg-4-2.jpg" alt="FIG 4.2" class="img img-thumbnail img-fluid"
                         style="margin-left: auto; margin-right: auto; display: block;width: 100%; height: auto">
                </p>
            </div>
			<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
				<div class="sidebar-box ftco-animate">
					<div class="categories">
						<h3>Sections</h3>
						<li><a href="#introduction">Collaboration Patterns <span class="ion-ios-arrow-forward"></span></a></li>
						<li><a href="#international">International Patterns<span class="ion-ios-arrow-forward"></span></a></li>
                        <li><a href="#partners">Major Collaborating Partners<span class="ion-ios-arrow-forward"></span></a></li>
                        <li><a href="#subject">Subject area-wise Distribution<span class="ion-ios-arrow-forward"></span></a></li>
                        <li><a href="#impact">Citation Impact<span class="ion-ios-arrow-forward"></span></a></li>
					</div>
				</div>
				<div class="sidebar-box ftco-animate">
					<h3>Tag Cloud</h3>
					<div class="tagcloud">
						<a class="tag-cloud-link">India</a>
						<a class="tag-cloud-link">International Collaboration</a>
						<a class="tag-cloud-link">ICP</a>
						<a class="tag-cloud-link">World Data</a>
						<a class="tag-cloud-link">Ranks</a>
						<a class="tag-cloud-link">Subjects</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> <!-- .section -->
<div class="container pb-5 mb-5">
    <h2 class="mb-3" id="international">International Collaboration Patterns</h2>
    <p class="text-justify">
        India's international collaboration networks seem to have improved during 2010 to 2019. In 2010, a total of
        <b>18.92%</b> of India's research output involved international collaboration which has grown to <b>22.98%</b>
        of the total research output in 2019. Since 2016, the growth in international collaboration is more steep. The figure below
        shows the percentage share of internationally collaborated papers in India's research output.
        <br><br>
        <img src="images/collab/FIg-4-1.jpg" alt="FIG 4.1" class="img img-thumbnail img-fluid col-12 col-md-8 offset-md-2"
             style="margin-left: auto; margin-right: auto; display: block;width: 100%; height: auto">
        <br><br>
        The amount of internationally collaborated papers from India are, however, lesser as compared to the 20
        major countries. For example, United Kingdom has 48.73% of it's research output that involves international
        collaboration. Similarly, France has 50.43%, Australia has 50.98%, and Switzerland has 65.63% of it's research
        output, during 2010 to 2019, involving international collaboration. The table below shows international collaboration
        patterns of the 20 major countries considered.
    </p>
    <table class="table table-bordered table-hover text-center text-dark w-100" id="icptop20">
        <thead style="background-color: #4f4e45;width: 100%" class="cell-border table-dark">
            <tr>
                <th>Rank</th>
                <th>Country</th>
                <th>TP (2010-2019)</th>
                <th>ICP (2010-2019)</th>
                <th>ICP (%)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>United States</td>
                <td>6,181,247</td>
                <td>1,959,644</td>
                <td>31.70</td>
            </tr>
            <tr>
                <td>2</td>
                <td>China</td>
                <td>3,828,795</td>
                <td>883,947</td>
                <td>23.09</td>
            </tr>
            <tr>
                <td>3</td>
                <td>United Kingdom</td>
                <td>1,824,427</td>
                <td>889,118</td>
                <td>48.73</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Japan</td>
                <td>1,694,585</td>
                <td>344,508</td>
                <td>20.33</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Germany</td>
                <td>1,551,543</td>
                <td>732,467</td>
                <td>47.21</td>
            </tr>
            <tr>
                <td>6</td>
                <td>France</td>
                <td>1,103,707</td>
                <td>556,554</td>
                <td>50.43</td>
            </tr>
            <tr>
                <td>7</td>
                <td>India</td>
                <td>1,084,422</td>
                <td>211,740</td>
                <td>19.53</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Canada</td>
                <td>970,336</td>
                <td>460,453</td>
                <td>47.45</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Italy</td>
                <td>936,918</td>
                <td>423,813</td>
                <td>45.23</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Australia</td>
                <td>840,791</td>
                <td>428,650</td>
                <td>50.98</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Spain</td>
                <td>825,399</td>
                <td>365,192</td>
                <td>44.24</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Brazil</td>
                <td>791,088</td>
                <td>202,983</td>
                <td>25.66</td>
            </tr>
            <tr>
                <td>13</td>
                <td>South Korea</td>
                <td>714,331</td>
                <td>192,027</td>
                <td>26.88</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Russia</td>
                <td>616,395</td>
                <td>160,458</td>
                <td>26.03</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Netherlands</td>
                <td>548,489</td>
                <td>308,024</td>
                <td>56.16</td>
            </tr>
            <tr>
                <td>16</td>
                <td>Switzerland</td>
                <td>417,766</td>
                <td>274,177</td>
                <td>65.63</td>
            </tr>
            <tr>
                <td>17</td>
                <td>Iran</td>
                <td>401,528</td>
                <td>91,611</td>
                <td>22.82</td>
            </tr>
            <tr>
                <td>18</td>
                <td>Poland</td>
                <td>364,627</td>
                <td>116,614</td>
                <td>31.98</td>
            </tr>
            <tr>
                <td>19</td>
                <td>Sweden</td>
                <td>354,801</td>
                <td>215,648</td>
                <td>60.78</td>
            </tr>
            <tr>
                <td>20</td>
                <td>Taiwan</td>
                <td>351,371</td>
                <td>101,556</td>
                <td>28.9</td>
            </tr>
            </tbody>
        </table>
    <script>
        $(document).ready(function(){
            table = $('#icptop20').DataTable({
                'ordering': true,
                'searching': false,
                'paginate': true,
                'bInfo': false,
                'scrollX': true,
                "lengthMenu": [[10, -1],[10, "All"] ],
            });
        });
    </script>
    <h2 class="mb-3" id="partners">India's major collaborating partner countries</h2>
    <p class="text-justify">
        India's major collaborating partner countries during 2010 to 2019 includes -
        United States of America (33.09%),
        United Kingdom (12.42%),
        Germany (9.19%),
        China (8.87%),
        South Korea (7.72%) and Australia (7.06%).
        The figure below shows a list of top 25 collaborating partner countries along with the number of collaborated
        papers during 2010 to 2019.
        <br><br>
        <img src="images/collab/FIg-4-4.jpg" alt="FIG 4.4" class="img img-thumbnail img-fluid col-12"
             style="margin-left: auto; margin-right: auto; display: block;width: 100%; height: auto">
        <br>
    </p>
    <br><br>
    <h2 class="mb-3" id="subject">Subject area-wise distribution of domestic and Internationally Collaborated papers </h2>
    <p class="text-justify">
        The international collaboration patterns in Indian research output vary across different subject areas. It ranges from
        a low of 15.88% in Language, Communication and Culture to 32.55% in Earth Sciences. Subject areas with relatively higher international
        collaboration percentage are Physical Sciences (31.67%), Economics (29.44%), Built-Environment and Design (28.72%),
        Environmental Sciences (28.69%). The domestic multi-institution collaborated output varies across different subject areas.
        For example, Earth Sciences has 24.87% research output as multi-institution collaboration, whereas History and Archeology has only
        6.68% of it;s research output involving domestic multi-institutional collaboration. The figure below presents the
        subject area-wise distribution of domestic and internationally collaborated research output of India.<br>
        <br>
        <img src="images/collab/FIg-4-5.jpg" alt="FIG 4.5" class="img img-thumbnail img-fluid col-12"
             style="margin-left: auto; margin-right: auto; display: block;width: 100%; height: auto">
             <div class="text-justify small">
                **<b>Subject Codes</b> - 01-Mathematical Science, 02-Physical Sciences, 03-Chemical Sciences, 04-Earth Sciences, 05-Environmental Sciences,
                06-Biological Sciences, 07-Agricultural and Veterinary Sciences, 08-Information and Computing Sciences, 09-Engineering, 
                10-Technology, 11-Medical and Health Sciences, 12-Built Environment and Design, 13-Education, 14-Economics, 
                15-Commerce, Management, Tourism and Services, 16-Studies in Human Society, 17-Psychology and Cognitive Sciences, 
                18-Law and Legal Studies, 19-Studies in Creative Arts and Writing, 20-Language, Communication and Culture, 
                21-History and Archaeology, 22-Philosophy and Religious Studies
            </div>
        <br>
    </p>
    <h2 class="mb-3" id="impact">Citation impact of Internationally Collaborated Papers</h2>
    <p class="text-justify">
        The International Collaboration seems to have an advantage in terms of citation impact as compared to domestic papers.
        For example, the average citations per paper (ACPP) for domestic papers is <b>7.95</b>, whereas the average citation per paper
        for Internationally Collaborated papers is <b>18.65</b>. Similarly, the cited percentage of domestic papers is <b>76.75%</b>
        whereas for internationally collaborated papers, it is <b>89%</b>. Further, International Collaboration with different
        countries shows different impact, as shown in the figure below. For example, collaboration with Switzerland leads to a
        cited percentage of more than 93%, with an ACPP of 35. On the other hand, collaboration with Japan has a cited
        percentage of 88%, with an ACPP value of 24.5.<br>
        <img src="images/collab/FIg-4-6.jpg" alt="FIG 4.6" class="img img-thumbnail img-fluid col-12"
             style="margin-left: auto; margin-right: auto; display: block;width: 100%; height: auto">
        <br><br>
    </p>
</div>
<?php include "footer.php" ?>
