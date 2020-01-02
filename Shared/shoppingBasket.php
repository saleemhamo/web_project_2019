<?php
session_name('loggedIn');
session_start();
include '../HeaderAndFooter/header.php';
include '../Shared/dbConf.php';
?>
<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" src="../style.css">
    <script type="text/javascript" src="addToCart.js">
    </script>
</head>
<style>

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
    tr{
        height: 150px;
    }
    input [type=text]{
        height: 50px;
    }
    input[type=submit],[type=button] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    tr:nth-child(even) {background-color: darkgray;}
    tr:nth-child(odd) {background-color: lightslategrey;}
    .adminNav{
        width: 100%;
    }
    .adminNav input{
        background-color: #333333;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: left;
        width: 30%;
        margin 50px;
    }

</style>
<body style="margin-top: 150px">

<article>
    <main>


        <?php
        $rows = [];
        foreach($_SESSION['loggedIn']['cart'] as $pid)
        {
            $sqlStatement = "SELECT * FROM products WHERE pid ='".$pid."'";
            // Prepare the results
            $result = $pdo->query($sqlStatement);
            // Execute the SQL query and get all rows
            $row = $result->fetch();
            array_push($rows,$row);
        }
        ?>


        <div style="overflow-x:auto;">
            <form action="placeOrder.php" class="myForm row" style="margin-right: 50%">
                <input type="submit" value="Place Order" style="background-color: #333333">
            </form>

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
                            <form action="">
                            <input type="submit" value="Delete" name="delete"/>
                            </form>
                        </td>
                    </tr>
                    <?php
                }

                ?>

            </table>
        </div>



</body>
<?php include '../HeaderAndFooter/footer.html';?>
</html>
