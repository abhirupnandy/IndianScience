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
<!-- BackToTop Button -->
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
<style>
    hr {
        color: black;
        background-color: black
    }

    body {
        overflow-x: hidden;
    }
</style>
<!-- NAVIGATION BAR -->
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
        </nav><!-- END nav -->
    </section>

    <div id="downloadas" style="color: black;">
        <div class="hero-wrap p-5" style="background-color: #FFA400">
            <div class="overlay"></div>
            <div class="container pt-4">
                <div class="row no-gutters slider-text align-items-end">
                    <div class="col-md-9 ftco-animate pb-5">
                        <h1 class="mb-0 bread">Institutional &nbsp;Reports</h1>
                    </div>
                </div>
            </div>
        </div><!-- Header Image-->
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
                        <p class="text-justify"><?php echo $info; ?>
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

                    <div class="col-lg-4 sidebar pl-lg-5 ftco-animate order-first order-lg-last">
                        <div class="sidebar-box ftco-animate">
							<?php $matches = glob('images/Institute_Logo/' . $inst_name . '/*.jpg'); ?>
                            <img src="<?php echo $matches[0]; ?>" alt="logo"
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
                                <li><a href="#external">External Data (Year - 2021)<span
                                                class="ion-ios-arrow-forward"></span></a></li>
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
                    <div class="col-12 col-md order-sm-0 order-md-0">
                        <canvas id="year_wise_pub_cit" height="200px"></canvas>
                    </div>
                    <hr/>
                    <div class="col-12 order-sm-1 order-md-2">
                        <hr/>
                        <canvas id="sub_wise_pub"></canvas>
                    </div>
                    <hr/>
                    <div class="col-12 col-md order-sm-2 order-md-1">
                        <canvas id="year_wise_cit" height="200px"></canvas>
                    </div>
                    <hr/>
                </div>
                <script>
                    let ctx1 = document.getElementById('year_wise_pub_cit').getContext('2d');
                    let myChart1 = new Chart(ctx1, {
                        type: 'line',
                        data: {
                            labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
                            datasets: [{
                                label: 'No. of Publications',
								<?php
								$sql = "SELECT * FROM `year_wise_pub_cit` WHERE `grid`='$grid'";
								// perform the query and store the result
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										$cagr = $row['cagr_pub'];
										$data = array($row['pub_2010'], $row['pub_2011'], $row['pub_2012'], $row['pub_2013'],
											$row['pub_2014'], $row['pub_2015'], $row['pub_2016'], $row['pub_2017'],
											$row['pub_2018'], $row['pub_2019']);
									}
								}
								?>
                                data: <?php echo json_encode($data); ?> ,
                                backgroundColor: [
                                    'rgba(255, 20, 16, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 20, 16, 1)'
                                ],
                                borderWidth: 3,
                                yAxisID: 'y',
                            },
                                {
                                    label: 'No. of Citations',
									<?php
									$sql = "SELECT * FROM `year_wise_pub_cit` WHERE `grid`='$grid'";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {
											$data = array($row['cit_2010'], $row['cit_2011'], $row['cit_2012'],
												$row['cit_2013'], $row['cit_2014'], $row['cit_2015'], $row['cit_2016'],
												$row['cit_2017'], $row['cit_2018'], $row['cit_2019']);
										}
									}
									?>
                                    data: <?php echo json_encode($data); ?> ,
                                    backgroundColor: [
                                        'rgba(0, 0, 164, 0.2)',
                                    ],
                                    borderColor: [
                                        'rgba(0, 0, 164, 1)',
                                    ],
                                    borderWidth: 3,
                                    yAxisID: 'y1',
                                }]
                        },
                        options: {
                            responsive: true,
                            interaction: {
                                mode: 'index',
                                intersect: false,
                            },
                            scales: {
                                x: {
                                    grid: {
                                        color: 'lightgrey',
                                        borderColor: 'black'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Year',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    },
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                },
                                y: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    drawBorder: false,
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'No. of publications',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    },
                                    grid: {
                                        color: 'lightgrey',
                                        borderColor: 'black',
                                        display: false
                                    }
                                },
                                y1: {
                                    grid: {
                                        color: 'lightgrey',
                                        borderColor: 'black'
                                    },
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    drawBorder: false,
                                    drawOnChartArea: false,
                                    beginAtZero: true,
                                    drawTicks: false,
                                    position: 'right',
                                    title: {
                                        display: true,
                                        text: 'No. of citations',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    font: {
                                        size: 18,
                                    },
                                    color: 'Black',
                                    display: true,
                                    position: 'top',
                                    text: 'Year-Wise Research output (CAGR = <?php echo $cagr; ?>%)',
                                }
                            }
                        }
                    });
                    let ctx2 = document.getElementById('sub_wise_pub').getContext('2d');
                    let myChart2 = new Chart(ctx2, {
                        type: 'radar',
                        data: {
                            labels: ['Mathematical Sciences', 'Physical Sciences', 'Chemical Sciences', 'Earth Sciences', 'Environmental Sciences', 'Biological Sciences', 'Agricultural and Veterinary Sciences', 'Information and Computing Sciences', 'Engineering', 'Technology', 'Medical and Health Sciences', 'Built Environment and Design', 'Education', 'Economics', 'Commerce, Management and Tourism Services', 'Studies in Human Society', 'Psychology and Cognitive Sciences', 'Law and Legal Studies', 'Studies in Creative Arts and Writing', 'Language, Communication and Culture', 'History and Archaeology', 'Philosophy and Religious Studies'],
                            datasets: [{
                                label: 'No. of publications',
                                fill: true,
								<?php
								$sql = "SELECT * FROM `sub_wise_research_output` WHERE `grid`='$grid'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										$data = array($row['sub1'], $row['sub2'], $row['sub3'], $row['sub4'], $row['sub5'],
											$row['sub6'], $row['sub7'], $row['sub8'], $row['sub9'], $row['sub10'], $row['sub11'],
											$row['sub18'], $row['sub19'], $row['sub20'], $row['sub21'], $row['sub22']);
									}
								}
								?>
                                data: <?php echo json_encode($data); ?> ,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 18, 80, 0.2)',
                                    'rgba(0, 0, 164, 0.2)',
                                    'rgba(10, 69, 64, 0.2)',
                                    'rgba(255, 20, 16, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 18, 80, 0.2)',
                                    'rgba(0, 0, 164, 0.2)',
                                    'rgba(10, 69, 64, 0.2)',
                                    'rgba(255, 20, 16, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)',
                                    'rgba(255, 18, 80, 1)',
                                    'rgba(0, 0, 164, 1)',
                                    'rgba(10, 69, 64, 1)',
                                    'rgba(255, 20, 16, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)',
                                    'rgba(255, 18, 80, 1)',
                                    'rgba(0, 0, 164, 1)',
                                    'rgba(10, 69, 64, 1)',
                                    'rgba(255, 20, 16, 1)'
                                ],
                                borderWidth: 3
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                r: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    grid: {
                                        color: 'grey',
                                    },
                                    angleLines: {
                                        color: 'grey',
                                        borderColor: 'black',
                                        display: true
                                    },
                                    suggestedMax: 0.9
                                },
                                y: {
                                    display: false,
                                }
                            },
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'top'
                                },
                                title: {
                                    display: true,
                                    position: 'top',
                                    text: 'Subject-area Distribution of Research output',
                                    color: 'Black',
                                    font: {
                                        size: 20
                                    }
                                }
                            }
                        }
                    });
                    let ctx3 = document.getElementById('year_wise_cit').getContext('2d');
                    let myChart3 = new Chart(ctx3, {
                        type: 'line',
                        data: {
                            labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
                            datasets: [
                                {
                                    label: 'Uncited publications',
									<?php
									$sql = "SELECT * FROM `year_wise_cited_percent` WHERE `grid`='$grid'";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {
											$data = array(100 - $row['cit_2010'], 100 - $row['cit_2011'], 100 - $row['cit_2012'],
												100 - $row['cit_2013'], 100 - $row['cit_2014'], 100 - $row['cit_2015'],
												100 - $row['cit_2016'], 100 - $row['cit_2017'], 100 - $row['cit_2018'], 100 - $row['cit_2019']);
										}
									}
									?>
                                    data: <?php echo json_encode($data); ?> ,
                                    backgroundColor: 'yellow',
                                    borderColor: 'rgba(255, 20, 16, 0.6)',
                                    fill: true,
                                    borderWidth: 3
                                },
                                {
                                    label: 'Cited publications',
									<?php
									$sql = "SELECT * FROM `year_wise_cited_percent` WHERE `grid`='$grid'";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {
											$data = array($row['cit_2010'], $row['cit_2011'], $row['cit_2012'],
												$row['cit_2013'], $row['cit_2014'], $row['cit_2015'], $row['cit_2016'],
												$row['cit_2017'], $row['cit_2018'], $row['cit_2019']);
										}
									}
									?>
                                    data: <?php echo json_encode($data); ?> ,
                                    backgroundColor: 'rgba(75, 192, 192, 0.61)',
                                    borderColor: 'blue',
                                    fill: true,
                                    borderWidth: 3
                                },
                            ]
                        },
                        options: {
                            responsive: true,
                            interaction: {
                                mode: 'index',
                                intersect: false,
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    grid: {
                                        color: 'lightgrey',
                                        borderColor: 'black',
                                    },
                                    title: {
                                        display: true,
                                        text: 'Year',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    grid: {
                                        color: 'lightgrey',
                                        borderColor: 'black'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Percentage',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    },
                                    stacked: true,
                                    beginAtZero: true
                                }
                            },
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    font: {
                                        size: 18
                                    },
                                    color: 'Black',
                                    display: true,
                                    position: 'top',
                                    text: 'Year-Wise Cited vs Uncited %',
                                }
                            }
                        }
                    });
                </script>
            </div>
            <hr/>
            <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-treemap@0.2.3"></script>
            <h2 class="mb-3 text-center font-weight-bold" id="collab">Authorship and Collaboration</h2>
            <div class="container">
                <div class="row p-3">
                    <div class="col-12 col-md">
                        <canvas id="year_wise_auth_type" height="250px"></canvas>
                    </div>
                    <div class="col-12 col-md">
                        <canvas id="year_wise_collab_type" height="250px"></canvas>
                    </div>
                </div>
                <hr/>
                <div class="row p-3">
                    <div class="col-12 col-md container" style="width: 100%; height: 100%">
                        <div id="top_10_collabs" style="width: 70vw;height: 80vh;"></div>
                    </div>
                </div>
                <script src="https://cdn.anychart.com/releases/v8/js/anychart-core.min.js"></script>
                <script src="https://cdn.anychart.com/releases/v8/js/anychart-treemap.min.js"></script>
                <script>
                    let ctx5 = document.getElementById('year_wise_auth_type').getContext('2d');
                    let myChart5 = new Chart(ctx5, {
                        type: 'line',
                        data: {
                            labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
                            datasets: [
                                {
                                    label: '1-authored publications',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `auth_1` FROM `year_wise_auth_type` WHERE `grid`='" . $grid . "' ORDER BY `year` ;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    backgroundColor: 'rgba(38, 186, 255, 0.6)',
                                    borderColor: 'blue',
                                    fill: true,
                                    borderWidth: 3
                                },
                                {
                                    label: '2 to 5 authored publications',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `auth_2` FROM `year_wise_auth_type` WHERE `grid`='" . $grid . "' ORDER BY `year` ;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    backgroundColor: 'rgba(194, 38, 255, 0.6)',
                                    borderColor: 'red',
                                    fill: true,
                                    borderWidth: 3
                                },
                                {
                                    label: '6 to 10 authored publications',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `auth_3` FROM `year_wise_auth_type` WHERE `grid`='" . $grid . "' ORDER BY `year` ;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    backgroundColor: 'rgba(245, 231, 59, 1)',
                                    borderColor: 'rgba(246,128,14,1)',
                                    fill: true,
                                    borderWidth: 2
                                },
                                {
                                    label: '10+ authored publications',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `auth_4` FROM `year_wise_auth_type` WHERE `grid`='" . $grid . "' ORDER BY `year`;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    backgroundColor: 'rgba(43, 240, 133, 0.6)',
                                    borderColor: 'green',
                                    fill: true,
                                    borderWidth: 3
                                }]
                        },
                        options: {
                            responsive: true,
                            interaction: {
                                mode: 'index',
                                intersect: false,
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    grid: {
                                        color: 'black'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Year',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    grid: {
                                        color: 'black'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Percentage',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    },
                                    max: 100,
                                    stacked: true,
                                    beginAtZero: true
                                }
                            },
                            plugins: {
                                title: {
                                    font: {
                                        size: 18
                                    },
                                    color: 'Black',
                                    display: true,
                                    position: 'top',
                                    text: 'Authorship type of Research Output',
                                }
                            }
                        }
                    });
                    let ctx6 = document.getElementById('year_wise_collab_type').getContext('2d');
                    let myChart6 = new Chart(ctx6, {
                        type: 'line',
                        data: {
                            labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
                            datasets: [
                                {
                                    label: 'International Collaboration',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `inter` FROM `year_wise_collab_type` WHERE `grid`='" . $grid . "' ORDER BY `year`;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 1)',
                                    ],
                                    borderColor: [
                                        'red',
                                    ],
                                    borderWidth: 3,
                                    fill: true
                                },
                                {
                                    label: 'Domestic Single-institution',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `dom_single` FROM `year_wise_collab_type` WHERE `grid`='" . $grid . "' ORDER BY `year`;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    backgroundColor: [
                                        'rgba(54, 162, 235, 1)',
                                    ],
                                    borderColor: [
                                        'rgba(38, 59, 158,1)',
                                    ],
                                    borderWidth: 3,
                                    fill: true
                                },
                                {
                                    label: 'Domestic Multi-institution',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `dom_multi` FROM `year_wise_collab_type` WHERE `grid`='" . $grid . "' ORDER BY `year` ;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    backgroundColor: [
                                        'rgba(255, 206, 86, 1)',
                                    ],
                                    borderColor: [
                                        'rgba(246,128,14,1)',
                                    ],
                                    borderWidth: 3,
                                    fill: true
                                }
                            ]
                        },
                        options: {
                            responsive: true,
                            interaction: {
                                mode: 'index',
                                intersect: false,
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    grid: {
                                        color: 'black'
                                    },
                                    title: {
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        },
                                        display: true,
                                        text: 'Year',
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    grid: {
                                        color: 'black'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Percentage',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    },
                                    max: 100,
                                    stacked: true,
                                    beginAtZero: false
                                }
                            },
                            plugins: {
                                title: {
                                    font: {
                                        size: 18
                                    },
                                    color: 'Black',
                                    display: true,
                                    position: 'top',
                                    text: 'Collaboration type of Research Output',
                                }
                            }
                        }
                    });
                    anychart.onDocumentReady(function () {
                        let data = [
                            {
                                name: "World", children: [
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT * FROM `top_10_collaborators` WHERE `grid`='" . $grid . "';");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$sum = $result[0][3] + $result[0][5] + $result[0][7] + $result[0][9] + $result[0][11] + $result[0][13] +
										$result[0][15] + $result[0][17] + $result[0][19] + $result[0][21];
									echo "{name:'" . $result[0][2] . "', value:" . $result[0][3] . ", fill:'orange'},";
									echo "{name:'" . $result[0][4] . "', value:" . $result[0][5] . ", fill:'yellow'},";
									echo "{name:'" . $result[0][6] . "', value:" . $result[0][7] . ", fill:'green'},";
									echo "{name:'" . $result[0][8] . "', value:" . $result[0][9] . ", fill:'lightblue'},";
									echo "{name:'" . $result[0][10] . "', value:" . $result[0][11] . ", fill:'cyan'},";
									echo "{name:'" . $result[0][12] . "', value:" . $result[0][13] . ", fill:'lightgreen'},";
									echo "{name:'" . $result[0][14] . "', value:" . $result[0][15] . ", fill:'coral'},";
									echo "{name:'" . $result[0][16] . "', value:" . $result[0][17] . ", fill:'teal'},";
									echo "{name:'" . $result[0][18] . "', value:" . $result[0][19] . ", fill:'brown'},";
									echo "{name:'" . $result[0][20] . "', value:" . $result[0][21] . ", fill:'pink'},";
									echo "{name:'Others', value:100-" . $sum . ", fill:'grey'}";
									?>
                                ]
                            },
                        ];
                        let treeData = anychart.data.tree(data, "as-tree");
                        let chart = anychart.treeMap(treeData);
                        chart.labels().useHtml(true);
                        chart.labels().format(
                            "<span style='font-weight: bold; font-size: x-small'>{%name}<br>{%value}</span>"
                        );
                        chart.headers(false);
                        chart.container("top_10_collabs");
                        chart.listen("drillchange", function (e) {
                            return false;
                        });
                        var title = chart.title();
                        title.enabled(true);
                        title.useHtml(true);
                        title.hAlign("center");
                        title.text(
                            "<b style='color:#000000; font-family: Helvetica Neue, Helvetica, Arial,sans-serif; font-size: 22px;'>" +
                            "Major collaborating countries</b>"
                        );

                        // draw the chart
                        chart.draw();
                    });
                </script>
            </div>
            <hr/>
            <h2 class="mb-3 text-center font-weight-bold" id="grants">Research Grants</h2>
            <div class="container">
                <div class="row p-3">
                    <div class="col">
                        <canvas id="year_wise_grants" height="200px"></canvas>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <table id="indian_agencies"
                               class="table table-responsive-sm table-bordered table-hover text-center h-50">
                            <thead class="table-dark">
                            <tr>
                                <th>Major Indian Funding Agencies</th>
                                <th>Thousand $</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 col-md-6">
                        <table id="international_agencies"
                               class="table table-responsive-sm table-bordered table-hover text-center h-50">
                            <thead class="table-dark">
                            <tr>
                                <th>Major International Funding Agencies</th>
                                <th>Thousand $</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <script>
                    let ctx7 = document.getElementById('year_wise_grants').getContext('2d');
                    let myChart7 = new Chart(ctx7, {
                        type: 'line',
                        data: {
                            labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
                            datasets: [{
                                label: 'Amount in million $',
								<?php
								$server = "localhost";
								$username = "textajfo_guest";
								$password = "guest@123";
								$dbname = "textajfo_indian_science_reports";
								$conn = new mysqli($server, $username, $password, $dbname);
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								}
								$sql = "SELECT * FROM `year_wise_grants` WHERE `grid`='$grid'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										$data = array($row['fund_2010'], $row['fund_2011'], $row['fund_2012'],
											$row['fund_2013'], $row['fund_2014'], $row['fund_2015'], $row['fund_2016'],
											$row['fund_2017'], $row['fund_2018'], $row['fund_2019']);
									}
								}
								?>
                                data: <?php echo json_encode($data); ?> ,
                                backgroundColor: [
                                    'rgba(255, 20, 16, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 20, 16, 1)'
                                ],
                                borderWidth: 3,
                                yAxisID: 'y',
                            },
                                /*{
                                    label: 'No. of grants',
                                    <?php
								$sql = "SELECT * FROM `year_wise_grants` WHERE `grid`='$grid'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										$data = array($row['grant_no_2010'], $row['grant_no_2011'], $row['grant_no_2012'],
											$row['grant_no_2013'], $row['grant_no_2014'], $row['grant_no_2015'], $row['grant_no_2016'],
											$row['grant_no_2017'], $row['grant_no_2018'], $row['grant_no_2019']);
									}
								}
								?>
                                    data: <?php echo json_encode($data); ?> ,
                                    backgroundColor: [
                                        'rgba(0, 0, 164, 0.2)',
                                    ],
                                    borderColor: [
                                        'rgba(0, 0, 164, 1)',
                                    ],
                                    borderWidth: 3,
                                    yAxisID: 'y1',
                                }*/]
                        },
                        options: {
                            responsive: true,
                            interaction: {
                                mode: 'index',
                                intersect: false,
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    title: {
                                        display: true,
                                        text: 'Year',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    },
                                    grid: {
                                        color: 'grey'
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    /*grid:{
                                        display: false
                                    },*/
                                    title: {
                                        display: true,
                                        text: 'Amount in Million $',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    }
                                },
                                /*y1: {
                                    ticks: {
                                        color: 'black',
                                        font:{
                                            weight: 'bold',
                                        }
                                    },
                                    drawBorder: false,
                                    drawOnChartArea: false,
                                    drawTicks: false,
                                    position: 'right',
                                    grid:{
                                        color: 'grey'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Amount in million $',
                                        color: 'Black',
                                        font:{
                                            size : 16,
                                            weight : 'bold'
                                        }
                                    }
                                }*/
                            },
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    font: {
                                        size: 18
                                    },
                                    display: true,
                                    color: 'Black',
                                    position: 'top',
                                    text: 'Year-Wise Research grants',
                                }
                            }
                        }
                    });
                    $(document).ready(function () {
                        table = $('#indian_agencies').DataTable({
                            'ordering': true,
                            'order': [[1, 'desc']],
                            'serverMethod': 'post',
                            'searching': false,
                            'paginate': false,
                            'bInfo': false,
                            'ajax': {
                                'url': 'scripts/indian_agency_script.php',
                                'data': function (d) {
                                    d.grid = grid;
                                }
                            },
                            'columns': [
                                {data: 'name', orderable: false},
                                {data: 'amount', orderable: false},
                            ],
                        });
                        table = $('#international_agencies').DataTable({
                            'ordering': true,
                            'order': [[1, 'desc']],
                            'serverMethod': 'post',
                            'searching': false,
                            'paginate': false,
                            'bInfo': false,
                            'ajax': {
                                'url': 'scripts/inter_agency_script.php',
                                'data': function (d) {
                                    d.grid = grid;
                                }
                            },
                            'columns': [
                                {data: 'name', orderable: false},
                                {data: 'amount', orderable: false},
                            ],
                        });
                    });
                </script>
            </div>
            <hr/>
            <h2 class="mb-3 text-center font-weight-bold" id="gender">Gender Distribution</h2>
            <div class="container">
                <div class="row p-3">
                    <div class="col">
                        <canvas id="year_wise_male_female" height="200px"></canvas>
                    </div>
                </div>
                <script>
                    let ctx8 = document.getElementById('year_wise_male_female').getContext('2d');
                    let myChart8 = new Chart(ctx8, {
                        type: 'line',
                        data: {
                            labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
                            datasets: [
                                {
                                    label: 'Female 1st authored publications',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `female` FROM `year_wise_gender` WHERE `grid`='" . $grid . "' ORDER BY `year`;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    fill: true,
                                    backgroundColor: 'yellow',
                                    borderColor: 'red',
                                    borderWidth: 3,
                                    lineTension: 0.4
                                },
                                {
                                    label: 'Male 1st authored publications',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `male` FROM `year_wise_gender` WHERE `grid`='" . $grid . "' ORDER BY `year`;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    fill: true,
                                    backgroundColor: 'rgba(38, 186, 255, 0.8)',
                                    borderColor: 'blue',
                                    borderWidth: 3
                                },]
                        },
                        options: {
                            responsive: true,
                            interaction: {
                                mode: 'index',
                                intersect: false,
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    grid: {
                                        color: 'black'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Year',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    title: {
                                        display: true,
                                        text: 'Percentage',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    },
                                    grid: {
                                        color: 'black'
                                    },
                                    stacked: true,
                                    beginAtZero: true
                                }
                            },
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    font: {
                                        size: 18
                                    },
                                    display: true,
                                    position: 'top',
                                    color: 'Black',
                                    text: 'Percentage of Female vs Male 1st authored publications',
                                }
                            }
                        }
                    });
                </script>
            </div>
            <hr/>
            <h2 class="mb-3 text-center font-weight-bold" id="open">Open Access Availability</h2>
            <div class="container">
                <div class="row p-3">
                    <div class="col">
                        <canvas id="year_wise_oa" height="200px"></canvas>
                    </div>
                    <div class="col">
                        <canvas id="year_wise_oa_types" height="200px"></canvas>
                    </div>
                </div>
                <script>
                    let ctx9 = document.getElementById('year_wise_oa').getContext('2d');
                    let myChart9 = new Chart(ctx9, {
                        type: 'line',
                        data: {
                            labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
                            datasets: [
                                {
                                    label: 'Open Access',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `open` FROM `year_wise_oa_prop` WHERE `grid`='" . $grid . "' ORDER BY `year`;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    fill: true,
                                    backgroundColor: 'rgba(54, 162, 235, 0.81)',
                                    borderColor: 'blue',
                                    borderWidth: 3
                                },
                                {
                                    label: 'Closed Access',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `closed` FROM `year_wise_oa_prop` WHERE `grid`='" . $grid . "' ORDER BY `year`;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    fill: true,
                                    backgroundColor: 'rgba(255, 99, 132, 0.81)',
                                    borderColor: 'red',
                                    borderWidth: 3
                                },
                            ]
                        },
                        options: {
                            responsive: true,
                            interaction: {
                                mode: 'index',
                                intersect: false,
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    grid: {
                                        color: 'black'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Year',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    title: {
                                        display: true,
                                        text: 'Percentage',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    },
                                    grid: {
                                        color: 'black'
                                    },
                                    max: 100,
                                    stacked: true,
                                    beginAtZero: true
                                }
                            },
                            plugins: {
                                title: {
                                    font: {
                                        size: 18
                                    },
                                    display: true,
                                    position: 'top',
                                    color: 'Black',
                                    text: 'Open Access availability',
                                }
                            }
                        }
                    });
                    let ctx91 = document.getElementById('year_wise_oa_types').getContext('2d');
                    let myChart91 = new Chart(ctx91, {
                        type: 'line',
                        data: {
                            labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
                            datasets: [
                                {
                                    label: 'Gold OA',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `gold` FROM `year_wise_oa_prop` WHERE `grid`='" . $grid . "' ORDER BY `year`;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    fill: true,
                                    backgroundColor: 'yellow',
                                    borderColor: 'black',
                                    borderWidth: 3
                                },
                                {
                                    label: 'Hybrid OA',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `hybrid` FROM `year_wise_oa_prop` WHERE `grid`='" . $grid . "' ORDER BY `year`;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    fill: true,
                                    backgroundColor: 'rgba(153, 102, 255,0.8)',
                                    borderColor: 'black',
                                    borderWidth: 3
                                },
                                {
                                    label: 'Green OA',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `green` FROM `year_wise_oa_prop` WHERE `grid`='" . $grid . "' ORDER BY `year`;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    fill: true,

                                    backgroundColor: 'green',
                                    borderColor: 'black',
                                    borderWidth: 3
                                },
                                {
                                    label: 'Bronze OA',
									<?php
									include 'scripts/config.php';
									$stmt = $conn->prepare("SELECT `bronze` FROM `year_wise_oa_prop` WHERE `grid`='" . $grid . "' ORDER BY `year`;");
									$stmt->execute();
									$result = $stmt->fetchAll();
									$data1 = array();
									foreach ($result as $rows) {
										array_push($data1, $rows[0]);
									}
									?>
                                    data: <?php echo json_encode($data1);?>,
                                    fill: true,
                                    backgroundColor: 'brown',
                                    borderColor: 'black',
                                    borderWidth: 3
                                },
                            ]
                        },
                        options: {
                            responsive: true,
                            interaction: {
                                mode: 'index',
                                intersect: false,
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    grid: {
                                        color: 'black'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Year',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    title: {
                                        display: true,
                                        text: 'Percentage',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    },
                                    grid: {
                                        color: 'black'
                                    },
                                    max: 100,
                                    stacked: true,
                                    beginAtZero: true
                                }
                            },
                            plugins: {
                                title: {
                                    font: {
                                        size: 18
                                    },
                                    display: true,
                                    color: 'Black',
                                    position: 'top',
                                    text: 'Open Access sub-types',
                                }
                            }
                        }
                    });
                </script>
            </div>
            <hr/>
            <h2 class="mb-3 text-center font-weight-bold" id="social">Social Media Visibility</h2>
            <div class="container">
                <div class="row p-3">
                    <div class="col">
                        <canvas id="altmetric_cov" height="200px"></canvas>
                    </div>
                    <div class="col">
                        <h4>Platform-wise values for 2010-2019 period</h4>
                        <ul class="pt-3">
                            <li>Twitter coverage : <?php echo $tweet_cov; ?> %</li>
                            <li>Facebook coverage : <?php echo $fb_cov; ?> %</li>
                            <li>Mendeley coverage : <?php echo $mend_cov; ?> %</li>
                            <li>Twitter average mentions per paper : <?php echo $tweet_avg; ?></li>
                            <li>Facebook average mentions per paper : <?php echo $fb_avg; ?></li>
                            <li>Mendeley average mentions per paper : 4<?php echo $mend_avg; ?></li>
                        </ul>
                    </div>
                </div>

                <script>
                    let ctx10 = document.getElementById('altmetric_cov').getContext('2d');
                    let myChart10 = new Chart(ctx10, {
                        type: 'line',
                        data: {
                            labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
                            datasets: [{
                                label: 'Coverage',
								<?php
								$server = "localhost";
								$username = "textajfo_guest";
								$password = "guest@123";
								$dbname = "textajfo_indian_science_reports";
								$conn = new mysqli($server, $username, $password, $dbname);
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								}
								$sql = "SELECT * FROM `year_wise_altmetric_coverage` WHERE `grid`='$grid'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										$data = array($row['2010'], $row['2011'], $row['2012'],
											$row['2013'], $row['2014'], $row['2015'], $row['2016'],
											$row['2017'], $row['2018'], $row['2019']);
									}
								}
								?>
                                data: <?php echo json_encode($data); ?> ,
                                backgroundColor: [
                                    'maroon',
                                ],
                                borderColor: [
                                    'red',
                                ],
                                borderWidth: 3
                            }]
                        },
                        options: {
                            responsive: true,
                            interaction: {
                                mode: 'index',
                                intersect: false,
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    grid: {
                                        color: 'grey'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Year',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: 'black',
                                        font: {
                                            weight: 'bold',
                                        }
                                    },
                                    grid: {
                                        color: 'grey'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Percentage',
                                        color: 'Black',
                                        font: {
                                            size: 16,
                                            weight: 'bold'
                                        }
                                    },
                                    beginAtZero: true
                                }
                            },
                            plugins: {
                                title: {
                                    font: {
                                        size: 18
                                    },
                                    display: true,
                                    color: 'Black',
                                    position: 'top',
                                    text: 'Social Media Coverage',
                                }
                            }
                        }
                    });
                </script>
            </div>
            <hr/>
            <h2 class="mb-3 text-center font-weight-bold" id="sdg">Research Output related to SDGs</h2>
            <div class="container">
                <div class="row p-3">
                    <div class="col">
                        <canvas id="sdg_chart" height="270px"></canvas>
                    </div>
                </div>
                <!--<table id="un_sdgs" class="table table-responsive-sm table-sm table-bordered table-hover table-striped text-center">
                    <thead class="table-dark">
                    <tr>
                        <th>SDGs</th><th>2010</th><th>2011</th><th>2012</th><th>2013</th><th>2014</th><th>2015</th><th>2016</th><th>2017</th><th>2018</th><th>2019</th><th>Total</th></tr>
                    </thead>
                </table>-->
            </div>
            <script>
                let ctx11 = document.getElementById('sdg_chart').getContext('2d');
                let myChart11 = new Chart(ctx11, {
                    type: 'line',
                    data: {
                        labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
                        datasets: [{
                            label: 'No Poverty',
							<?php
							include 'scripts/config.php';
							$stmt = $conn->prepare("SELECT SDG1, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
							$stmt->execute();
							$result = $stmt->fetchAll();
							$data1 = array();
							foreach ($result as $rows) {
								array_push($data1, $rows[0]);
							}
							?>
                            data: <?php echo json_encode($data1);?>,
                            borderColor: [
                                'red',
                            ],
                            borderWidth: 3
                        },
                            {
                                label: 'Zero Hunger',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG2, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,
                                borderColor: [
                                    'green',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Good Health and Well Being',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG3, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,
                                borderColor: [
                                    'yellow',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Quality Education',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG4, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,
                                borderColor: [
                                    'blue',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Gender Equality',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG5, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,
                                borderColor: [
                                    'orange',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Clean Water and Sanitation',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG6, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,

                                borderColor: [
                                    'purple',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Affordable and Clean Energy',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG7, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,

                                borderColor: [
                                    'cyan',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Decent Work and Economic Growth',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG8, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,

                                borderColor: [
                                    'magenta',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Industry, Innovation and Infrastructure',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG9, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,

                                borderColor: [
                                    'lime',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Reduced Inequalities',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG10, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,
                                borderColor: [
                                    'pink',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Sustainable Cities and Communities',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG11, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,

                                borderColor: [
                                    'teal',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Responsible Consumption and Production',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG12, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,

                                borderColor: [
                                    'black',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Climate Action',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG13, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,

                                borderColor: [
                                    'brown',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Life Below Water',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG14, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,

                                borderColor: [
                                    'rgba(0,0,128,1)',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Life on Land',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG15, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,

                                borderColor: [
                                    'maroon',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Peace, Justice and Strong Institutions',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG16, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,

                                borderColor: [
                                    'rgba(170,255,195,1)',
                                ],
                                borderWidth: 3
                            },
                            {
                                label: 'Partnerships for the Goals',
								<?php
								include 'scripts/config.php';
								$stmt = $conn->prepare("SELECT SDG17, year FROM year_wise_sdg WHERE `grid`='" . $grid . "' ORDER BY `year`;");
								$stmt->execute();
								$result = $stmt->fetchAll();
								$data1 = array();
								foreach ($result as $rows) {
									array_push($data1, $rows[0]);
								}
								?>
                                data: <?php echo json_encode($data1);?>,

                                borderColor: [
                                    'olive',
                                ],
                                borderWidth: 3
                            }]
                    },
                    options: {
                        responsive: true,
                        interaction: {
                            mode: 'index',
                            intersect: false,
                        },
                        scales: {
                            x: {
                                ticks: {
                                    color: 'black',
                                    font: {
                                        weight: 'bold',
                                    }
                                },
                                grid: {
                                    color: 'grey'
                                },
                                title: {
                                    display: true,
                                    text: 'Year',
                                    color: 'Black',
                                    font: {
                                        size: 16,
                                        weight: 'bold'
                                    }
                                }
                            },
                            y: {
                                ticks: {
                                    color: 'black',
                                    font: {
                                        weight: 'bold',
                                    }
                                },
                                //stacked: true,
                                grid: {
                                    color: 'grey'
                                },
                                title: {
                                    display: true,
                                    text: 'Number of publications',
                                    color: 'Black',
                                    font: {
                                        size: 16,
                                        weight: 'bold'
                                    }
                                },
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                font: {
                                    size: 18
                                },
                                display: true,
                                position: 'top',
                                color: 'Black',
                                text: 'Research Output on different SDGs',
                            }
                        }
                    }
                });
                $(document).ready(function () {
                    table = $('#un_sdgs').DataTable({
                        'ordering': true,
                        'order': [[11, 'desc']],
                        'serverMethod': 'post',
                        'searching': false,
                        'paginate': false,
                        'bInfo': false,
                        'ajax': {
                            'url': 'scripts/un_sdg_script.php',
                            'data': function (d) {
                                d.grid = grid;
                            }
                        },
                        'columns': [
                            {data: 'sdgs', orderable: false},
                            {data: '2010', orderable: false},
                            {data: '2011', orderable: false},
                            {data: '2012', orderable: false},
                            {data: '2013', orderable: false},
                            {data: '2014', orderable: false},
                            {data: '2015', orderable: false},
                            {data: '2016', orderable: false},
                            {data: '2017', orderable: false},
                            {data: '2018', orderable: false},
                            {data: '2019', orderable: false},
                            {data: 'sum', orderable: false},
                        ],
                    });
                });

            </script>
            <hr/>
            <h2 class="mb-3 text-center font-weight-bold" id="thematic">Research Portfolio</h2>
            <div class="container">
                <div class="row p-3 text-center">
                    <div class="col">
                        <h5>x-index : &nbsp;<?php echo $x_index; ?></h5>
                    </div>
                    <div class="col">
                        <h5>x(g)-index : &nbsp;<?php echo $x_g_index; ?></h5>
                    </div>
                    <div class="col">
                        <a href="search_page.php">
                            Search for more concepts
                            <span class="fa fa-search text-dark"></span>
                        </a>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col">
                        <img class="img-fluid" style="margin-left: auto; margin-right: auto; display: block;"
                             src=<?php echo '"images/bubble_output/' . $inst_name . '.jpg"'; ?>>
                    </div>
                </div>
            </div>
            <hr/>

            <div class="container">
                <section id="external" class="container ftco-animate pb-4 mb-4">
                    <h2 class="mb-3 text-center font-weight-bold" id="overall">External Data (Year - 2021)</h2>
                    <table class="table table-borderless table-responsive-lg offset-md-1">
                        <tr>
                            <td><b>ARWU rank :</b></td>
                            <td>
								<?php
									if ($arwu)
										echo $arwu;
									else
										echo "NA";
								?>
                            </td>
                        </tr>
                        <tr>
                            <td><b>THE rank :</b></td>
                            <td><?php
									if ($the)
										echo $the;
									else
										echo "NA";
								?></td>
                        </tr>
                        <tr>
                            <td><b>QS rank :</b></td>
                            <td><?php
									if ($qs)
										echo $qs;
									else
										echo "NA";
								?></td>
                        </tr>
                        <tr>
                            <td><b>Leiden rank :</b></td>
                            <td><?php
									if ($leiden)
										echo $leiden;
									else
										echo "NA";
								?></td>
                        </tr>
                        <tr>
                            <td><b>NIRF rank (Overall):</b></td>
                            <td><?php
									if ($nirf)
										echo $nirf;
									else
										echo "NA";
								?></td>
                        </tr>
                    </table>
                </section>
            </div>
        </section>
    </div>
</div>
<?php include "footer.php" ?>
