<html>

<head>
    <link rel="stylesheet" type="text/css" href="design.css"/>
</head>

<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <h1><strong><font size="20">GameShare RGU</font></strong></h1>
        </div>
        <div id="search">
            <Form Name ="login">
                <div id="logintext">
                    <font size="-2"><label for="username">Username :</label><input id="Username" name="username" type="text" size="-2"/><label for="Password">Password :</label><input id="Password" name="password" type="password" size="-2"/></font><input class="form-submit" type="submit" value="Login" />
                    <a id="register" href="Register.html">Not a member? Register.</a>
                </div>
            </form>
        </div>
        <div id="menu">
            <form action="results.php" method="post">
                <ul>
                    <li><a href="#">Homepage</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="search.html">Search</a></li>
                    <li><input id="qsearch" name="qsearch" type="text" placeholder="I want to borrow..."/><input id="qsgo" type="submit"  value="Go"></li>
                </ul>
            </form>
            <br class="clearfix" />
        </div>
    </div>
    <div id="page">
        <div id="content">

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

                $fname = $_POST['Fname'];

                $sname = $_POST['Sname'];

                $stuno = $_POST['stuno'];

                $email = $_POST['email'];

                $password = $_POST['Epassword'];


                $query = "INSERT INTO members(firstName, lastName, email, studentID, password, userRating) VALUES ('Kyle', 'Martin', 'kmartps3@email.com', 1106883, 'Kyle', 1)";

                $conn->exec($query);
                echo "New record created successfully";

                $conn = null;
            ?>
        </div>
        <br class="clearfix" />
    </div>
    <div id="footer">
        &copy; 2016. All rights reserved. Design by <strong>GROUP C</strong>.
    </div>
</div>
</body>
</html>


