<!-- Long Nguyen, 1001247753 -->
<!-- Renato Amado, 1001355338 -->
<!-- 11-30-2020 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Covid-19 Data</title>

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
        $stateab = filter_input(INPUT_POST, 'state-ab');
        $countyname = filter_input(INPUT_POST, 'county-name');
        $population = filter_input(INPUT_POST, 'population');
        
		$query = "INSERT INTO counties
                    VALUES ('$countyname', '$stateab', $population)";

        if ($conn -> query($query)){
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

        <p><?php echo "New record is inserted sucessfully"; ?></p>
            
		<table class="ba b--black">
			<thead>
				<tr>
					<th colspan="6" class="f2 tl ph2 pt5 pb2">Record Added</th>
				</tr>
			</thead>
			<colgroup>
				<col span="2">
				<col span="2">
				<col span="2">
			</colgroup>
			<tr>
				<th class="f3 pl2 pr4 pt4 pb2" scope="col">State Abbr.</th>
				<th class="f3 pl2 pr4 pt4 pb2" scope="col">County Name</th>
				<th class="f3 pl2 pr4 pt4 pb2" scope="col">Population</th>
			</tr>
			<tr>
					<td class="pl2 pr4 pt3 pb2"><?php echo $stateab ?></td>
					<td class="pl2 pr4 pt3 pb2"><?php echo $countyname ?></td>
					<td class="pl2 pr4 pt3 pb2"><?php echo $population ?></td>
			</tr>
			
			<?php
                    }
                    else {
                        echo "<pre>Error: ".$query."<br/>
                        ".$conn -> errorInfo()[2]."</pre>";
                    }
				}
			?>
		</table>
    </main>
</body>
</html>
