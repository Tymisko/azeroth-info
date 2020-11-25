<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Jan Urbaś">
<meta name="description" content="News from Azeroth">
<meta name="keywords" content="world of warcraft,wow,prepatch,shadowlands,news,warcraft,frostmourne,sword, henry,canvil,transmog,wowhead,release,date,server,population,warrior,paladin,hunter,rogue,priest,shaman,mage,warlock,monk,druid,demon hunter,death knight">
<title>Logowanie - Azeroth Info</title> 
<link rel="shortcut icon" href="/favicon.ico">
<link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
<link rel="icon" type="image/png" sizes="196x196" href="/favicon-192.png">
<link rel="icon" type="image/png" sizes="160x160" href="/favicon-160.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">
<link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
<link rel="apple-touch-icon" href="/favicon-57.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon-60.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon-180.png">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="/favicon-144.png">
<meta name="msapplication-config" content="/browserconfig.xml">
<!-- OG TAGS -->
<!-- OG TAGS -->
<meta property="og:title" content="Logowanie - Azeroth Info" />
<meta property="og:type" content="article" />
<meta property="og:description" content="News From Azeroth!" />
<meta property="og:image" content="../img/logo.png" />
<!-- STYLES -->
<link rel="stylesheet" href="css/register.css">
<link rel="stylesheet" href="css/fonts.css">
<!-- SCRIPTS -->
<script src="https://kit.fontawesome.com/af9a5761ff.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- LOGIN FORM -->
<?php
    require('to_base.php');
    session_start();
    // Check if form has been submited
    if (isset($_POST['username'])){
        // mysqli_real_escape_string - Escapes special characters in a string for use in an SQL statement,
        //stripslashes - Un-quotes a quoted string
        $password = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($to_base,$_REQUEST['username']);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($to_base,$_REQUEST['password']);

        // Check connection to database
        $to_base = mysqli_connect($server,$base_login,$base_password,$base);
        if(mysqli_connect_errno()){
            exit ("Error connecting with MySQL server:" . mysqli_connect_error());
        } else{
            echo "Connected with database server. <br>";
        }

        $result = mysqli_query($to_base,"SELECT users.username, users.password FROM users WHERE username='$username' and password='$password'");
        $num_of_results = mysqli_num_rows($result);

        if($num_of_results == 1){
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: index.php");
            exit();
        }
        else {
            echo "<p>There is no accout matches these data.</p>";
        }
        mysqli_close($to_base);
    }
?>
    <div id="login-form">
        <form name="login" action="login.php" method="post">
            <p id="log">Login</p>

            <label class="fo" for="username"><p>Username: <abbr title="required" aria-label="required">*</abbr></p>
            <input class="form-input" type="text" name="username">
            </label>

            <label class="fo" for="password"><p>Password: <abbr title="required" aria-label="required">*</abbr></p>
            <input class="form-input" type="password" name="password">
            </label>

            <input id="btn-login-submit" type="submit" value="Sign In">
            <p id="login">Doesn't have account yet? Register<a href="register.php">here</a></p>
        </form>
    </div>
</body>
</html>