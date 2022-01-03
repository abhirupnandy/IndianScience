<?php include 'header.php'?>

<?php
$let=$_GET['l'];
?>
<!-- NAVIGATION BAR -->

        <script>
            var btns = "";
            var letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            var letterArray = letters.split("");
            for(var i = 0; i < 26; i++){
                var letter = letterArray.shift();
                        btns += '<a href="list_inst.php?l='+letter+'">'+letter+'</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            function alphabetSearch(let){
                window.location = "search_results.php?letter="+let;
            }
            </script>
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
                            <a class="dropdown-item active" href="list_inst.php">Institutional Reports</a>
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
                <h1 class="mb-0 bread">Institutional &nbsp;Reports</h1>
            </div>
        </div>
    </div>
</div><!-- Header Image-->
<section class="ftco-section ftco-degree-bg">
    <div class="container ">
        <div class="row">
            <div class="col ftco-animate">
                <h1 class="mb-3 " id="introduction">List of Institutions</h1>
                <br>
                <center><script> document.write(btns); </script></center>
                <br>
                <table id="table_id" class="table table-responsive-sm table-bordered table-hover text-center text-dark w-100">
                    <thead style="background-color: #4f4e45; width: 100%" class="cell-border table-dark">
                    <tr>
                        <th class="align-top">Grid ID</th>
                        <th class="align-top">Institute name</th>
                        <th class="align-top">Sequence Number</th>
                        <th class="align-top">Total publications</th>
                        <th class="align-top">Report</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <script>
                    $(document).ready( function () {
                        var l = '<?php echo $let; ?>';
                        var u = 'scripts/inst_list_script.php?letter=';
                        let ul = u.concat(l);


                        $('#table_id').DataTable({
                            "order": [[ 1, "asc" ]],
                            'processing': true,
                            'serverSide': true,
                            'serverMethod': 'post',
                            'searching': true,
                            'paginate': true,
                            scrollX: true,
                            'language': {
                                search: "",
                                searchPlaceholder: "Search for an institution"
                            },
                            //'dom': '<"top"f>rt<"bottom"lp><"clear">',
                            'dom' : "<'row'<'pb-2 col-sm'f><'col-sm-2'>>" +
                                "<'row'<'col-sm-12'tr>>" +
                                "<'row'<'col-sm-4 p-2'l><'col-sm-7'p>>",
                            'ajax': {
                                'url':ul,

                            },
                            "columns": [
                                { "data": "grid", "visible": false, "searchable": false},
                                { "data": "name" },
                                { "data": "seq_no", "visible": false, "searchable": false},
                                { "data": "pub_count","visible": false,  "searchable": false},
                                { data: null , "render": function(data, type, row)
                                    {return '<form action="institute.php" method="get" id="nameform">'+
                                            '<button type="submit" class="btn btn-sm btn-outline-dark p-1 m-0" ' +
                                        'name="grid"' +
                                            'value="'+row.grid+'" form="nameform" >Info</button></form>'} }
                            ]
                        });
                    } );

                </script>
                <style>
                    .dataTables_filter input { width: 60vw }
                </style>
            </div>
        </div>
    </div>
</section>
	<?php include 'footer.php'?>
