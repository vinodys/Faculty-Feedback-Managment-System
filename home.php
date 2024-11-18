<?php
include("configASL.php");
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:index.php");
}
$aid=$_SESSION['aid'];
$x=mysqli_query($al,"select * from admin where aid='$aid'");
$y=mysqli_fetch_array($x);
$name=$y['name'];
?>
<!doctype html>
<html><!-- Designed & Developed by BLDEACET PROJECT BY GROUP G9 | Not for Commercial Use-->
<head>
<meta charset="utf-8">
<title>Student Feedback System</title>
<style>
/* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f4f8;
    color: #333;
    line-height: 1.6;
}

a {
    text-decoration: none;
}

/* Header Styles */
#topHeader {
    background-color: #3b8d99;
    color: white;
    padding: 25px 0;
    text-align: center;
    font-size: 26px;
    font-weight: 600;
    letter-spacing: 1px;
    border-bottom: 4px solid #2c7c89;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.tag {
    display: block;
    margin-top: 10px;
    font-size: 16px;
    font-weight: normal;
}

/* Content Section */
#content {
    max-width: 950px;
    margin: 50px auto;
    padding: 40px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-size: 18px;
    color: #4a4a4a;
}

.SubHead {
    font-size: 28px;
    font-weight: 600;
    color: #333;
    margin-bottom: 30px;
    text-transform: uppercase;
}

/* Button Styles */
.button {
    display: inline-block;
    background-color: #3498db;
    color: white;
    padding: 15px 35px;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    border-radius: 50px;
    margin: 12px 20px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

.button:hover {
    background-color: #2980b9;
    transform: translateY(-4px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

.button:active {
    background-color: #1f6596;
    transform: translateY(2px);
}

.button:focus {
    outline: none;
}

/* Responsive Design for Mobile */
@media (max-width: 768px) {
    #content {
        padding: 25px;
    }

    .button {
        font-size: 16px;
        padding: 12px 30px;
        margin: 8px 15px;
    }

    .SubHead {
        font-size: 24px;
    }
}
</style>
</head>

<body>
<div id="topHeader">
    BLDEACET PROJECT BY GROUP G9<br />
    <span class="tag">STUDENT FEEDBACK SYSTEM</span>
</div>
<br>
<br>
<br>
<br>

<div id="content" align="center">
    
    <span class="SubHead">Welcome Admin <?php echo $name;?></span>
    <br>
    <br>

    <a href="feeds.php" class="button">Feedback</a>
    <a href="manageFaculty.php" class="button">Manage Faculty</a>
    <br>
    <br>
    <br>
    <a href="changePass.php" class="button">Change Password</a>
    <a href="logout.php" class="button">Logout</a>
    <br>
    <br>

</div>

</body>
</html>
