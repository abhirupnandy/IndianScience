<?php
	$con = MySQLi_connect(
		"localhost", //Server host name.
		"textajfo_guest", //Database username.
		"guest@123", //Database password.
		"textajfo_indian_science_reports" //Database name or anything you would like to call it.
	);

	//Getting value of "search" variable from "script.js".
	if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
		$Name = $_POST['search'];
//Search query.
		$Query = "SELECT name, grid FROM institutes WHERE name LIKE '%$Name%' ORDER BY name LIMIT 6";
//Query execution
		$ExecQuery = MySQLi_query($con, $Query);
//Creating unordered list to display result.
		echo '
<ul style="list-style-type: none;  padding: 0;margin: 0;">
   ';
		//Fetching result from database.
		while ($Result = MySQLi_fetch_array($ExecQuery)) {
			?>
            <!-- Creating unordered list items.
				 Calling javascript function named as "fill" found in "script.js" file.
				 By passing fetched result as parameter. -->
            <a class="text-dark" href="institute.php?grid=<?php echo $Result['grid']; ?>">
                <li onclick='fill("<?php echo $Result['name']; ?>")'
                    style="background-color: #181c54; border: solid 1px #fff; border-radius: 5px"
                    class="text-light px-3 h6 py-0 my-0 d-flex align-items-center">

                    <h6 class="text-light p-2 pt-3">
                        <!-- Assigning searched result in "Search box" in "search.php" file. -->
						<?php echo $Result['name']; ?>
                    </h6></li>
            </a>
            <!-- Below php code is just for closing parenthesis. Don't be confused. -->
			<?php
		}
	}
?>
</ul>
