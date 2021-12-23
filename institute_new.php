<?php
	include "header.php";
	$server = "localhost";
	$username = "textajfo_guest";
	$password = "guest@123";
	$dbname = "textajfo_indian_science_reports";
	$conn = new mysqli($server, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	if (!isset($_GET['grid'])) {
		echo "<script> location.href='list_inst.php'; </script>";
	} else {
		echo "<script>let grid = '" . $_GET['grid'] . "'</script>";
		$grid = $_GET['grid'];
	}
?>
<script src="https://cdn.jsdelivr.net/npm/echarts@5.2.0/dist/echarts.min.js"></script>
<!-- BackToTop Button -->
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
<style>
    hr {
        color: black;
        background-color: black
    }

    @media only screen and (max-width: 768px) {
        .animated {
            /*CSS transitions*/
            -o-transition-property: none !important;
            -moz-transition-property: none !important;
            -ms-transition-property: none !important;
            -webkit-transition-property: none !important;
            transition-property: none !important;
            /*CSS transforms*/
            -o-transform: none !important;
            -moz-transform: none !important;
            -ms-transform: none !important;
            -webkit-transform: none !important;
            transform: none !important;
            /*CSS animations*/
            -webkit-animation: none !important;
            -moz-animation: none !important;
            -o-animation: none !important;
            -ms-animation: none !important;
            animation: none !important;
        }
    }
</style>
<!-- NAVIGATION BAR -->
<script>
    //setTimeout(function (){console.log(grid);}, 3000);
    window.onload = function () {
        return new Promise((resolve) => setTimeout(resolve, 3000));
    }
</script>
<div class="animated">
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
                        <li class="nav-item"><a href="grants.php" class="nav-link">Research Grants</a></li>
                        <li class="nav-item"><a href="open_access.php" class="nav-link">Open Access</a></li>
                        <li class="nav-item active"><a href="list_inst.php" class="nav-link">Institutions</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- END nav -->
    </section>

    <div id="downloadas" style="color: black;">
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
                        <h1 class="mb-0 bread">Institutional Performance &nbsp;Report</h1>
                    </div>
                </div>
            </div>
        </section><!-- Header Image-->
        <section class="ftco-section ftco-degree-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ftco-animate">
                        <h1 class="mb-3 font-weight-bold" id="introduction">
							<?php
								$sql = "SELECT `name` FROM `institutes` WHERE `grid`='$grid'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										$inst_name = $row['name'];
										echo $row['name'];
									}
								}
								$sql = "SELECT * FROM `key_indicators` WHERE `grid`='$grid'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										$tp = $row['tp'];
										$tc = $row['tc'];
										$cpp = $row['cpp'];
										$h_index = $row['h-index'];
										$g_index = $row['g-index'];
										$x_index = $row['x index'];
										$x_g_index = $row['x(g) index'];
										$icp = $row['icp'];
										$male = $row['male-total'];
										$female = $row['female_total'];
										$oa = $row['total oa prop'];
										$tweet_cov = $row['twitter_coverage%'];
										$fb_cov = $row['fb_coverage%'];
										$mend_cov = $row['mendeley_coverage%'];
										$tweet_avg = $row['tweets_per_paper'];
										$fb_avg = $row['fb_per_paper'];
										$mend_avg = $row['mendeley_per_paper'];
									}
								}

								$sql = "SELECT * FROM `external` WHERE `grid`='$grid'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										$wiki_link = $row['wiki_link'];
										$info = $row['info'];
										$est = $row['est_year'];
										$inst = $row['inst_type'];
										$arwu = $row['arwu'];
										$the = $row['the'];
										$qs = $row['qs'];
										$leiden = $row['leiden'];
										$nirf = $row['nirf'];
									}
								}

							?>
                        </h1>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <h6>Institution type - <?php echo $inst; ?></h6>
                                <h6>Year of Establishment - <?php echo $est; ?></h6>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                        <hr>
                        <p><?php echo $info; ?>
                            <br>
                            <a <?php echo 'href="' . $wiki_link . '"'; ?> target="_blank">
                                <span class="text-dark">Source: Wikipedia (<span
                                            class="font-italic">Click for more</span>)</span></a>
                        </p>
                        <hr>
                        <br>
                        <section id="key" class="container ftco-animate pb-4 mb-4">
                            <h2 class="mb-3 font-weight-bold" id="overall">Key Indicators</h2>
                            <table class="table table-borderless table-responsive-xl table-sm">
                                <tr>
                                    <td><b>Total Research Papers</b></td>
                                    <td><?php echo $tp; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Total Citations</b></td>
                                    <td><?php echo $tc; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Citations per paper</b></td>
                                    <td><?php echo $cpp; ?></td>
                                </tr>
                                <tr>
                                    <td><span class="font-weight-bold font-italic">h-index</span></td>
                                    <td><?php echo $h_index; ?></td>
                                </tr>
                                <tr>
                                    <td><span class="font-weight-bold font-italic">g-index</span></td>
                                    <td><?php echo $g_index; ?></td>
                                </tr>
                                <tr>
                                    <td><b>ICP proportion</b></td>
                                    <td><?php echo $icp; ?>%</td>
                                </tr>
                                <tr>
                                    <td><b>Male / Female 1<sup>st</sup> author </b></td>
                                    <td>
                                        <ul>
                                            <li>Male: &nbsp;<?php echo $male; ?>%</li>
                                            <li>Female: &nbsp;<?php echo $female; ?>%</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Open Access availability</b></td>
                                    <td><?php echo $oa; ?>%</td>
                                </tr>
                                <tr>
                                    <td><b>Altmetric Attention</b></td>
                                    <td>
                                        <ul>
                                            <li>Twitter Coverage: &nbsp;<?php echo $tweet_cov; ?> %</li>
                                            <li>Facebook Coverage: &nbsp;<?php echo $fb_cov; ?> %</li>
                                            <li>Mendeley Coverage: &nbsp;<?php echo $mend_cov; ?> %</li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </section>
                    </div>

                    <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                        <div class="sidebar-box ftco-animate">
                            <img src="images/logo/IIT_Kharagpur_Logo.jpg" alt="logo"
                                 class="img img-thumbnail">
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <div class="categories">
                                <h3>Categories</h3>
                                <li><a href="#key">Key Indicators<span class="ion-ios-arrow-forward"></span></a></li>
                                <li><a href="#research">Research Output and Citations<span
                                                class="ion-ios-arrow-forward"></span></a></li>
                                <li><a href="#collab">Authorship and Collaboration<span
                                                class="ion-ios-arrow-forward"></span></a></li>
                                <li><a href="#grants">Research Grants<span class="ion-ios-arrow-forward"></span></a>
                                </li>
                                <li><a href="#gender">Gender Distribution<span class="ion-ios-arrow-forward"></span></a>
                                </li>
                                <li><a href="#open">Open Access Availability<span class="ion-ios-arrow-forward"></span></a>
                                </li>
                                <li><a href="#social">Social Media Visibility<span class="ion-ios-arrow-forward"></span></a>
                                </li>
                                <li><a href="#sdg">UN SDG related research<span
                                                class="ion-ios-arrow-forward"></span></a></li>
                                <li><a href="#thematic">Thematic Structure of Research Output<span
                                                class="ion-ios-arrow-forward"></span></a></li>
                                <li><a href="#external">External Data<span class="ion-ios-arrow-forward"></span></a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- Introduction ends here -->

        <section class="container pb-3 mb-3">
            <hr/>
            <h2 class="mb-3 text-center font-weight-bold" id="research">Research Output and Citations</h2>
            <div class="container">
                <div class="row p-3">
                    <div id="year_wise_pub_cit" class="col-12 col-md-6" style="height: 70vh"></div>
                    <div id="year_wise_cit" class="col-12 col-md-6" style="height: 70vh"></div>
                    <hr/>
                </div>
                <script>
					<?php
					$sql = "SELECT * FROM `year_wise_pub_cit` WHERE `grid`='$grid'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							$cagr = $row['cagr_pub'];
							$data = array($row['pub_2010'], $row['pub_2011'], $row['pub_2012'], $row['pub_2013'],
								$row['pub_2014'], $row['pub_2015'], $row['pub_2016'], $row['pub_2017'],
								$row['pub_2018'], $row['pub_2019']);
							$data2 = array($row['cit_2010'], $row['cit_2011'], $row['cit_2012'],
								$row['cit_2013'], $row['cit_2014'], $row['cit_2015'], $row['cit_2016'],
								$row['cit_2017'], $row['cit_2018'], $row['cit_2019']);
						}
					}
					?>
                    var myChart1 = echarts.init(document.getElementById('year_wise_pub_cit'));
                    myChart1.setOption({
                        animationDuration: 2500,
                        grid: {
                            show: true,
                            borderColor: 'Black'
                        },
                        title: {
                            text: 'Year-wise Publications & Citations',
                            textAlign: 'auto',
                            left: 'center',
                            textStyle: {
                                color: 'rgba(0, 0, 0, 1)',
                                fontWeight: 'bold'
                            },
                        },
                        tooltip: {
                            trigger: 'axis',

                        },
                        legend: {
                            data: ['Number of Publications', 'Number of Citations']
                        },
                        xAxis: {
                            data: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
                            axisTick: {
                                alignWithLabel: true
                            },
                            axisLine: {
                                show: true, // Hide full Line
                            },
                        },
                        yAxis: [
                            {
                                type: 'value',
                                name: 'Publications',
                                axisTick: {
                                    alignWithLabel: true,
                                    show: true
                                }
                            },
                            {
                                type: 'value',
                                name: 'Citations',
                                position: 'right',
                                axisTick: {
                                    show: true
                                }
                            }
                        ],
                        series: [{
                            name: 'Number of publications',
                            type: 'line',
                            data: <?php echo json_encode($data); ?>
                        },
                            {
                                name: 'Number of citations',
                                type: 'line',
                                data: <?php echo json_encode($data2); ?>
                            }]
                    });
                </script>
            </div>
            <hr/>
        </section>
    </div>
</div>
<?php include "footer.php" ?>
