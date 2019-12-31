<?php
session_name('loggedIn');
session_start();
include '../HeaderAndFooter/header.php';
include '../shared/dbConf.php';
?>
<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" href="../style.css">
</head>
<style>

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {background-color: darkgray;}

</style>
<body style="margin-top: 150px;">
<script>
    alert("You logged is as admin");

</script>
<article>
<main>
  <?php

    $sqlStatement = "SELECT * FROM products";
    // Prepare the results
    $result = $pdo->query($sqlStatement);
    // Execute the SQL query and get all rows
    $rows = $result->fetchAll();

   ?>
    <div style="overflow-x:auto;">
    <table>
        <tr>
            <th>

            </th>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                category
            </th>
            <th>
                price
            </th>
            <th>
                description
            </th>
            <th>
                size
            </th>
            <th>
                remarks
            </th>
            <th>
                quantity
            </th>
            <th>
                <button>Delete</button>
            </th>
            <th>
                <button>Update</button>
            </th>



        </tr>

        <?php


    foreach ($rows as $row) {
        $sqlStatement = "SELECT * FROM images WHERE pid = '" . $row['pid'] . "'";
        // Prepare the results
        $result = $pdo->query($sqlStatement);
        // Execute the SQL query and get all rows
        $images = $result->fetchAll();
        if (!empty($images[0])) {
            $f = $images[0];
        }
        ?>
           <tr>
            <td>
                <figure>
                    <img src="../images/<?php echo $row['pid']."/".$f['figure'];?>.jpg" alt="image" width="100" height="100">
                </figure>
            </td>
               <td>
                   <?php echo $row['pid']?>

            </td>

            <td> <?php echo $row['name']?>
            </td>

            <td> <?php echo $row['category']?>
            </td>

            <td>   <?php echo $row['price']?>
            </td>

            <td><?php echo $row['description']?>
            </td>

            <td>   <?php echo $row['size']?>
            </td>

            <td> <?php echo $row['remarks']?>
            </td>

            <td> <?php echo $row['quantity']?>
               <td>
                   <button>Delete</button>
               </td>
               <td>
                   <button>Update</button>
               </td>
           </tr>


    <?php
}
        ?>

    <tr>
        <form action="">
            <td>

            </td>
            <td>
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
            <td colspan="2">
                <input type="submit">
            </td>


        </form>
    </tr>
    </table>
    </div>



</body>
<?php include '../HeaderAndFooter/footer.html';?>
</html>
