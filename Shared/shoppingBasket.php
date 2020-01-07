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

    .adminNav {
        width: 100%;
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
    .head{
        background-color: darkgray;;
    }

</style>
<body style="margin-top: 150px">

<article>
    <main>


        <div style="overflow-x:auto;">
            <form action="configureCreditCard.php" class="myForm row" style="margin-right: 50%">
                <input type="submit" value="Place Order" style="background-color: #333333">
            </form>

            <table style="width=100%;">
                <tr style="height: 0">

                </tr>
                <tr style="height: 50px" class="head">
                    <th>
                        <figure>
                            <img
                                 width="100" height="0">
                        </figure>
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
                    <th>

                    </th>
                </tr>

            </table>
            <div id="BASKET">

            </div>


                <!--              ajax-->
                <script>
                    var ajax = new XMLHttpRequest();
                    var method = "POST";
                    var url = "getBasket.php";
                    var asynchronous = true;
                    ajax.open(method, url, asynchronous);
                    ajax.send();
                    ajax.onreadystatechange = function () {
                        if ((this.readyState == 4) && (this.status = 200)) {
                            basket = document.getElementById("BASKET");
                            basket.innerHTML = this.responseText;
                        }
                    }
                </script>


        </div>


</body>
<?php include '../HeaderAndFooter/footer.html'; ?>
</html>
