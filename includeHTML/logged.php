<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
echo "<div class='menu-login-logged'>
    <div class='menu-login-relative'>
        <a href='../logout.php' class='menu-btn-sign menu-sign-out'>Log Out</a>
        <a href='../del-acc.php' class='menu-btn-sign menu-del-account'>DEL Account</a>
    </div>
</div>";
}else {echo"
<div class='menu-login'>
    <div class='menu-login-relative'>
        <a href='../register.php' class='menu-btn-sign menu-sign-up'>Sign UP</a>
        <a href='../login.php' class='menu-btn-sign menu-sign-in'>Sign IN</a>   
    </div>
</div>";
}
?> 