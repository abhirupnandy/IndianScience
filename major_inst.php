<?php
	//header( "refresh:5;url=list_inst.php" );
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
                            <a class="dropdown-item active" href="major_inst.php">Major Institutions</a>
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
                <h1 class="mb-0 bread">Major Indian Institutions</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3" id="introduction">Comparison of indicators for Major Indian Institutions</h2>
                <p class="text-justify">
                    This page presents a comparative analysis of selected indicators for a set of 50 institutions which
                    have highest
                    research output during 2010 to 2019 period. The indicators computed are presented in following four
                    groups -
                    Research Output & Citations, Authorship & Collaboration patterns, Open Access availabity and Social
                    Media coverage.
                    <br>In research output and citations, the value of Total Papers (TP), Compounded Annual Growth Rate
                    (CAGR<sub>TP</sub>),
                    Total Citations (TC), Cited Output %, h-index of the institution and the institution's share % in
                    India's total research output are presented.
                    <br>In Authorship & Collaboration patterns, the percentage of single and multi-authored papers,
                    percentage of Female and Male authored research papers
                    and the percentage of research papers that invloves Domestic or International Collaboration are
                    shown.
                    <br>In the Open Access availability part, the percentage of research papers from an institution
                    which are available in Open Access is
                    presented, along with the percentage distribution of different OA types (Gold, Green, Bronze &
                    Hybrid).
                    <br>In the section on Social Media Coverage, the percentage of research papers from an institution,
                    which gets coverage in some
                    social media platform, are shown. The platform-wise percentage and average mentions per paper are
                    also shown for the instituions, for
                    Twitter, Facebook and Mendeley platforms.
                    <br>All the tables, by default, are sorted in descending order of the Total Papers (TP). However, a
                    click on any column will allow sorting the table values
                    by that column.
            </div>
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        <li><a href="#introduction">Comparison of Indicators<span class="ion-ios-arrow-forward"></span></a>
                        </li>
                        <li><a href="#research">Research Output & Citations<span
                                        class="ion-ios-arrow-forward"></span></a></li>
                        <li><a href="#author">Authorship & Collaboration<span class="ion-ios-arrow-forward"></span></a>
                        </li>
                        <li><a href="#oa">Open Access<span class="ion-ios-arrow-forward"></span></a></li>
                        <li><a href="#alt">Social Media Visibility<span class="ion-ios-arrow-forward"></span></a></li>
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
    <h2 class="mb-3" id="research">Research Output and Citations</h2>
    <table class="table table-bordered table-hover text-center text-dark " id="major_research_output">
        <thead style="background-color: #4f4e45;" class="cell-border table-dark">
        <tr>
            <th class="text-center align-top">Institution</th>
            <th class="align-top">TP (2010-2019)</th>
            <th class="align-top">CAGR<sub>TP</sub> (%)</th>
            <th class="align-top">TC (2010-2019)</th>
            <th class="align-top">Cited Output (%)</th>
            <th class="align-top">h - index</th>
            <th class="align-top">Share in India&rsquo;s total output (%)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Anna University, Chennai</td>
            <td>29698</td>
            <td>12.64</td>
            <td>316029</td>
            <td>81.34</td>
            <td>134</td>
            <td>2.74</td>
        </tr>
        <tr>
            <td>All India Institute of Medical Sciences,Delhi</td>
            <td>20545</td>
            <td>11.02</td>
            <td>225624</td>
            <td>73.5</td>
            <td>127</td>
            <td>1.89</td>
        </tr>
        <tr>
            <td>Indian Institute of Science Bangalore</td>
            <td>20257</td>
            <td>4.16</td>
            <td>308491</td>
            <td>88.4</td>
            <td>145</td>
            <td>1.87</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Kharagpur</td>
            <td>18329</td>
            <td>6.46</td>
            <td>274172</td>
            <td>89.4</td>
            <td>127</td>
            <td>1.69</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Bombay</td>
            <td>17384</td>
            <td>7.47</td>
            <td>235472</td>
            <td>85</td>
            <td>137</td>
            <td>1.6</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Madras</td>
            <td>16650</td>
            <td>7.33</td>
            <td>207338</td>
            <td>84.85</td>
            <td>126</td>
            <td>1.54</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Delhi</td>
            <td>15402</td>
            <td>8.55</td>
            <td>232485</td>
            <td>88.38</td>
            <td>131</td>
            <td>1.42</td>
        </tr>
        <tr>
            <td>University of Delhi</td>
            <td>15134</td>
            <td>5.8</td>
            <td>235350</td>
            <td>82.95</td>
            <td>144</td>
            <td>1.4</td>
        </tr>
        <tr>
            <td>Bhabha Atomic Research Centre, Mumbai</td>
            <td>13752</td>
            <td>2.76</td>
            <td>207521</td>
            <td>91.04</td>
            <td>126</td>
            <td>1.27</td>
        </tr>
        <tr>
            <td>Post Graduate Institute of Medical Education and Research,Chandigarh</td>
            <td>13712</td>
            <td>9.6</td>
            <td>142646</td>
            <td>74.85</td>
            <td>108</td>
            <td>1.26</td>
        </tr>
        <tr>
            <td>Vellore Institute of Technology University</td>
            <td>12526</td>
            <td>22.16</td>
            <td>150495</td>
            <td>82.77</td>
            <td>112</td>
            <td>1.16</td>
        </tr>
        <tr>
            <td>Jadavpur University</td>
            <td>12502</td>
            <td>5.61</td>
            <td>167053</td>
            <td>87.47</td>
            <td>112</td>
            <td>1.15</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Roorkee</td>
            <td>12470</td>
            <td>10.17</td>
            <td>207482</td>
            <td>89.59</td>
            <td>138</td>
            <td>1.15</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Kanpur</td>
            <td>11583</td>
            <td>6.35</td>
            <td>154648</td>
            <td>86.29</td>
            <td>107</td>
            <td>1.07</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Guwahati</td>
            <td>10364</td>
            <td>11.64</td>
            <td>146145</td>
            <td>88.2</td>
            <td>110</td>
            <td>0.96</td>
        </tr>
        <tr>
            <td>Banaras Hindu University</td>
            <td>10214</td>
            <td>3.48</td>
            <td>176674</td>
            <td>88.6</td>
            <td>126</td>
            <td>0.94</td>
        </tr>
        <tr>
            <td>University of Calcutta</td>
            <td>9703</td>
            <td>7.1</td>
            <td>113064</td>
            <td>84.73</td>
            <td>91</td>
            <td>0.89</td>
        </tr>
        <tr>
            <td>University of Pune</td>
            <td>9510</td>
            <td>9.75</td>
            <td>99732</td>
            <td>80.69</td>
            <td>101</td>
            <td>0.88</td>
        </tr>
        <tr>
            <td>Visvesvaraya Technological University, Belgaum</td>
            <td>8959</td>
            <td>20.14</td>
            <td>64177</td>
            <td>74.36</td>
            <td>74</td>
            <td>0.83</td>
        </tr>
        <tr>
            <td>Panjab University</td>
            <td>8469</td>
            <td>6.6</td>
            <td>171093</td>
            <td>89.82</td>
            <td>134</td>
            <td>0.78</td>
        </tr>
        <tr>
            <td>Manipal Academy of Higher Education, Manipal</td>
            <td>8307</td>
            <td>18.21</td>
            <td>74606</td>
            <td>78.21</td>
            <td>79</td>
            <td>0.77</td>
        </tr>
        <tr>
            <td>Aligarh Muslim University</td>
            <td>8025</td>
            <td>7.6</td>
            <td>123656</td>
            <td>85.88</td>
            <td>113</td>
            <td>0.74</td>
        </tr>
        <tr>
            <td>Maulana Azad National Institute of Technology, Bhopal</td>
            <td>7866</td>
            <td>14.15</td>
            <td>107564</td>
            <td>84.76</td>
            <td>107</td>
            <td>0.73</td>
        </tr>
        <tr>
            <td>University of Madras</td>
            <td>7017</td>
            <td>5.63</td>
            <td>96803</td>
            <td>84.3</td>
            <td>100</td>
            <td>0.65</td>
        </tr>
        <tr>
            <td>University of Hyderabad</td>
            <td>6651</td>
            <td>3.67</td>
            <td>91303</td>
            <td>84.38</td>
            <td>92</td>
            <td>0.61</td>
        </tr>
        <tr>
            <td>Indian Institute of Chemical Technology, Hyderabad</td>
            <td>6519</td>
            <td>-4.82</td>
            <td>103422</td>
            <td>77.97</td>
            <td>95</td>
            <td>0.6</td>
        </tr>
        <tr>
            <td>Jawaharlal Nehru University</td>
            <td>6363</td>
            <td>10.83</td>
            <td>91933</td>
            <td>79.24</td>
            <td>96</td>
            <td>0.59</td>
        </tr>
        <tr>
            <td>Amity University, Noida</td>
            <td>6325</td>
            <td>34.77</td>
            <td>57284</td>
            <td>79.04</td>
            <td>80</td>
            <td>0.58</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology (ISM) Dhanbad</td>
            <td>6322</td>
            <td>26.13</td>
            <td>78416</td>
            <td>86.68</td>
            <td>91</td>
            <td>0.58</td>
        </tr>
        <tr>
            <td>Bharathiar University, Coimbatore</td>
            <td>6194</td>
            <td>12.6</td>
            <td>88737</td>
            <td>87.49</td>
            <td>98</td>
            <td>0.57</td>
        </tr>
        <tr>
            <td>Tata Institute of Fundamental Research, Mumbai</td>
            <td>6152</td>
            <td>2.38</td>
            <td>143789</td>
            <td>88.69</td>
            <td>125</td>
            <td>0.57</td>
        </tr>
        <tr>
            <td>University of Kerala</td>
            <td>5834</td>
            <td>10.72</td>
            <td>54766</td>
            <td>79.67</td>
            <td>74</td>
            <td>0.54</td>
        </tr>
        <tr>
            <td>Annamalai University</td>
            <td>5376</td>
            <td>1.17</td>
            <td>80872</td>
            <td>87.28</td>
            <td>89</td>
            <td>0.5</td>
        </tr>
        <tr>
            <td>Christian Medical College &amp; Hospital, Vellore</td>
            <td>5334</td>
            <td>9.09</td>
            <td>56797</td>
            <td>77.15</td>
            <td>83</td>
            <td>0.49</td>
        </tr>
        <tr>
            <td>Pondicherry University</td>
            <td>5064</td>
            <td>12.59</td>
            <td>60962</td>
            <td>83.41</td>
            <td>84</td>
            <td>0.47</td>
        </tr>
        <tr>
            <td>King Georges Medical University, Lucknow</td>
            <td>5050</td>
            <td>7.7</td>
            <td>37116</td>
            <td>71.96</td>
            <td>62</td>
            <td>0.47</td>
        </tr>
        <tr>
            <td>Thapar University, Patiala</td>
            <td>4987</td>
            <td>18.2</td>
            <td>74715</td>
            <td>88.89</td>
            <td>96</td>
            <td>0.46</td>
        </tr>
        <tr>
            <td>Bharathidasan University</td>
            <td>4954</td>
            <td>8.7</td>
            <td>72566</td>
            <td>88.19</td>
            <td>86</td>
            <td>0.46</td>
        </tr>
        <tr>
            <td>Jamia Milia Islamia</td>
            <td>4923</td>
            <td>11.42</td>
            <td>77521</td>
            <td>86.63</td>
            <td>95</td>
            <td>0.45</td>
        </tr>
        <tr>
            <td>National Institute of Technology Rourkela</td>
            <td>4897</td>
            <td>18.84</td>
            <td>60716</td>
            <td>87.99</td>
            <td>72</td>
            <td>0.45</td>
        </tr>
        <tr>
            <td>Birla Institute of Technology and Science, Pilani</td>
            <td>4774</td>
            <td>17.88</td>
            <td>55937</td>
            <td>85.19</td>
            <td>76</td>
            <td>0.44</td>
        </tr>
        <tr>
            <td>Indian Statistical Institute, Kolkata</td>
            <td>4751</td>
            <td>6.01</td>
            <td>52270</td>
            <td>84.49</td>
            <td>79</td>
            <td>0.44</td>
        </tr>
        <tr>
            <td>Sanjay Gandhi Post Graduate Institute of Medical Sciences, Lucknow</td>
            <td>4652</td>
            <td>4.53</td>
            <td>70416</td>
            <td>74.33</td>
            <td>80</td>
            <td>0.43</td>
        </tr>
        <tr>
            <td>National Chemical Laboratory, Pune</td>
            <td>4598</td>
            <td>-0.12</td>
            <td>92440</td>
            <td>88.13</td>
            <td>110</td>
            <td>0.42</td>
        </tr>
        <tr>
            <td>Indian Association for the Cultivation of Science, Kolkata</td>
            <td>4477</td>
            <td>-0.36</td>
            <td>83081</td>
            <td>90.53</td>
            <td>98</td>
            <td>0.41</td>
        </tr>
        <tr>
            <td>Indian Institute of Engineering Science and Technology, Shibpur</td>
            <td>4438</td>
            <td>11.16</td>
            <td>44685</td>
            <td>84.84</td>
            <td>68</td>
            <td>0.41</td>
        </tr>
        <tr>
            <td>National Institute of Mental Health and Neurosciences, Bengaluru</td>
            <td>4416</td>
            <td>11.13</td>
            <td>45522</td>
            <td>80.89</td>
            <td>69</td>
            <td>0.41</td>
        </tr>
        <tr>
            <td>National Institute of Technology Tiruchirappalli</td>
            <td>4353</td>
            <td>14.39</td>
            <td>59008</td>
            <td>86.22</td>
            <td>83</td>
            <td>0.4</td>
        </tr>
        <tr>
            <td>West Bengal University of Technology, Kolkata</td>
            <td>4351</td>
            <td>11.77</td>
            <td>41509</td>
            <td>83.29</td>
            <td>68</td>
            <td>0.4</td>
        </tr>
        <tr>
            <td>Saha Institute of Nuclear Physics, Kolkata</td>
            <td>4195</td>
            <td>6.76</td>
            <td>89863</td>
            <td>90.49</td>
            <td>114</td>
            <td>0.39</td>
        </tr>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            table = $('#major_research_output').DataTable({
                'order': [[1, 'desc']],
                'searching': false,
                'paginate': true,
                'bInfo': false,
                'scrollX': true,
                'scrollCollapse': false,
                "lengthMenu": [[10, 25, -1], [10, 25, "All"]],
                'columnDefs': [
                    {
                        "width": "200px",
                        "className": 'text-left',
                        "targets": 0
                    },
                ]
            });
        });
    </script>
    <br><br>

    <h2 class="mb-3" id="author">Authorship and Collaboration Patterns</h2>
    <table class="table table-bordered table-hover text-center text-dark" id="major_auth_gender">
        <thead style="background-color: #4f4e45;" class="cell-border table-dark">
        <tr>
            <th rowspan="2" style="z-index: 10; background-color: #4f4e45;" class="text-center align-top">Institution
            </th>
            <th rowspan="2" class="align-top">TP (2010-2019)</th>
            <th colspan="4" class="align-top">Authorship Distribution (%)</th>
            <th colspan="2" class="align-top">Gender Distribution (%)</th>
            <th colspan="3" class="align-top">Collaboration Patterns (%)</th>
        </tr>
        <tr>
            <th class="align-top">Single Author</th>
            <th class="align-top">2-5 Authors</th>
            <th class="align-top">6-10 Authors</th>
            <th class="align-top">10+ Authors</th>
            <th class="align-top">Male (%)</th>
            <th class="align-top">Female (%)</th>
            <th class="align-top">Domestic (Single Institution)</th>
            <th class="align-top">Domestic (Multi Institution)</th>
            <th class="align-top">ICP</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="background-color: #FFFFFF">Anna University, Chennai</td>
            <td>29698</td>
            <td>1.95</td>
            <td>89.05</td>
            <td>8.66</td>
            <td>0.33</td>
            <td>77.95906</td>
            <td>22.04094</td>
            <td>63.02</td>
            <td>24.51</td>
            <td>12.47</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">All India Institute of Medical Sciences,Delhi</td>
            <td>20545</td>
            <td>4.92</td>
            <td>58.57</td>
            <td>29.7</td>
            <td>6.81</td>
            <td>68.88435</td>
            <td>31.11565</td>
            <td>63.01</td>
            <td>23.97</td>
            <td>13.03</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Science Bangalore</td>
            <td>20257</td>
            <td>3.93</td>
            <td>79.12</td>
            <td>14.61</td>
            <td>2.34</td>
            <td>76.03832</td>
            <td>23.96168</td>
            <td>49.68</td>
            <td>24.39</td>
            <td>25.93</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Kharagpur</td>
            <td>18329</td>
            <td>2.51</td>
            <td>84.6</td>
            <td>11.68</td>
            <td>1.22</td>
            <td>77.99472</td>
            <td>22.00528</td>
            <td>54.13</td>
            <td>25.64</td>
            <td>20.23</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Bombay</td>
            <td>17384</td>
            <td>2.88</td>
            <td>82.06</td>
            <td>13.1</td>
            <td>1.96</td>
            <td>78.2014</td>
            <td>21.7986</td>
            <td>51.46</td>
            <td>22.53</td>
            <td>26.02</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Madras</td>
            <td>16650</td>
            <td>2.44</td>
            <td>86.05</td>
            <td>9.69</td>
            <td>1.82</td>
            <td>79.82083</td>
            <td>20.17917</td>
            <td>56.47</td>
            <td>20.86</td>
            <td>22.66</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Delhi</td>
            <td>15402</td>
            <td>2.75</td>
            <td>86.11</td>
            <td>10.21</td>
            <td>0.93</td>
            <td>70.83301</td>
            <td>29.16699</td>
            <td>52.9</td>
            <td>26.38</td>
            <td>20.72</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">University of Delhi</td>
            <td>15134</td>
            <td>8.87</td>
            <td>65.53</td>
            <td>16.16</td>
            <td>9.44</td>
            <td>57.66827</td>
            <td>42.33173</td>
            <td>46.12</td>
            <td>28.47</td>
            <td>25.41</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Bhabha Atomic Research Centre, Mumbai</td>
            <td>13752</td>
            <td>2.63</td>
            <td>56.01</td>
            <td>29.08</td>
            <td>12.29</td>
            <td>72.37563</td>
            <td>27.62437</td>
            <td>36.69</td>
            <td>39.25</td>
            <td>24.06</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Post Graduate Institute of Medical Education and Research,Chandigarh
            </td>
            <td>13712</td>
            <td>3.76</td>
            <td>63.61</td>
            <td>27.33</td>
            <td>5.3</td>
            <td>73.8153</td>
            <td>26.1847</td>
            <td>71.09</td>
            <td>18.06</td>
            <td>10.85</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Vellore Institute of Technology University</td>
            <td>12526</td>
            <td>1.93</td>
            <td>84.18</td>
            <td>13.09</td>
            <td>0.79</td>
            <td>74.78757</td>
            <td>25.21243</td>
            <td>57.01</td>
            <td>23.4</td>
            <td>19.59</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Jadavpur University</td>
            <td>12502</td>
            <td>3.06</td>
            <td>80.29</td>
            <td>15.65</td>
            <td>1.01</td>
            <td>73.73979</td>
            <td>26.26021</td>
            <td>43.51</td>
            <td>38.21</td>
            <td>18.29</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Roorkee</td>
            <td>12470</td>
            <td>1.63</td>
            <td>89.13</td>
            <td>8.24</td>
            <td>1</td>
            <td>76.40185</td>
            <td>23.59815</td>
            <td>54.46</td>
            <td>26.45</td>
            <td>19.09</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Kanpur</td>
            <td>11583</td>
            <td>3.4</td>
            <td>86.04</td>
            <td>9.49</td>
            <td>1.07</td>
            <td>81.51328</td>
            <td>18.48672</td>
            <td>54.97</td>
            <td>20.8</td>
            <td>24.23</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Guwahati</td>
            <td>10364</td>
            <td>2.06</td>
            <td>85.75</td>
            <td>7.94</td>
            <td>4.25</td>
            <td>78.38185</td>
            <td>21.61815</td>
            <td>61.76</td>
            <td>19.6</td>
            <td>18.64</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Banaras Hindu University</td>
            <td>10214</td>
            <td>2.96</td>
            <td>73.43</td>
            <td>19.4</td>
            <td>4.21</td>
            <td>72.2649</td>
            <td>27.7351</td>
            <td>48.17</td>
            <td>29.75</td>
            <td>22.08</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">University of Calcutta</td>
            <td>9703</td>
            <td>5.62</td>
            <td>74.51</td>
            <td>17.42</td>
            <td>2.45</td>
            <td>65.75803</td>
            <td>34.24197</td>
            <td>40.8</td>
            <td>40.1</td>
            <td>19.1</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">University of Pune</td>
            <td>9510</td>
            <td>3.5</td>
            <td>77.94</td>
            <td>16.55</td>
            <td>2.01</td>
            <td>62.77481</td>
            <td>37.22519</td>
            <td>56.06</td>
            <td>28.55</td>
            <td>15.39</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Visvesvaraya Technological University, Belgaum</td>
            <td>8959</td>
            <td>2.09</td>
            <td>84.6</td>
            <td>12.8</td>
            <td>0.51</td>
            <td>68.96383</td>
            <td>31.03617</td>
            <td>58.86</td>
            <td>29.74</td>
            <td>11.41</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Panjab University</td>
            <td>8469</td>
            <td>3.45</td>
            <td>60.75</td>
            <td>13.53</td>
            <td>22.27</td>
            <td>63.89164</td>
            <td>36.10836</td>
            <td>38.14</td>
            <td>28.17</td>
            <td>33.69</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Manipal Academy of Higher Education, Manipal</td>
            <td>8307</td>
            <td>3.8</td>
            <td>71.16</td>
            <td>20.85</td>
            <td>4.19</td>
            <td>64.71875</td>
            <td>35.28125</td>
            <td>45.18</td>
            <td>33.97</td>
            <td>20.85</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Aligarh Muslim University</td>
            <td>8025</td>
            <td>3.51</td>
            <td>78.58</td>
            <td>15.74</td>
            <td>2.17</td>
            <td>77.30467</td>
            <td>22.69533</td>
            <td>51.75</td>
            <td>19.83</td>
            <td>28.42</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Maulana Azad National Institute of Technology, Bhopal</td>
            <td>7866</td>
            <td>2.87</td>
            <td>89.14</td>
            <td>7.55</td>
            <td>0.43</td>
            <td>78.36373</td>
            <td>21.63627</td>
            <td>55.54</td>
            <td>31.66</td>
            <td>12.8</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">University of Madras</td>
            <td>7017</td>
            <td>1.2</td>
            <td>76.74</td>
            <td>20.74</td>
            <td>1.33</td>
            <td>81.09394</td>
            <td>18.90606</td>
            <td>42.38</td>
            <td>37.04</td>
            <td>20.58</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">University of Hyderabad</td>
            <td>6651</td>
            <td>5.73</td>
            <td>73.45</td>
            <td>18.04</td>
            <td>2.78</td>
            <td>75.83748</td>
            <td>24.16252</td>
            <td>48.29</td>
            <td>31.21</td>
            <td>20.49</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Chemical Technology, Hyderabad</td>
            <td>6519</td>
            <td>0.8</td>
            <td>67.36</td>
            <td>29.97</td>
            <td>1.87</td>
            <td>79.75163</td>
            <td>20.24837</td>
            <td>56.93</td>
            <td>27.21</td>
            <td>15.86</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Jawaharlal Nehru University</td>
            <td>6363</td>
            <td>20.34</td>
            <td>60.14</td>
            <td>16.67</td>
            <td>2.84</td>
            <td>62.20695</td>
            <td>37.79305</td>
            <td>47.13</td>
            <td>32.52</td>
            <td>20.35</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Amity University, Noida</td>
            <td>6325</td>
            <td>4.17</td>
            <td>78.56</td>
            <td>14.56</td>
            <td>2.7</td>
            <td>57.93623</td>
            <td>42.06377</td>
            <td>42.51</td>
            <td>37.11</td>
            <td>20.38</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology (ISM) Dhanbad</td>
            <td>6322</td>
            <td>1.33</td>
            <td>90.56</td>
            <td>7.81</td>
            <td>0.3</td>
            <td>78.31866</td>
            <td>21.68134</td>
            <td>58.46</td>
            <td>29.36</td>
            <td>12.18</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Bharathiar University, Coimbatore</td>
            <td>6194</td>
            <td>0.77</td>
            <td>75.93</td>
            <td>20.58</td>
            <td>2.71</td>
            <td>82.8329</td>
            <td>17.1671</td>
            <td>35.18</td>
            <td>32.58</td>
            <td>32.24</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Tata Institute of Fundamental Research, Mumbai</td>
            <td>6152</td>
            <td>6.1</td>
            <td>45.87</td>
            <td>17.38</td>
            <td>30.66</td>
            <td>76.77527</td>
            <td>23.22473</td>
            <td>19.99</td>
            <td>21.68</td>
            <td>58.32</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">University of Kerala</td>
            <td>5834</td>
            <td>2.13</td>
            <td>76.95</td>
            <td>20.09</td>
            <td>0.84</td>
            <td>62.05945</td>
            <td>37.94055</td>
            <td>51.9</td>
            <td>34.8</td>
            <td>13.3</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Annamalai University</td>
            <td>5376</td>
            <td>2.16</td>
            <td>83.05</td>
            <td>13.86</td>
            <td>0.93</td>
            <td>89.48563</td>
            <td>10.51437</td>
            <td>59.39</td>
            <td>23.33</td>
            <td>17.28</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Christian Medical College &amp; Hospital, Vellore</td>
            <td>5334</td>
            <td>5.83</td>
            <td>52.46</td>
            <td>29.47</td>
            <td>12.24</td>
            <td>64.39057</td>
            <td>35.60943</td>
            <td>62.11</td>
            <td>14.14</td>
            <td>23.75</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Pondicherry University</td>
            <td>5064</td>
            <td>2.41</td>
            <td>83.35</td>
            <td>11.53</td>
            <td>2.71</td>
            <td>78.10627</td>
            <td>21.89373</td>
            <td>56.36</td>
            <td>27.71</td>
            <td>15.94</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">King Georges Medical University, Lucknow</td>
            <td>5050</td>
            <td>3.54</td>
            <td>62.12</td>
            <td>29.72</td>
            <td>4.61</td>
            <td>69.0364</td>
            <td>30.9636</td>
            <td>60.63</td>
            <td>30.89</td>
            <td>8.48</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Thapar University, Patiala</td>
            <td>4987</td>
            <td>2.77</td>
            <td>91.26</td>
            <td>5.75</td>
            <td>0.22</td>
            <td>73.83798</td>
            <td>26.16202</td>
            <td>52.88</td>
            <td>32.24</td>
            <td>14.88</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Bharathidasan University</td>
            <td>4954</td>
            <td>1.41</td>
            <td>73.92</td>
            <td>22.75</td>
            <td>1.92</td>
            <td>87.85929</td>
            <td>12.14071</td>
            <td>38.68</td>
            <td>33.53</td>
            <td>27.8</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Jamia Milia Islamia</td>
            <td>4923</td>
            <td>5.32</td>
            <td>73.23</td>
            <td>19.8</td>
            <td>1.65</td>
            <td>71.4574</td>
            <td>28.5426</td>
            <td>38.17</td>
            <td>34.33</td>
            <td>27.5</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">National Institute of Technology Rourkela</td>
            <td>4897</td>
            <td>1.74</td>
            <td>90.46</td>
            <td>7.21</td>
            <td>0.59</td>
            <td>74.29612</td>
            <td>25.70388</td>
            <td>61.92</td>
            <td>27.18</td>
            <td>10.9</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Birla Institute of Technology and Science, Pilani</td>
            <td>4774</td>
            <td>3.52</td>
            <td>81.61</td>
            <td>13.64</td>
            <td>1.24</td>
            <td>77.18254</td>
            <td>22.81746</td>
            <td>53.04</td>
            <td>28.93</td>
            <td>18.04</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Statistical Institute, Kolkata</td>
            <td>4751</td>
            <td>9.18</td>
            <td>81.62</td>
            <td>8.06</td>
            <td>1.14</td>
            <td>76.68062</td>
            <td>23.31938</td>
            <td>32.46</td>
            <td>33.3</td>
            <td>34.25</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Sanjay Gandhi Post Graduate Institute of Medical Sciences, Lucknow
            </td>
            <td>4652</td>
            <td>4.26</td>
            <td>61.61</td>
            <td>28.01</td>
            <td>6.13</td>
            <td>71.2976</td>
            <td>28.7024</td>
            <td>64.23</td>
            <td>26.07</td>
            <td>9.69</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">National Chemical Laboratory, Pune</td>
            <td>4598</td>
            <td>1.81</td>
            <td>70.12</td>
            <td>26.32</td>
            <td>1.76</td>
            <td>72.51256</td>
            <td>27.48744</td>
            <td>43.39</td>
            <td>39.13</td>
            <td>17.49</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Association for the Cultivation of Science, Kolkata</td>
            <td>4477</td>
            <td>1.68</td>
            <td>80.39</td>
            <td>16.57</td>
            <td>1.36</td>
            <td>74.9556</td>
            <td>25.0444</td>
            <td>51.66</td>
            <td>26.54</td>
            <td>21.8</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Engineering Science and Technology, Shibpur</td>
            <td>4438</td>
            <td>2.16</td>
            <td>85.8</td>
            <td>11.29</td>
            <td>0.74</td>
            <td>74.39429</td>
            <td>25.60571</td>
            <td>45.09</td>
            <td>41.39</td>
            <td>13.52</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">National Institute of Mental Health and Neurosciences, Bengaluru</td>
            <td>4416</td>
            <td>7.02</td>
            <td>56.25</td>
            <td>28.99</td>
            <td>7.74</td>
            <td>69.21148</td>
            <td>30.78852</td>
            <td>61.25</td>
            <td>21.35</td>
            <td>17.39</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">National Institute of Technology Tiruchirappalli</td>
            <td>4353</td>
            <td>1.68</td>
            <td>90.01</td>
            <td>8.04</td>
            <td>0.28</td>
            <td>81.14144</td>
            <td>18.85856</td>
            <td>56.33</td>
            <td>27.34</td>
            <td>16.33</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">West Bengal University of Technology, Kolkata</td>
            <td>4351</td>
            <td>5.33</td>
            <td>84.05</td>
            <td>9.97</td>
            <td>0.64</td>
            <td>76.66151</td>
            <td>23.33849</td>
            <td>28.34</td>
            <td>56.56</td>
            <td>15.1</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Saha Institute of Nuclear Physics, Kolkata</td>
            <td>4195</td>
            <td>3.5</td>
            <td>49.8</td>
            <td>12.78</td>
            <td>33.92</td>
            <td>69.5715</td>
            <td>30.4285</td>
            <td>22.48</td>
            <td>29.56</td>
            <td>47.96</td>
        </tr>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            table = $('#major_auth_gender').DataTable({
                'order': [[1, 'desc']],
                'searching': false,
                'paginate': true,
                'bInfo': false,
                'scrollX': true,
                'scrollCollapse': false,
                "lengthMenu": [[10, 25, -1], [10, 25, "All"]],
                'fixedColumns': {'left': 1},
                'columnDefs': [
                    {
                        "width": "200px",
                        "className": 'text-left',
                        "targets": 0
                    },
                    {
                        "targets": [6, 7],
                        "render": function (data) {
                            return parseFloat(data).toFixed(2);
                        }
                    }
                ]
            });
        });
    </script>
    <br><br>

    <h2 class="mb-3" id="oa">Open Access Availability</h2>
    <table class="table table-bordered table-hover text-center text-dark" id="major_oa">
        <thead style="background-color: #4f4e45;" class="cell-border table-dark">
        <tr>
            <th class="text-center align-top" rowspan="2">Institution</th>
            <th rowspan="2" class="align-top">TP (2010-2019)</th>
            <th rowspan="2" class="align-top">Total OA (%)</th>
            <th colspan="4">Open Access Subtypes (%)</th>
        </tr>
        <tr>
            <th class="align-top">Gold</th>
            <th class="align-top">Green</th>
            <th class="align-top">Bronze</th>
            <th class="align-top">Hybrid</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Anna University, Chennai</td>
            <td>29698</td>
            <td>14.27</td>
            <td>71.4</td>
            <td>9.11</td>
            <td>12.65</td>
            <td>6.84</td>
        </tr>
        <tr>
            <td>All India Institute of Medical Sciences,Delhi</td>
            <td>20545</td>
            <td>53.23</td>
            <td>61.58</td>
            <td>15.31</td>
            <td>18.38</td>
            <td>4.74</td>
        </tr>
        <tr>
            <td>Indian Institute of Science Bangalore</td>
            <td>20257</td>
            <td>32.21</td>
            <td>28.95</td>
            <td>42.99</td>
            <td>19.63</td>
            <td>8.43</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Kharagpur</td>
            <td>18329</td>
            <td>14.89</td>
            <td>38.42</td>
            <td>35.68</td>
            <td>18.97</td>
            <td>6.92</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Bombay</td>
            <td>17384</td>
            <td>20.65</td>
            <td>35.08</td>
            <td>37.7</td>
            <td>18.03</td>
            <td>9.19</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Madras</td>
            <td>16650</td>
            <td>18.54</td>
            <td>39.13</td>
            <td>32.04</td>
            <td>18.14</td>
            <td>10.69</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Delhi</td>
            <td>15402</td>
            <td>15.48</td>
            <td>42.74</td>
            <td>31.59</td>
            <td>17.99</td>
            <td>7.68</td>
        </tr>
        <tr>
            <td>University of Delhi</td>
            <td>15134</td>
            <td>31.65</td>
            <td>50.44</td>
            <td>19.21</td>
            <td>15.85</td>
            <td>14.51</td>
        </tr>
        <tr>
            <td>Bhabha Atomic Research Centre, Mumbai</td>
            <td>13752</td>
            <td>23.74</td>
            <td>45.3</td>
            <td>23.09</td>
            <td>11</td>
            <td>20.61</td>
        </tr>
        <tr>
            <td>Post Graduate Institute of Medical Education and Research,Chandigarh</td>
            <td>13712</td>
            <td>50.49</td>
            <td>57.27</td>
            <td>18.16</td>
            <td>20.06</td>
            <td>4.51</td>
        </tr>
        <tr>
            <td>Vellore Institute of Technology University</td>
            <td>12526</td>
            <td>23.11</td>
            <td>77.58</td>
            <td>8.88</td>
            <td>8.39</td>
            <td>5.15</td>
        </tr>
        <tr>
            <td>Jadavpur University</td>
            <td>12502</td>
            <td>16.69</td>
            <td>47.94</td>
            <td>30.97</td>
            <td>15</td>
            <td>6.09</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Roorkee</td>
            <td>12470</td>
            <td>14.19</td>
            <td>50.9</td>
            <td>20.23</td>
            <td>20.28</td>
            <td>8.59</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Kanpur</td>
            <td>11583</td>
            <td>21.51</td>
            <td>27.13</td>
            <td>46.83</td>
            <td>16.81</td>
            <td>9.23</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology Guwahati</td>
            <td>10364</td>
            <td>18.63</td>
            <td>38.43</td>
            <td>26.46</td>
            <td>13.05</td>
            <td>22.06</td>
        </tr>
        <tr>
            <td>Banaras Hindu University</td>
            <td>10214</td>
            <td>25.88</td>
            <td>47.64</td>
            <td>26.64</td>
            <td>16.46</td>
            <td>9.27</td>
        </tr>
        <tr>
            <td>University of Calcutta</td>
            <td>9703</td>
            <td>22.81</td>
            <td>44.78</td>
            <td>31.13</td>
            <td>16.72</td>
            <td>7.37</td>
        </tr>
        <tr>
            <td>University of Pune</td>
            <td>9510</td>
            <td>19.67</td>
            <td>50.94</td>
            <td>22.61</td>
            <td>17.26</td>
            <td>9.19</td>
        </tr>
        <tr>
            <td>Visvesvaraya Technological University, Belgaum</td>
            <td>8959</td>
            <td>16.54</td>
            <td>70.04</td>
            <td>12.15</td>
            <td>9.78</td>
            <td>8.03</td>
        </tr>
        <tr>
            <td>Panjab University</td>
            <td>8469</td>
            <td>37.93</td>
            <td>44.65</td>
            <td>16.78</td>
            <td>8.78</td>
            <td>29.79</td>
        </tr>
        <tr>
            <td>Manipal Academy of Higher Education, Manipal</td>
            <td>8307</td>
            <td>43.95</td>
            <td>59.3</td>
            <td>16.43</td>
            <td>17.09</td>
            <td>7.18</td>
        </tr>
        <tr>
            <td>Aligarh Muslim University</td>
            <td>8025</td>
            <td>30.26</td>
            <td>66.72</td>
            <td>14.25</td>
            <td>11.82</td>
            <td>7.21</td>
        </tr>
        <tr>
            <td>Maulana Azad National Institute of Technology, Bhopal</td>
            <td>7866</td>
            <td>17.35</td>
            <td>67.69</td>
            <td>10.26</td>
            <td>13.33</td>
            <td>8.72</td>
        </tr>
        <tr>
            <td>University of Madras</td>
            <td>7017</td>
            <td>30.41</td>
            <td>73.43</td>
            <td>10.64</td>
            <td>9.18</td>
            <td>6.75</td>
        </tr>
        <tr>
            <td>University of Hyderabad</td>
            <td>6651</td>
            <td>23.21</td>
            <td>49.87</td>
            <td>21.76</td>
            <td>21.5</td>
            <td>6.87</td>
        </tr>
        <tr>
            <td>Indian Institute of Chemical Technology, Hyderabad</td>
            <td>6519</td>
            <td>10.69</td>
            <td>50.5</td>
            <td>19.23</td>
            <td>22.53</td>
            <td>7.75</td>
        </tr>
        <tr>
            <td>Jawaharlal Nehru University</td>
            <td>6363</td>
            <td>30.32</td>
            <td>52.15</td>
            <td>21</td>
            <td>19.34</td>
            <td>7.52</td>
        </tr>
        <tr>
            <td>Amity University, Noida</td>
            <td>6325</td>
            <td>18.17</td>
            <td>57.62</td>
            <td>18.54</td>
            <td>14.27</td>
            <td>9.57</td>
        </tr>
        <tr>
            <td>Indian Institute of Technology (ISM) Dhanbad</td>
            <td>6322</td>
            <td>12.51</td>
            <td>63.46</td>
            <td>8.22</td>
            <td>21.74</td>
            <td>6.57</td>
        </tr>
        <tr>
            <td>Bharathiar University, Coimbatore</td>
            <td>6194</td>
            <td>24.09</td>
            <td>67.56</td>
            <td>13</td>
            <td>11.19</td>
            <td>8.24</td>
        </tr>
        <tr>
            <td>Tata Institute of Fundamental Research, Mumbai</td>
            <td>6152</td>
            <td>69.98</td>
            <td>26.04</td>
            <td>37.98</td>
            <td>12.36</td>
            <td>23.62</td>
        </tr>
        <tr>
            <td>University of Kerala</td>
            <td>5834</td>
            <td>31.49</td>
            <td>62.22</td>
            <td>17.42</td>
            <td>11.92</td>
            <td>8.44</td>
        </tr>
        <tr>
            <td>Annamalai University</td>
            <td>5376</td>
            <td>28.92</td>
            <td>61.35</td>
            <td>11.06</td>
            <td>9.65</td>
            <td>17.94</td>
        </tr>
        <tr>
            <td>Christian Medical College &amp; Hospital, Vellore</td>
            <td>5334</td>
            <td>58.98</td>
            <td>59.09</td>
            <td>16.34</td>
            <td>16.69</td>
            <td>7.88</td>
        </tr>
        <tr>
            <td>Pondicherry University</td>
            <td>5064</td>
            <td>21.45</td>
            <td>60.22</td>
            <td>17.77</td>
            <td>14</td>
            <td>8.01</td>
        </tr>
        <tr>
            <td>King Georges Medical University, Lucknow</td>
            <td>5050</td>
            <td>60.97</td>
            <td>50.11</td>
            <td>30.95</td>
            <td>15.26</td>
            <td>3.67</td>
        </tr>
        <tr>
            <td>Thapar University, Patiala</td>
            <td>4987</td>
            <td>11.79</td>
            <td>54.08</td>
            <td>20.58</td>
            <td>19.56</td>
            <td>5.78</td>
        </tr>
        <tr>
            <td>Bharathidasan University</td>
            <td>4954</td>
            <td>26.67</td>
            <td>56.32</td>
            <td>23.47</td>
            <td>10.14</td>
            <td>10.07</td>
        </tr>
        <tr>
            <td>Jamia Milia Islamia</td>
            <td>4923</td>
            <td>28.62</td>
            <td>57.35</td>
            <td>25.34</td>
            <td>10.01</td>
            <td>7.31</td>
        </tr>
        <tr>
            <td>National Institute of Technology Rourkela</td>
            <td>4897</td>
            <td>13.62</td>
            <td>57.72</td>
            <td>15.44</td>
            <td>20.69</td>
            <td>6.15</td>
        </tr>
        <tr>
            <td>Birla Institute of Technology and Science, Pilani</td>
            <td>4774</td>
            <td>21.87</td>
            <td>53.83</td>
            <td>27.97</td>
            <td>11.02</td>
            <td>7.18</td>
        </tr>
        <tr>
            <td>Indian Statistical Institute, Kolkata</td>
            <td>4751</td>
            <td>35.02</td>
            <td>22</td>
            <td>56.67</td>
            <td>16.47</td>
            <td>4.87</td>
        </tr>
        <tr>
            <td>Sanjay Gandhi Post Graduate Institute of Medical Sciences, Lucknow</td>
            <td>4652</td>
            <td>51.48</td>
            <td>61.75</td>
            <td>17.04</td>
            <td>17.04</td>
            <td>4.18</td>
        </tr>
        <tr>
            <td>National Chemical Laboratory, Pune</td>
            <td>4598</td>
            <td>15.68</td>
            <td>45.08</td>
            <td>21.5</td>
            <td>21.64</td>
            <td>11.79</td>
        </tr>
        <tr>
            <td>Indian Association for the Cultivation of Science, Kolkata</td>
            <td>4477</td>
            <td>20.55</td>
            <td>27.61</td>
            <td>50.33</td>
            <td>11.2</td>
            <td>10.87</td>
        </tr>
        <tr>
            <td>Indian Institute of Engineering Science and Technology, Shibpur</td>
            <td>4438</td>
            <td>13.29</td>
            <td>53.05</td>
            <td>29.15</td>
            <td>10</td>
            <td>7.8</td>
        </tr>
        <tr>
            <td>National Institute of Mental Health and Neurosciences, Bengaluru</td>
            <td>4416</td>
            <td>44.25</td>
            <td>68.53</td>
            <td>11.98</td>
            <td>13.25</td>
            <td>6.24</td>
        </tr>
        <tr>
            <td>National Institute of Technology Tiruchirappalli</td>
            <td>4353</td>
            <td>10.34</td>
            <td>62.22</td>
            <td>16.89</td>
            <td>12.89</td>
            <td>8</td>
        </tr>
        <tr>
            <td>West Bengal University of Technology, Kolkata</td>
            <td>4351</td>
            <td>17.33</td>
            <td>53.45</td>
            <td>30.64</td>
            <td>10.08</td>
            <td>5.84</td>
        </tr>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            table = $('#major_oa').DataTable({
                'order': [[1, 'desc']],
                'searching': false,
                'paginate': true,
                'bInfo': false,
                scrollX: true,
                "autoWidth": false,
                "lengthMenu": [[10, 25, -1], [10, 25, "All"]],
                'columnDefs': [
                    {
                        "width": "200px",
                        "className": 'text-left',
                        "targets": 0
                    },
                ]
            });
        });
    </script>
    <br><br>

    <h2 class="mb-3" id="alt">Social Media Coverage</h2>
    <table class="table table-bordered table-hover text-center text-dark" id="major_altmetric">
        <thead style="background-color: #4f4e45;" class="cell-border table-dark">
        <tr>
            <th rowspan="3" style="z-index: 10; background-color: #4f4e45;" class="text-center align-top">Institution
            </th>
            <th rowspan="3" class="align-top">TP (2010-2019)</th>
            <th rowspan="3" class="align-top">Overall Coverage (%)</th>
            <th colspan="6">Platform-wise coverage (%)</th>
        </tr>
        <tr>
            <th colspan="2" class="align-top">Twitter</th>
            <th colspan="2" class="align-top">Facebook</th>
            <th colspan="2" class="align-top">Mendeley</th>
        </tr>
        <tr>
            <th class="align-top">Coverage (%)</th>
            <th class="align-top">Average Tweets per paper</th>
            <th class="align-top">Coverage (%)</th>
            <th class="align-top">Average mentions per paper</th>
            <th class="align-top">Coverage (%)</th>
            <th class="align-top">Average mentions per paper</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="background-color: #FFFFFF">Anna University, Chennai</td>
            <td>29698</td>
            <td>9.131928076</td>
            <td>4.528924507</td>
            <td>2.480297398</td>
            <td>0.798033538</td>
            <td>1.451476793</td>
            <td>8.993871641</td>
            <td>42.37177087</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">All India Institute of Medical Sciences,Delhi</td>
            <td>20545</td>
            <td>36.51496715</td>
            <td>25.56826478</td>
            <td>9.175328384</td>
            <td>7.476271599</td>
            <td>2.037109375</td>
            <td>36.04770017</td>
            <td>44.91709425</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Science Bangalore</td>
            <td>20257</td>
            <td>31.31756924</td>
            <td>20.56573036</td>
            <td>6.358857417</td>
            <td>3.840647677</td>
            <td>1.636246787</td>
            <td>30.93251715</td>
            <td>37.59543568</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Kharagpur</td>
            <td>18329</td>
            <td>20.2084129</td>
            <td>11.28266681</td>
            <td>7.33172147</td>
            <td>1.964100606</td>
            <td>1.541666667</td>
            <td>20.02837034</td>
            <td>42.61836012</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Bombay</td>
            <td>17384</td>
            <td>25.54072711</td>
            <td>15.2669121</td>
            <td>5.535795026</td>
            <td>2.231937414</td>
            <td>1.572164948</td>
            <td>25.12655315</td>
            <td>36.71840659</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Madras</td>
            <td>16650</td>
            <td>21.00900901</td>
            <td>12.55255255</td>
            <td>3.255502392</td>
            <td>1.813813814</td>
            <td>1.394039735</td>
            <td>20.75675676</td>
            <td>35.34056713</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Delhi</td>
            <td>15402</td>
            <td>20.93234645</td>
            <td>11.58291131</td>
            <td>5.668161435</td>
            <td>1.817945721</td>
            <td>2.078571429</td>
            <td>20.74405921</td>
            <td>46.39029734</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">University of Delhi</td>
            <td>15134</td>
            <td>32.29813665</td>
            <td>23.37121713</td>
            <td>7.903590614</td>
            <td>5.167173252</td>
            <td>1.947570332</td>
            <td>31.76952557</td>
            <td>60.61168885</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Bhabha Atomic Research Centre, Mumbai</td>
            <td>13752</td>
            <td>27.4141943</td>
            <td>19.56806283</td>
            <td>3.884057971</td>
            <td>3.126817917</td>
            <td>1.581395349</td>
            <td>27.15241419</td>
            <td>58.30878415</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Post Graduate Institute of Medical Education and Research,Chandigarh
            </td>
            <td>13712</td>
            <td>36.96032672</td>
            <td>26.18873979</td>
            <td>13.36563631</td>
            <td>7.84714119</td>
            <td>2.543680297</td>
            <td>36.56651109</td>
            <td>41.71061029</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Vellore Institute of Technology University</td>
            <td>12526</td>
            <td>15.27223375</td>
            <td>8.941401884</td>
            <td>3.076785714</td>
            <td>1.293309915</td>
            <td>1.395061728</td>
            <td>15.12054926</td>
            <td>44.34318902</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Jadavpur University</td>
            <td>12502</td>
            <td>18.28507439</td>
            <td>11.35018397</td>
            <td>3.245243129</td>
            <td>1.55175172</td>
            <td>1.345360825</td>
            <td>18.03711406</td>
            <td>32.32682927</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Roorkee</td>
            <td>12470</td>
            <td>14.80352847</td>
            <td>8.187650361</td>
            <td>2.840352595</td>
            <td>1.355252606</td>
            <td>1.325443787</td>
            <td>14.61908581</td>
            <td>43.25342841</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Kanpur</td>
            <td>11583</td>
            <td>25.52015885</td>
            <td>15.71268238</td>
            <td>6.045604396</td>
            <td>2.883536217</td>
            <td>1.299401198</td>
            <td>25.16619183</td>
            <td>29.79759863</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology Guwahati</td>
            <td>10364</td>
            <td>24.6333462</td>
            <td>16.43187958</td>
            <td>3.68115091</td>
            <td>2.817445002</td>
            <td>1.797945205</td>
            <td>24.31493632</td>
            <td>34.41190476</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Banaras Hindu University</td>
            <td>10214</td>
            <td>28.52946936</td>
            <td>18.51380458</td>
            <td>4.122157589</td>
            <td>3.857450558</td>
            <td>1.626903553</td>
            <td>28.2063834</td>
            <td>41.42971191</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">University of Calcutta</td>
            <td>9703</td>
            <td>26.11563434</td>
            <td>17.33484489</td>
            <td>3.294292509</td>
            <td>3.493764815</td>
            <td>1.879056047</td>
            <td>25.62094198</td>
            <td>28.85197104</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">University of Pune</td>
            <td>9510</td>
            <td>19.03259727</td>
            <td>11.55625657</td>
            <td>6.604185623</td>
            <td>2.492113565</td>
            <td>1.708860759</td>
            <td>18.84332282</td>
            <td>38.39174107</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Visvesvaraya Technological University, Belgaum</td>
            <td>8959</td>
            <td>7.913829668</td>
            <td>4.408974216</td>
            <td>2.729113924</td>
            <td>0.747851323</td>
            <td>1.208955224</td>
            <td>7.757562228</td>
            <td>42.51942446</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Panjab University</td>
            <td>8469</td>
            <td>41.11465344</td>
            <td>31.38505136</td>
            <td>6.173438676</td>
            <td>6.695005313</td>
            <td>1.656084656</td>
            <td>40.87849805</td>
            <td>76.85037551</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Manipal Academy of Higher Education, Manipal</td>
            <td>8307</td>
            <td>29.05982906</td>
            <td>21.57216805</td>
            <td>10.64955357</td>
            <td>5.007824726</td>
            <td>2.038461538</td>
            <td>28.90333454</td>
            <td>43.97251145</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Aligarh Muslim University</td>
            <td>8025</td>
            <td>20.41121495</td>
            <td>13.24610592</td>
            <td>3.933207902</td>
            <td>2.579439252</td>
            <td>1.555555556</td>
            <td>20.09968847</td>
            <td>46.76689399</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Maulana Azad National Institute of Technology, Bhopal</td>
            <td>7866</td>
            <td>11.21281465</td>
            <td>5.453852021</td>
            <td>2.193473193</td>
            <td>1.042461226</td>
            <td>1.292682927</td>
            <td>11.07297229</td>
            <td>54.83352468</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">University of Madras</td>
            <td>7017</td>
            <td>22.17471854</td>
            <td>15.69046601</td>
            <td>2.786557675</td>
            <td>1.710132535</td>
            <td>1.725</td>
            <td>20.99187687</td>
            <td>35.09911745</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">University of Hyderabad</td>
            <td>6651</td>
            <td>30.0857014</td>
            <td>20.34280559</td>
            <td>3.810790835</td>
            <td>3.443091264</td>
            <td>1.454148472</td>
            <td>29.75492407</td>
            <td>33.90045478</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Chemical Technology, Hyderabad</td>
            <td>6519</td>
            <td>26.39975456</td>
            <td>14.38870992</td>
            <td>3.298507463</td>
            <td>2.300966406</td>
            <td>1.333333333</td>
            <td>26.21567725</td>
            <td>33.83791691</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Jawaharlal Nehru University</td>
            <td>6363</td>
            <td>37.0265598</td>
            <td>27.70705642</td>
            <td>6.531480431</td>
            <td>5.029074336</td>
            <td>1.70625</td>
            <td>36.33506208</td>
            <td>42.86548443</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Amity University, Noida</td>
            <td>6325</td>
            <td>17.97628458</td>
            <td>12.33201581</td>
            <td>9.348717949</td>
            <td>1.928853755</td>
            <td>1.983606557</td>
            <td>17.77075099</td>
            <td>43.57918149</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Technology (ISM) Dhanbad</td>
            <td>6322</td>
            <td>11.83169883</td>
            <td>6.849098387</td>
            <td>1.815242494</td>
            <td>0.885795634</td>
            <td>1.178571429</td>
            <td>11.73679215</td>
            <td>37.11051213</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Bharathiar University, Coimbatore</td>
            <td>6194</td>
            <td>19.69648046</td>
            <td>11.737165</td>
            <td>3.247592847</td>
            <td>1.549886987</td>
            <td>2.885416667</td>
            <td>19.22828544</td>
            <td>35.86230059</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Tata Institute of Fundamental Research, Mumbai</td>
            <td>6152</td>
            <td>57.57477243</td>
            <td>45.61118336</td>
            <td>8.898431932</td>
            <td>10.07802341</td>
            <td>1.835483871</td>
            <td>56.4206762</td>
            <td>63.54220686</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">University of Kerala</td>
            <td>5834</td>
            <td>15.25539938</td>
            <td>8.998971546</td>
            <td>3.904761905</td>
            <td>2.416866644</td>
            <td>2.156028369</td>
            <td>14.96400411</td>
            <td>37.16494845</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Annamalai University</td>
            <td>5376</td>
            <td>17.29910714</td>
            <td>9.951636905</td>
            <td>2.304672897</td>
            <td>2.213541667</td>
            <td>1.739495798</td>
            <td>17.05729167</td>
            <td>46.58778626</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Christian Medical College &amp; Hospital, Vellore</td>
            <td>5334</td>
            <td>41.73228346</td>
            <td>27.76527934</td>
            <td>7.786630655</td>
            <td>7.855268091</td>
            <td>1.813842482</td>
            <td>41.30108736</td>
            <td>46.30640036</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Pondicherry University</td>
            <td>5064</td>
            <td>20.08293839</td>
            <td>13.66508689</td>
            <td>3.585260116</td>
            <td>2.152448657</td>
            <td>1.678899083</td>
            <td>19.76698262</td>
            <td>45.88611389</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">King Georges Medical University, Lucknow</td>
            <td>5050</td>
            <td>29.40594059</td>
            <td>19.64356436</td>
            <td>7.447580645</td>
            <td>5.366336634</td>
            <td>2.062730627</td>
            <td>29.16831683</td>
            <td>35.47997284</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Thapar University, Patiala</td>
            <td>4987</td>
            <td>14.29717265</td>
            <td>6.396631241</td>
            <td>2.504702194</td>
            <td>1.102867455</td>
            <td>1.109090909</td>
            <td>14.27712051</td>
            <td>44.1741573</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Bharathidasan University</td>
            <td>4954</td>
            <td>24.62656439</td>
            <td>17.13766653</td>
            <td>2.193168433</td>
            <td>1.796528058</td>
            <td>1.662921348</td>
            <td>24.30359306</td>
            <td>31.57392027</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Jamia Milia Islamia</td>
            <td>4923</td>
            <td>24.92382693</td>
            <td>16.98151534</td>
            <td>3.56937799</td>
            <td>3.290676417</td>
            <td>1.450617284</td>
            <td>24.70038594</td>
            <td>49.02878289</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">National Institute of Technology Rourkela</td>
            <td>4897</td>
            <td>13.06922606</td>
            <td>7.698590974</td>
            <td>8.366047745</td>
            <td>0.796405963</td>
            <td>1.564102564</td>
            <td>12.98754339</td>
            <td>51.50943396</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Birla Institute of Technology and Science, Pilani</td>
            <td>4774</td>
            <td>21.61709258</td>
            <td>14.30666108</td>
            <td>6.285505124</td>
            <td>2.450775031</td>
            <td>1.376068376</td>
            <td>21.36573104</td>
            <td>37.46568627</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Statistical Institute, Kolkata</td>
            <td>4751</td>
            <td>29.42538413</td>
            <td>16.16501789</td>
            <td>5.76171875</td>
            <td>2.504735845</td>
            <td>1.521008403</td>
            <td>28.54135971</td>
            <td>28.14085546</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Sanjay Gandhi Post Graduate Institute of Medical Sciences, Lucknow
            </td>
            <td>4652</td>
            <td>32.24419604</td>
            <td>22.44196045</td>
            <td>6.347701149</td>
            <td>6.835769561</td>
            <td>1.965408805</td>
            <td>31.77128117</td>
            <td>56.37415426</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">National Chemical Laboratory, Pune</td>
            <td>4598</td>
            <td>34.90648108</td>
            <td>22.11831231</td>
            <td>3.865290069</td>
            <td>3.610265333</td>
            <td>1.28313253</td>
            <td>34.66724663</td>
            <td>37.50878294</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Association for the Cultivation of Science, Kolkata</td>
            <td>4477</td>
            <td>34.73308019</td>
            <td>26.31226268</td>
            <td>2.555178268</td>
            <td>3.149430422</td>
            <td>1.241134752</td>
            <td>34.28635247</td>
            <td>22.73941368</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Indian Institute of Engineering Science and Technology, Shibpur</td>
            <td>4438</td>
            <td>12.37043713</td>
            <td>6.940063091</td>
            <td>2.13961039</td>
            <td>0.968904912</td>
            <td>1.11627907</td>
            <td>11.96484903</td>
            <td>23.71751412</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">National Institute of Mental Health and Neurosciences, Bengaluru</td>
            <td>4416</td>
            <td>51.74365942</td>
            <td>37.29619565</td>
            <td>8.940497875</td>
            <td>15.53442029</td>
            <td>1.809037901</td>
            <td>51.44927536</td>
            <td>50.20466549</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">National Institute of Technology Tiruchirappalli</td>
            <td>4353</td>
            <td>9.993108201</td>
            <td>5.145876407</td>
            <td>2.4375</td>
            <td>0.918906501</td>
            <td>1.15</td>
            <td>9.924190214</td>
            <td>42.63657407</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">West Bengal University of Technology, Kolkata</td>
            <td>4351</td>
            <td>12.64077224</td>
            <td>6.826017008</td>
            <td>3.255892256</td>
            <td>1.447943002</td>
            <td>2.476190476</td>
            <td>12.38795679</td>
            <td>25.09461967</td>
        </tr>
        <tr>
            <td style="background-color: #FFFFFF">Saha Institute of Nuclear Physics, Kolkata</td>
            <td>4195</td>
            <td>54.51728248</td>
            <td>46.53158522</td>
            <td>4.849897541</td>
            <td>9.225268176</td>
            <td>1.361757106</td>
            <td>53.659118</td>
            <td>82.88360729</td>
        </tr>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            table = $('#major_altmetric').DataTable({
                'order': [[1, 'desc']],
                'searching': false,
                'paginate': true,
                'bInfo': false,
                'scrollX': true,
                'scrollCollapse': false,
                "lengthMenu": [[10, 25, -1], [10, 25, "All"]],
                'fixedColumns': {'left': 1},
                'columnDefs': [
                    {
                        "width": "200px",
                        "className": 'text-left',
                        "targets": 0
                    },
                    {
                        "targets": [2, 3, 4, 5, 6, 7, 8],
                        "render": function (data) {
                            return parseFloat(data).toFixed(2);
                        }
                    }
                ]
            });
        });
    </script>
</div>
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
                                                   placeholder="Name of the Institution" autocomplete="off""/>
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
<?php include "footer.php" ?>
