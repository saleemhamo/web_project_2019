<?php
session_name('loggedIn');
session_name('search');
session_start();
include("../HeaderAndFooter/header.php");
include("../Shared/dbConf.php");
if(isset($_GET['searchValue'])) {
    $_SESSION['search']['searchValue'] = $_GET['searchValue'];
}
?>
<!doctype html>
<html>
<head>
    <title>Search Result</title>
    <link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body style="margin-top: 150px">
<div id="result">
    <h1 class="label2">Search Result
        <div class="dropdown"
             style="float: right; margin-right: 200px; height: 50px; width: 150px;background-color: white;">
            <button onclick="myFunction()" class="dropbtn" style="color: black;width: 150px; font-weight: bold">
                Filter
            </button>
            <div id="myDropdown" class="dropdown-content">
                <a href="searchSession.php?filter=name">Name</a>
                <a href="searchSession.php?filter=price"">Price</a>
            </div>
        </div>

        <label style="float: right; margin-right: 20px;">Sort By</label>
    </h1>

    <div id="RESULT">

    </div>
    <!--             ajax-->
    <script>
        var ajax = new XMLHttpRequest();
        var method = "POST";
        var url = "sort.php";
        var asynchronous = true;
        ajax.open(method, url, asynchronous);
        ajax.send();
        ajax.onreadystatechange = function () {
            if ((this.readyState == 4) && (this.status = 200)) {
                basket = document.getElementById("RESULT");
                basket.innerHTML = this.responseText;
            }
        }
    </script>

    <script>
        /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>




</div>
</body>
</html>
