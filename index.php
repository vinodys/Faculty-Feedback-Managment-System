<?php
include("configASL.php");
session_start();
if (isset($_SESSION['aid'])) {
    header("location:home.php");
}
if (!empty($_POST)) {
    $aid = mysqli_real_escape_string($al, $_POST['aid']);
    $pass = mysqli_real_escape_string($al, sha1($_POST['pass']));
    $sql = mysqli_query($al, "select * from admin where aid='$aid' and password='$pass'");
    if (mysqli_num_rows($sql) == 1) {
        $_SESSION['aid'] = $_POST['aid'];
        header("location:home.php");
    } else {
        echo '<script type="text/javascript">alert("Incorrect Admin ID or Password");</script>';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Feedback System</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: url('https://imgs.search.brave.com/PY34f0YbZCu_p38BK9lDeRlKhxGL8i7id9yy6X5Juo8/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YmxkZWFjZXQuYWMu/aW4vaW1hZ2VzL2Js/ZGVhY2V0LmpwZw') no-repeat center center fixed;
        background-size: cover;
        color: #ffffff;
    }

    .overlay {
        background-color: rgba(0, 0, 0, 0.7);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    #topHeader {
        text-align: center;
        padding: 20px;
        background: rgba(0, 0, 0, 0.8);
        font-size: 1.5rem;
        font-weight: 600;
    }

    #topHeader .tag {
        font-size: 1rem;
        font-weight: 300;
        color: #aaa;
    }

    #content {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    .SubHead {
    	color: orange;
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 20px;
    }

    label {
        font-size: 1rem;
        display: block;
        margin: 10px 0;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
        font-size: 1rem;
    }

    input[type="submit"] {
        background: #3b82f6;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    input[type="submit"]:hover {
        background: #2563eb;
        box-shadow: 0 5px 10px rgba(59, 130, 246, 0.5);
        transform: scale(1.05);
    }

    .link {
        color: #3b82f6;
        text-decoration: none;
        font-weight: 600;
    }

    .link:hover {
        text-decoration: underline;
    }

    footer {
        text-align: center;
        margin-top: 50px;
        font-size: 15px;
        color: #aaa;
    }
</style>
</head>
<body>
<div class="overlay"></div>
<div id="topHeader">
    BLDEACET PROJECT BY GROUP G9<br />
    <span class="tag">STUDENT FEEDBACK SYSTEM</span>
</div>

<div id="content">
    <span class="SubHead">Admin Login</span>
    <form method="post" action="">
        <label>Admin ID:</label>
        <input type="text" name="aid" required />

        <label>Password:</label>
        <input type="password" name="pass" required />

        <input type="submit" value="Login" />
    </form>
    <p style="margin-top: 20px;">For Student Login <a href="STDL.php" class="link">Click Here</a></p>
</div>
<footer>
    &copy; 2024 Designed & Developed by Group G9
</footer>
</body>
</html>
