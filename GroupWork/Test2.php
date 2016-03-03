 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<p>
<h1>Results</h1>

<?php
error_reporting(-1);


      $dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
      $username = "b52b6c6935c6d2";
      $password = "26ebeed0";
      try {
          $conn = new PDO( $dsn, $username, $password );
          $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      } catch ( PDOException $e ) {
          echo "Connection failed: " . $e->getMessage();
      }

$title = $_POST['FIFA 16'];



$sql = "SELECT * FROM gameCollection WHERE LIKE '%$title%'";
      try {
          $results = $conn->query( $sql );

          if ($results->rowcount()==0){
              echo "no games found <br />";
          } else {
              //generate table of politicians
              print "<table>\n";
              echo "<th>title</th><th>year</th>";
              foreach ($results as $row){
                  echo "<tr>";
                  echo "<td>".$row["Title"]."</td>";
                  echo "<td>".$row["Year"]."</td>";
                  echo "</tr>\n";
              }
              print "</table>\n";
          }
      } catch ( PDOException $e ) {
          echo "Query failed: " . $e->getMessage();
      }
     $conn = null;
    ?>



</body>
</html>