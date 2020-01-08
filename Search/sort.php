<?php
session_name('loggedIn');
session_name('search');
session_start();
include("../Shared/dbConf.php");
?>
<!doctype html>
<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>


<?php

if(!isset($_SESSION['search']['filter'])){
    $filter = "name";
} else {
    $filter = $_SESSION['search']['filter'];

}

//$filter = $_POST['sortBy'];$_POST['searchValue']

$sqlStatement = "SELECT * FROM products WHERE name LIKE '%" . $_SESSION['search']['searchValue'] . "%' ORDER BY " . $filter;
// Prepare the results
$result = $pdo->query($sqlStatement);
// Execute the SQL query and get all rows
$rows = $result->fetchAll();

//echo $_SESSION['loggedIn'];


foreach ($rows as $row) {
    $sqlStatement = "SELECT * FROM images WHERE pid = '" . $row['pid'] . "'";
    // Prepare the results
    $result = $pdo->query($sqlStatement);
    // Execute the SQL query and get all rows
    $images = $result->fetchAll();
    if (!empty($images[0])) {
        $f = $images[0];
    }

    //echo $row['pid'];
    ?>


    <section id="SingleItems">
        <div>

            <figure style="float: left">
                <img src="../images/<?php echo $row['pid'] . "/" . $f['figure']; ?>.jpg" alt="image" width="250"
                     height="250">

            </figure>

        </div>


        <div class="itemText">
            <p>Name: <strong><?php echo $row['name']; ?> </strong></p>
            <p>Price: <?php echo $row['price']; ?></p>
            <p>Remarks: <?php echo $row['remarks']; ?></p>

        </div>

        <a href="<?php echo "../Shared/addToCart.php?pid=" . $row['pid']; ?>" class="itemButtons"
           style="margin: 120px 10px 50px 20px;"> Add To cart</a>
        <a href=" <?php echo "../Products/singleProduct.php?&pid=" . $row['pid']; ?>"
           style="float: left; margin: 0px 200px 10px 20px;"><strong>More Info</strong></a>

    </section>

    <?php
}
?>

<script>
    window.location = 'searchResult.php';
</script>
</body>
</html>

