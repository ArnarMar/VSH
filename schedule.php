<?php
	$title = "Grav Entertainment";
	include ("header.php");
?>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<body>
	<div class="container">
		<div class="row">
			<div class="page-header"><h1><?=$title?></h1></div>


				<div class="panel panel-default">

					<div class="panel-body">
						<div class="col-xs-12">
						<p><b>Events today!</b></p>
							<?php
							$con=mysqli_connect("tsuts.tskoli.is","1505982309","mypassword","1505982309_vsh");
							// Check connection
							if (mysqli_connect_errno())
							{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}

							$result = mysqli_query($con,"SELECT * FROM events");

							echo "<table border='1'>
							<tr>
								<th>Act</th>
								<th>Name</th>
								<th>Time</th>
							</tr>";

							while($row = mysqli_fetch_array($result))
							{
							echo "<tr>";
							echo "<td>" . $row['act'] . "</td>";
							echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['time'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							mysqli_close($con);
							?>
						</div>
					</div>
				</div>
		</div>

	</div>
</body>
<?php include ("footer.php") ?>