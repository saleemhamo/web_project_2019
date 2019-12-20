
 <?php

session_name("searched");
 session_start();
include("header.php");
include("dbConf.php");
 ?>


<?php
try{
 if(isset($_SESSION["search"]))
 {
   $searchValue=$_SESSION["search"];
       $sqlStatement = "SELECT * FROM products WHERE name LIKE '%$searchValue%'";
       $result = $pdo->query($sqlStatement);
    while( $row = $result->fetch()){
    if(!empty($row)){
    $id=$row['pid'];  $name = $row['name'];$desc=$row['description'];$cat=$row['category']; $siz=$row['size'];
    $pric=$row['price'];  $remark=$row['remarks'];
    echo '<table border=2px cellspacing=10  cellpading=15>';
    echo '<th>'. 'ID  '. '</th>';echo '<th>'. 'Name  '. '</th>';    echo '<th>'. 'Description  '. '</th>';    echo '<th>'. 'Category  '. '</th>';
    echo '<th>'. 'Size  '. '</th>';echo '<th>'. 'Price $  '. '</th>';echo '<th>'. 'Remark  '. '</th>';
    echo "<tr>
    <td>$id</td><td>$name</td><td>$desc</td><td>$cat</td><td>$siz</td><td>$pric</td><td>$remark</td>


                </tr>";
    echo'</table>';

      echo "<br/>";
    }
    else {
      echo "the product is not available!! try again";
    }
}
}
}catch(PDOException $e)
{
   echo  $e->getMessage();
}
  ?>
  <!doctype html>
  <html>
  <head>
      <title>Search Result</title>
          <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body>
  <div  id="result">
  <h1 class="label2">Search Result</h1>
  <?php
  $sqlStatement = "SELECT * FROM products WHERE name LIKE '%$searchValue%'";
  // Prepare the results
  $result = $pdo->query($sqlStatement);
  // Execute the SQL query and get all rows
  $rows = $result->fetchAll();

  //echo $_SESSION['loggedIn'];


  foreach ($rows as $row)
  {
      $sqlStatement = "SELECT * FROM images WHERE pid = '".$row['pid']."'";
  // Prepare the results
      $result = $pdo->query($sqlStatement);
  // Execute the SQL query and get all rows
      $images = $result->fetchAll();
      if (!empty($images[0])) {
          $f = $images[0];
      }

  //echo $row['pid'];
      ?>

      <section id="SingleItems">
          <a href=" <?php echo "singleProduct.php?&pid=".$row['pid'];?>">
              <div>

              <figure style="float: left">
                  <img src="images/<?php echo $row['pid']."_".$f['figure'];?>.jpg" alt="image" width="350" height="350">
              </figure>

          </div>


          <div>


                      <p><?php echo $row['name']?></p>

                      <p><?php echo $row['price']?></p>

                      <p><?php echo $row['remarks']?></p>

                      <a href="">More Info</a>

          </div>
          </a>
      </section>
      <?php
  }
  ?>
  </div>
  </body>
  </html>
