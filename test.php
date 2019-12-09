
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>

<HEAD>
    <LINK href="myCSS.css" rel="stylesheet" type="text/css">
    <TITLE>Dahir's Web Page</TITLE>
</HEAD>

<BODY>
<DIV id="heading">

    <DIV id="logo">
        <A href="index.html">
            <IMG src="myPicture.jpg" alt="My Picture Was Here!" STYLE="height:180px; width:150px">
        </A>
    </DIV>

    <DIV id="headingtext">
        <H1>
            Hussein Dahir
        </H1>

        <DIV>
            <address id="myAddress">
                Ramallah - Beiteen
            </address>
        </DIV>
    </DIV>
</DIV>

<DIV id="leftnav">
    <DIV id="leftnavDiv">

        <A href="Education.htm">
            <DIV class="linkDiv">
                Education
            </DIV>
        </A>

        <A href="Employment.htm">
            <DIV class="linkDiv highlited">
                Employment
            </DIV>
        </A>

        <A href="Awards.htm">
            <DIV class="linkDiv">
                Awards
            </DIV>
        </A>

        <A href="Visited places.htm">
            <DIV class="linkDiv">
                Visited places
            </DIV>
        </A>

        <A href="Schedule.htm">
            <DIV class="linkDiv">
                Schedule
            </DIV>
        </A>
    </DIV>
</DIV>

<DIV id="center">
    <DIV class="centerDiv">
        <H2>
            Employment:
        </H2>
        <P>
            I worked in Samsung company for 2 years (2013-2015).
        </P>

        <DIV STYLE="padding: 1%; text-align: center">
            <A href="http://www.samsung.com/" target="_blank">
                <IMG src="samsung.jpg" alt="Samsung Logo" STYLE="height:300px; width:50%">
            </A>
        </DIV>

        <P>
            Then I moved to work in Apple Company since 2015 till now.
        </P>

        <DIV STYLE="padding: 1%; text-align: center">
            <A href="http://www.apple.com" target="_blank">
                <IMG src="apple.jpg" alt="Apple Logo" STYLE="height:300px; width:50%">
            </A>
        </DIV>

    </DIV>
</DIV>

<DIV id="rightnav">

    <DIV id="rightnavDiv">
        <DIV class="rightnavPic">
            <A target="_blank" href="IT113.jpg">
                <IMG src="IT113.jpg" alt="Picture is Missing"  height="200px" width="95%">
            </A>

        </DIV>

        <DIV class="rightnavPic">
            <A target="_blank" href="ibnSina.jpg">
                <IMG src="ibnSina.jpg" alt="Picture is Missing"  height="200px" width="95%">
            </A>
        </DIV>
    </DIV>

</DIV>

<DIV id="footer">
    COMP334, 2016
</DIV>


</BODY>
</HTML>

<?php
session_name("login");
session_start();
$host = "1170381.studentswebprojects.ritaj.ps";
$username = "c107_1170381_19";
$password = "comp334!";
$database = "c107_project_store";
$message = "";
try
{
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["login"]))
    {
        if(empty($_POST["email"]) || empty($_POST["password"]))
        {
            $message = '<label>All fields are required</label>';
        }
        else
        {
            $query = "SELECT * FROM customer WHERE email = :email AND password = :password";
            $statement = $connect->prepare($query);
            $statement->execute(
                array(
                    'email'     =>     $_POST["email"],
                    'password'     =>     $_POST["password"] ,




                )
            );
            $count = $statement->rowCount();
            if($count > 0)
            {  					 $_SESSION["email"] = $_POST["email"];

            }
            else
            {
                $message = '<label>Wrong Data</label>';
            }
        }
    }
}
catch(PDOException $error)
{
    $message = $error->getMessage();
}
?>








