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
        padding: 20px;
        text-align: left;
        color: white;
    }

    td {
        text-align: left;
        padding: 8px;
        font-family: "Agency FB";
        color: black;
        font-weight: bold;
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

    .adminNav input {
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

        $sqlStatement = "SELECT * FROM customers";
        // Prepare the results
        $result = $pdo->query($sqlStatement);
        // Execute the SQL query and get all rows
        $rows = $result->fetchAll();

        ?>
        <div style="overflow-x:auto;">
            <table style="width=100%; margin: 10px;" >
                <tr style="height: 50px">
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Date Of Birth
                    </th>
                    <th>
                        Address
                    </th>
                    <th>
                        Telephone
                    </th>

                </tr>

                <?php


                foreach ($rows as $row) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['cId'] ?>

                        </td>

                        <td> <?php echo $row['name'] ?>
                        </td>

                        <td> <?php echo $row['email'] ?>
                        </td>

                        <td>   <?php echo $row['dateOfBirth'] ?>
                        </td>

                        <td><?php echo $row['address'] ?>
                        </td>

                        <td>   <?php echo $row['telephone'] ?>
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
