<?php
session_name('loggedIn');
session_start();
include '../HeaderAndFooter/header.php'; ?>
<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body style="margin-top: 150px;">
<article>
    <main>

        <div id="message">
            <form method="post" action="ContactUs.php">
                <table style="width:550px;border:0;" cellpadding="8" cellspacing="0">
                    <tr>
                        <td>
                            <label for="Name">Sender Name :</label>
                        </td>
                        <td>
                            <input name="Name" type="text" maxlength="60" style="width:250px;"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="SenderEmail">Sender E-mail :</label>
                        </td>
                        <td>
                            <input name="SenderEmail" type="text" maxlength="43" style="width:250px;"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="SenderLocation ">Sender Location :</label>
                        </td>
                        <td>
                            <input name="SenderLocation" type="text" maxlength="90" style="width:250px;"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Messagetitle ">Message title :</label>
                        </td>
                        <td>
                            <input name="Messagetitle" type="text" maxlength="90" style="width:250px;"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="MessageBody">Message Body:</label>
                        </td>
                        <td>
                            <textarea name="MessageBody" rows="7" cols="40" style="width:350px;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input name="skip_Reset" type="reset" value="Reset Form"/>
                            <input name="skip_Submit" type="submit" value="Submit"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
</article>

</body>
<?php include '../HeaderAndFooter/footer.html';
include '../shared/dbConf.php';
?>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $sqlStatement = "INSERT INTO messages(name, email, address, title, body) VALUES (?,?,?,?,?)";
    $stmt = $pdo->prepare($sqlStatement);
    $status = $stmt->execute([$_POST['Name'], $_POST['SenderEmail'], $_POST['SenderLocation'], $_POST['Messagetitle'], $_POST['MessageBody']]);
    if ($status) {
        echo 'Data inserted successfully';
    } else {
        echo $stmt->error;
    }
}
?>
