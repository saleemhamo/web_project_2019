<!doctype html>

<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:white">



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

      $sqlStatement = "SELECT * FROM customer ";

      $stmt = $pdo->query($sqlStatement);

		while ($row = $stmt->fetch()) {
		$cusid = $row['cusID'];	$name = $row['name'];			$email = $row['email'];
    		$address = $row['address'];			$phone = $row['phone'];		$password = $row['password'];
		echo '<table border=2px cellspacing=10  cellpading=15>';
		echo '<th>'. 'CUSTOMER ID  '. '</th>';echo '<th>'. 'NAME  '. '</th>';echo '<th>'. 'EMAIL  '. '</th>';
		echo '<th>'. 'ADDRESS  '. '</th>';echo '<th>'. 'PHONE  '. '</th>';echo '<th>'. 'Password  '. '</th>';
		echo "<tr>
          <td>$cusid</td>
					<td>$name</td>
					<td>$email</td>
					<td>$address</td>
					<td>$phone</td>
					<td>$password</td>
                </tr>";
		echo'</table>';

			echo "<br/>";
}


	?>
