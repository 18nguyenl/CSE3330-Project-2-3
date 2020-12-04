<!-- Long Nguyen, 1001247753 -->
<!-- Renato Amado, 1001355338 -->
<!-- 11-30-2020 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Covid-19 Data</title>

    <link rel="stylesheet" href="../css/styles.css">

<?php
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "covid19";

	$conn = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
	if (!$conn) {
		die("Connection failed");
	} else {
		$statename = filter_input(INPUT_GET, 'state-name');
		$countyname = filter_input(INPUT_GET, 'county-name');
		$date = filter_input(INPUT_GET, 'date');

		$query = "SELECT S.State_Name, S.State_Ab, D.County_Name, D.CDate, D.Daily_Count_Cases, D.Daily_Deaths
				FROM states S, coviddata D
				WHERE S.State_Name = '$statename' 
					AND S.State_Ab = D.State_Ab 
					AND D.County_Name = '$countyname' 
					AND D.CDate = '$date'";

		if ($query == null) {
			echo "No Record Available";
			die();
		} else {
			// Executing the query
			$stmt = $conn -> prepare($query);
			$stmt->execute(); // Provide values to INSERT as needed
			$rows = $stmt->fetchALL(PDO::FETCH_ASSOC); // Makes the array result an "associative array" or map
?>
</head>
<body>
    <header class="center w-75">
        <h1 class="f-headline lh-solid">Covid-19 Data</h1>
    </header>
    <main class="center w-75">
        <article class="mv5">
            <h2 class="f1 lh-title">Here are the results</h2>
        </article>

		<table class="ba b--black">
			<thead>
				<tr>
					<th colspan="6" class="f2 tl ph2 pt5 pb2">Results</th>
				</tr>
			</thead>
			<colgroup>
				<col span="2">
				<col span="2">
				<col span="2">
				<col span="2">
				<col span="2">
				<col span="2">
			</colgroup>
			<tr>
				<th class="f3 pl2 pr4 pt4 pb2" scope="col">State Name</th>
				<th class="f3 pl2 pr4 pt4 pb2" scope="col">State Abbr.</th>
				<th class="f3 pl2 pr4 pt4 pb2" scope="col">County Name</th>
				<th class="f3 pl2 pr4 pt4 pb2" scope="col">Daily Cases</th>
				<th class="f3 pl2 pr4 pt4 pb2" scope="col">Daily Deaths</th>
				<th class="f3 pl2 pr4 pt4 pb2" scope="col">Date</th>
			</tr>
			<?php
				foreach ($rows as $row) {
			?>
			<tr>
					<td class="pl2 pr4 pt3 pb2"><?php echo $row["State_Name"]; ?></td>
					<td class="pl2 pr4 pt3 pb2"><?php echo $row["State_Ab"]; ?></td>
					<td class="pl2 pr4 pt3 pb2"><?php echo $row["County_Name"]; ?></td>
					<td class="pl2 pr4 pt3 pb2"><?php echo $row["Daily_Count_Cases"]; ?></td>
					<td class="pl2 pr4 pt3 pb2"><?php echo $row["Daily_Deaths"]; ?></td>
					<td class="pl2 pr4 pt3 pb2"><?php echo $row["CDate"]; ?></td>
			</tr>
			
			<?php
						}
					}
				}
			?>
		</table>
    </main>
</body>
</html>
