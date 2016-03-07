<html>

<head>
    <link rel="stylesheet" type="text/css" href="design.css"/>
</head>

<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <h1><strong><font size="20">GameSwap RGU</font></strong></h1>
        </div>
        <div id="search">
            <Form Name ="login">
                <div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="-2"><label for="username">Username :</label><input id="Username" name="username" type="text" size="-2"/>&nbsp;&nbsp;&nbsp;<label for="Password">Password :</label><input id="Password" name="password" type="password" size="-2"/></font><input class="form-submit" type="submit" value="Login" />
                </div>
            </form>
        </div>
        <div id="menu">
            <ul>
                <li class="first current_page_item"><a href="search.html">Homepage</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"><strong><font size="+3">Search</font></strong></a></li>
                <li><form><input id="qsearch" name="qsearch" type="text"/></form></li>
                <li class="last"><a href="#"></a></li>
            </ul>
            <br class="clearfix" />
        </div>
    </div>
    <div id="page">
        <div id="content">
            <table  style="width:300px" >
                <?php

                //header("Location:results.html");

                error_reporting(-1);

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

                $platform = $_POST['platform'];
                if (!isset($platform)) {
                    $platform = '%';
                }

                $genre = $_POST['genre'];
                if (!isset($genre)) {
                    $genre = '%';
                }

                $year = $_POST['year'];
                if (!isset($year)) {
                    $year = '%';
                }

                $query = "SELECT * FROM gameCollection WHERE Title LIKE '%$title%' AND Platform Like '$platform' AND Genre Like '$genre' AND Year Like '%$year%'";
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

                ?>
            </table>
        </div>
        <br class="clearfix" />
    </div>
    <div id="footer">
        &copy; 2016. All rights reserved. Design by <strong>GROUP C</strong>.
    </div>
</div>
</body>
</html>


