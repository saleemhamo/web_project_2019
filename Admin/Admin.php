<?php
session_name('loggedIn');
session_start();
include("../HeaderAndFooter/header.php");
include("../HeaderAndFooter/adminHeader.php");
include '../Shared/dbConf.php';
?>
<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" href="../style.css">
</head>
<style>
    body{
        font-size: large;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th {
        text-align: left;
        color: white;
    }

    td {
        text-align: left;
        padding: 8px;
    }

    tr {
        height: 150px;
    }

    input [type=text] {
        height: 50px;
    }

    input[type=submit], [type=button] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    tr:nth-child(even) {
        background-color: darkgray;
    }

    tr:nth-child(odd) {
        background-color: lightslategrey;
    }


</style>
<body style="margin-top: 150px">

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
            <table style="width=100%">
                <tr style="height: 50px">
                    <th>

                    </th>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Category
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Size
                    </th>
                    <th>
                        Remarks
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th colspan="2">

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
                                <img src="../images/<?php echo $row['pid'] . "/" . $f['figure']; ?>.jpg" alt="image"
                                     width="100" height="100">
                            </figure>
                        </td>
                        <td>
                            <?php echo $row['pid'] ?>

                        </td>

                        <td> <?php echo $row['name'] ?>
                        </td>

                        <td> <?php echo $row['category'] ?>
                        </td>

                        <td>   <?php echo $row['price'] ?>
                        </td>

                        <td><?php echo $row['description'] ?>
                        </td>

                        <td>   <?php echo $row['size'] ?>
                        </td>

                        <td> <?php echo $row['remarks'] ?>
                        </td>

                        <td> <?php echo $row['quantity'] ?>
                        </td>
                        <td>
                            <?php $pid = $row['pid']?>
                            <input type="button" value="Delete" name="Delete" onclick="window.location='deleteProduct.php?pid=<?php echo $pid?>'"/>
                        </td>
                        <td>
                            <input type="button" value="Update" name="update" onclick="window.location='updateProduct.php?pid=<?php echo $pid?>'"/>
                        </td>
                    </tr>
                    <?php
                }
                ?>

            </table>
        </div>


</body>
<?php include '../HeaderAndFooter/footer.html'; ?>
</html>
