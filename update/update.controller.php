
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Covid-19 Data</title>

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
        $oldcountyname = filter_input(INPUT_POST, 'old-county-name');
        $newcountyname = filter_input(INPUT_POST, 'new-county-name');
    
        $query = "UPDATE counties C
        SET C.County_Name = '$newcountyname'
        WHERE C.County_Name = '$oldcountyname' ";

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

        <p><?php echo "The record was updated sucessfully"; ?></p>
            
		<table class="ba b--black">
			<thead>
				<tr>
					<th colspan="6" class="f2 tl ph2 pt5 pb2">Record Updated</th>
				</tr>
			</thead>
			<colgroup>
				<col span="2">
				<col span="2">
			</colgroup>
			<tr>
				<th class="f3 pl2 pr4 pt4 pb2" scope="col">Old County Name</th>
				<th class="f3 pl2 pr4 pt4 pb2" scope="col">New County Name</th>
			</tr>
			<tr>
					<td class="pl2 pr4 pt3 pb2"><?php echo $oldcountyname ?></td>
					<td class="pl2 pr4 pt3 pb2"><?php echo $newcountyname ?></td>
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
