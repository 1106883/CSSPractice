<html>
<body>
<?php

    //header("Location:results.html");

error_reporting(-1);

//if(isset($_POST['submit'])) {
    $dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
    $username = "b52b6c6935c6d2";
    $password = "26ebeed0";
    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $query = "";

    $title = $_POST['title'];
if (!isset($title)) {
    $title = '%';
}

    $genre = $_POST['genre'];
if (!isset($genre)) {
    $genre = '%';
}

$platform = $_POST['platform'];
if (!isset($platform)) {
    $platform = '%';
}

$year = $_POST['year'];
if (!isset($year)) {
    $year = '%';
}

/*$under18 = $_POST['under18'];
if (isset($under18)) {
    $under18 = '18';
}
else {
    $under18 = '100';
}

*/
    if (isset($title)) {//if keyword set goes here
        $query = "SELECT * FROM gameCollection WHERE Title LIKE '%$title%' AND Platform Like '$platform' AND Genre Like '$genre'";
        try {
            $results = $conn->query($query);

            if ($results->rowcount() == 0) {
                echo "no games found <br />";
            } else {

                print "<table>\n";
                echo "<th>title</th><th>Platform</th><th>Genre</th><th>year</th>";
                foreach ($results as $row) {
                    echo "<tr>";
                    echo "<td>" . $row["Title"] . "</td>";
                    echo "<td>" . $row["Platform"] . "</td>";
                    echo "<td>" . $row["Genre"] . "</td>";
                    echo "<td>" . $row["Year"] . "</td>";
                    echo "</tr>\n";
                }
                print "</table>\n";
            }
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }
        $conn = null;
    }

//}
?>
</body>
</html>


