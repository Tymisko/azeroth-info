<?php
    include("auth.php");
    require('to_base.php');
    
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    $query_del_acc = "DELETE FROM users WHERE username = '$username'";

    mysqli_query($to_base,$query_del_acc);

    $result = mysqli_query($to_base,"SELECT * FROM users WHERE username = '$username'");
    $num_of_results = mysqli_num_rows($result);

    if($num_of_results == 0){
        header('Location: login.php');
        session_destroy();
        mysqli_close($to_base);
    } else {exit('Nie udało się usunąć konta');}
?>
