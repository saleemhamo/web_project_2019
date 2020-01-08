<?php
session_name('loggedIn');
session_start();
?>
<?php include("../HeaderAndFooter/header.php"); ?>
<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body style="margin-top: 150px">
<article>
    <main>
        <div class="aboutUs">
            <p>
                This site is a hypothetical souvenir store which is done as a term project for COMP334 Course at Birzeit
                University.
            </p>
            <p>
                <a href="https://github.com/saleemhamo/web_project_2019">Click here</a> to find the source code on <strong>github</strong>.
             </p>
            <p>
                It was done by
            <ul>
                <li>
                    Saleem Hamo - 1170381
                </li>
                <li>
                    Laith Bedah - 1143098
                </li>
            </ul>
            Instructor:
            <li>
                Dr. Yousef Hassouneh.
            </li>
            </p>
        </div>
        <figure>
            <img src="../images/ourPhoto.jpg" alt="photo" height="400" width="724" style="margin-left: 300px; border-radius: 10px;">
        </figure>
    </main>
</article>


<?php include '../HeaderAndFooter/footer.html'; ?>

</body>

</html>
