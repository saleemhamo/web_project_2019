<?php
session_name('loggedIn');
session_start();
include '../Shared/dbConf.php';
?>

<!doctype html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            text-align: left;
            color: white;
            width: 50px;
            margin: 5px;
            font-size: large;
            font-family: Arial;
        }

        td {
            font-size: large;
            text-align: left;
            padding: 8px;
            width: 50px;
            margin: 5px;
            font-family: Arial;
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

        h2 {
            color: white;
            margin-left: 45%;

        }
    </style>
</head>
<body>

<table>

    <?php

    $rows = [];
    foreach ($_SESSION['loggedIn']['cart'] as $pid) {
        $sqlStatement = "SELECT * FROM products WHERE pid ='" . $pid . "'";
        // Prepare the results
        $result = $pdo->query($sqlStatement);
        // Execute the SQL query and get all rows
        $row = $result->fetch();
        array_push($rows, $row);
    }
    if (empty($rows)) {
        ?>
        <h2>
            Empty Basket!
        </h2>

        <?php
    }

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
            <td>
                <form method="POST">
<!--                    <button type='button' onclick=\"window.location.href='www.example.com/page.html?id=".$id."'\" >-->
                    <?php $pid = $row['pid'];?>
                    <input type="button" value="Delete" name="delete" onclick="window.location='deleteFromBasket.php?pid=<?php echo $pid?>'"/>
                </form>                                                                         
            </td>
        </tr>


        <?php
    }

    ?>

</table>
</body>
</html>