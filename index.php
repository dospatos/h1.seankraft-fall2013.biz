<?php session_start();
$_SESSION['HIT_COUNT'] = $_SESSION['HIT_COUNT'] + 1;
/*
 * Created by JetBrains PhpStorm.
 * User: skraft
 * Date: 9/6/13
 * Time: 3:12 PM
 * Create by Sean Kraft for CSCI-E15 Fall 2013
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sean Kraft's CSCI E-15 Web Page</title>
<link type="text/css" rel="stylesheet" href="basic-minimal.css">
</head>

<body>

<article style="width:700px">
    <header>
        <h2>Sean Kraft CSCI E-15</h2>
    </header>
    <nav>
        <a href="https://github.com/dospatos/h1.seankraft-fall2013.biz">Git.com</a> |
        <a href="http://amazon.com">Amazon</a> |
        <a href="http://www.americanwhitewater.org">American Whitewater</a> |
        <a href="http://en.wikipedia.org/wiki/Main_Page">Wikipedia</a>
    </nav>

    <section>
        <p>My name is Sean Kraft. I'm 40 years old and working as a software developer. I live in Beacon, NY and commute to Manhattan by train for work. My main interests are whitewater kayaking, skiing (both alpine and cross country), traveling, and cooking.
        <figure style="float:right;" >
            <img src="images/iceland_dog.jpg" alt="Dog on a fence" width="182" height="143"/>
            <figcaption style="font-style:italic">What will a dog think of next?</figcaption>
        </figure>


        </p>
        <p>
        I'm using the PhpStorm as my editor for this project. It's a 30 day trial, so I may or may not continue to use it. I'm also using Textpad.
        I do software development on Windows for hospitals and corporations. As a result, I'm not that experienced with open source. Taking this class is part of my plan to learn more about it.
        I added some PHP tests below because I wanted to see how hard it would be to connect to a database and read session variables, turns out it's easy enough.
        </p>
    </section>

    <section>
        <header style="font-weight:bold;border:1px;">Here is a section for some sample PHP code</header>
        <div>HTTP_USER_AGENT(testing $_SERVER): <?php echo $_SERVER['HTTP_USER_AGENT'];?></div>
        <div>Page Hit Count(testing $_SESSION): <?php echo $_SESSION['HIT_COUNT'];?></div>
        <br/>
        <header style="font-weight:bold;border:1px;">A list of whitewater rivers stored in a MySQL database</header>
        <?php
        // Connects to your Database
        mysql_connect("localhost", "seankraf_appuser", "jst4cla$$") or die(mysql_error());
        mysql_select_db("seankraf_rivers") or die(mysql_error());
        $data = mysql_query("SELECT * FROM river")
        or die(mysql_error());
        Print "<table style='border:1px solid black;border-collapse:collapse'>";
        while($info = mysql_fetch_array( $data ))
        {
            Print "<tr style='border:1px solid black'>";
            Print "<th>River Name:</th> <td>".$info['river_name'] . "</td> ";
            Print "<th>Class Rating:</th> <td>".$info['class_rating'] . "</td>";
        }
        Print "</table>";
        ?>

    </section>

    <footer>
        <p>Posted by: Sean Kraft</p>
        <p><time datetime="2013-09-15"></time></p>
    </footer>

</article>

</body>

</html>