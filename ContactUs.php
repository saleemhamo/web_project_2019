<?php
//when press submet the message should upload to the server and shown to the admin this i think will be perfect
?>


<!doctype html>

<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:white">
  <nav id = "mainNav">

      <ul>
          <li><img src="images/shop.png" alt="icon" width="60" height="40"></li>
          <li><a href="Home.php">Home</a></li>
      </ul>

  </nav>
  <form action="//submit.form" id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
  <table style="width:550px;border:0;" cellpadding="8" cellspacing="0">
  <tr> <td>
  <label for="Name">Sender Name :</label>
  </td> <td>
  <input name="Name" type="text" maxlength="60" style="width:250px;" />
  </td> </tr> <tr> <td>
  <label for="SenderEmail ">Sender E-mail :</label>
  </td> <td>
  <input name="SenderEmail" type="text" maxlength="43" style="width:250px;" />
  </td> </tr> <tr> <td>
  <label for="SenderLocation ">Sender Location :</label>
  </td> <td>
  <input name="SenderLocation" type="text" maxlength="90" style="width:250px;" />
  </td> </tr> <tr> <td>
  <label for="Messagetitle ">Message title :</label>
  </td> <td>
  <input name="Messagetitle" type="text" maxlength="90" style="width:250px;" />
  </td> </tr> <tr> <td>
  <label for="MessageBody">Message Body:</label>
  </td> <td>
  <textarea name="MessageBody" rows="7" cols="40" style="width:350px;"></textarea>
  </td> </tr> <tr> <td>
  </td> <td>
    <input name="skip_Reset" type="reset" value="Reset Form" />
  <input name="skip_Submit" type="submit" value="Submit" />
  </td> </tr>
  </table>
  </form>
<h1 class="container">Sharara Store</h1>



</body>
</html>
