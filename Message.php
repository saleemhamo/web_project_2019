<!doctype html>

<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



<nav id = "mainNav">

    <ul>
        <li><img src="images/shop.png" alt="icon" width="60" height="40"></li>
        <li><a href="Admin.php">Home</a></li>
        <li style="float:right"><a href="logout.php">Logout</a></li>
    </ul>

</nav>
<h1 class="container">Sharara Store</h1>



</body>
</html>
<?php
      $dbhost = "localhost";
     $dbuser = "root";
    $dbpass = "";
    $dbname = "store";

      $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);

    //  $sqlStatement = "SELECT * FROM messages ";

      $stmt = $pdo->query($sqlStatement);

		while ($row = $stmt->fetch()) {
		$mid = $row['mid'];	$name = $row['name'];			$email = $row['email'];
    		$address = $row['address'];			$title = $row['title'];		$body = $row['body'];
		echo '<table border=2px cellspacing=10  cellpading=15>';
		echo '<th>'. 'Message ID  '. '</th>';echo '<th>'. 'NAME  '. '</th>';echo '<th>'. 'EMAIL  '. '</th>';
		echo '<th>'. 'ADDRESS  '. '</th>';echo '<th>'. 'TITLE  '. '</th>';echo '<th>'. 'BODY  '. '</th>';
		echo "<tr>
          <td>$mid</td>
					<td>$name</td>
					<td>$email</td>
					<td>$address</td>
					<td>$title</td>
					<td>$body</td>
                </tr>";
		echo'</table>';

			echo "<br/>";
}


	?>
