<?php include 'dbConf.php';
include 'header.php';?>
<!doctype html>
<html>
<head>
    <title>Art Works</title>
</head>
<body>
<?php
//$sqlStatement = "SELECT COUNT(1) FROM items";
//// Prepare the results
//$result = $pdo->query($sqlStatement);
//// Execute the SQL query and get all rows
//$row = $result->fetch();
//$count = $row[0];
$count = 5;
for( $i = 0 ; $i < $count ; $i++)
{
?>
    <section id="SingleItems">
        <div>
            <figure>

                <img src="images/1.jpg" alt="image">
            </figure>

        </div>


        <div>


        <ul>
                    <li>
                        <p>Name</p>
                    </li>
                    <li>
                        <p>Price</p>
                    </li>
                    <li>
                        <p>quantity</p>
                    </li>
                    <li>
                        <a href="">More Info</a>
                    </li>
                </ul>

        </div>
    </section>
<?php
}




?>







</body>
</html>